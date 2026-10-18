#!/usr/bin/env bash
set -euo pipefail

# ============================================================
# deploy.sh — Multi-tenant White-Label VPS deployment
# Targets: Ubuntu 22.04 / 24.04 clean install
# ============================================================

BRANDS=(
    "ticket.ma"
    "majourneys.com"
    "marrakech-desert-trips.com"
    "oncf-voyages.ma"
    "ctm.ma"
    "supratours.ma"
)

MYSQL_ROOT_PASSWORD="${MYSQL_ROOT_PASSWORD:-$(openssl rand -base64 24)}"
DB_PREFIX="brand_"
WEBROOT="/var/www"
NGINX_CONF_DIR="/etc/nginx/sites-available"
NGINX_ENABLED_DIR="/etc/nginx/sites-enabled"
CERTBOT_EMAIL="${CERTBOT_EMAIL:-admin@ticket.ma}"

log() { printf '\n\033[1;34m>>> %s\033[0m\n' "$1"; }

# ── 0. Pre-flight ─────────────────────────────────────────────
if [[ $EUID -ne 0 ]]; then
    echo "Run as root: sudo bash deploy.sh" >&2
    exit 1
fi

export DEBIAN_FRONTEND=noninteractive

# ── 1. System packages ────────────────────────────────────────
log "Installing system packages"

add-apt-repository -y ppa:ondrej/php
apt-get update -qq

apt-get install -y -qq \
    nginx \
    php8.3-fpm php8.3-cli php8.3-curl php8.3-mbstring \
    php8.3-mysql php8.3-xml php8.3-zip php8.3-gd php8.3-intl \
    mysql-server \
    git \
    certbot python3-certbot-nginx \
    ufw \
    unzip curl software-properties-common

systemctl enable --now nginx php8.3-fpm mysql

# ── 2. MySQL root password ────────────────────────────────────
log "Configuring MySQL"

mysql -u root <<SQL
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '${MYSQL_ROOT_PASSWORD}';
FLUSH PRIVILEGES;
SQL

CREDS_FILE="/root/.brand_credentials"
echo "# Auto-generated credentials — $(date -Iseconds)" > "$CREDS_FILE"
echo "MYSQL_ROOT_PASSWORD=${MYSQL_ROOT_PASSWORD}" >> "$CREDS_FILE"
chmod 600 "$CREDS_FILE"

# ── 3. Per-brand setup ────────────────────────────────────────
for DOMAIN in "${BRANDS[@]}"; do
    SAFE_NAME="${DOMAIN//[.-]/_}"
    DB_NAME="${DB_PREFIX}${SAFE_NAME}"
    DB_USER="u_${SAFE_NAME}"
    DB_PASS="$(openssl rand -base64 18)"
    SITE_ROOT="${WEBROOT}/${DOMAIN}/public"

    log "Setting up brand: ${DOMAIN}"

    # ── 3a. Directory structure ──
    mkdir -p "${SITE_ROOT}"
    mkdir -p "${WEBROOT}/${DOMAIN}/logs"
    mkdir -p "${WEBROOT}/${DOMAIN}/storage"

    cat > "${SITE_ROOT}/index.php" <<'PHPEOF'
<?php
$domain = $_SERVER['HTTP_HOST'] ?? 'unknown';
$config = json_decode(file_get_contents(__DIR__ . '/../../white-label/brands.json'), true);
$brand = $config['brands'][$domain] ?? $config['brands']['default'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($brand['name']) ?></title>
    <style>
        :root {
            --primary: <?= htmlspecialchars($brand['colors']['primary']) ?>;
            --secondary: <?= htmlspecialchars($brand['colors']['secondary']) ?>;
            --accent: <?= htmlspecialchars($brand['colors']['accent']) ?>;
        }
        body { font-family: <?= htmlspecialchars($brand['font']) ?>; text-align: center; padding: 4rem 1rem; }
        h1 { color: var(--primary); }
    </style>
</head>
<body>
    <h1><?= htmlspecialchars($brand['name']) ?> — Online</h1>
    <p>Platform is running.</p>
</body>
</html>
PHPEOF

    chown -R www-data:www-data "${WEBROOT}/${DOMAIN}"

    # ── 3b. MySQL database & user ──
    mysql -u root -p"${MYSQL_ROOT_PASSWORD}" <<SQL
CREATE DATABASE IF NOT EXISTS \`${DB_NAME}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER IF NOT EXISTS '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASS}';
GRANT ALL PRIVILEGES ON \`${DB_NAME}\`.* TO '${DB_USER}'@'localhost';
FLUSH PRIVILEGES;
SQL

    echo "DB_${SAFE_NAME}=${DB_NAME} | USER=${DB_USER} | PASS=${DB_PASS}" >> "$CREDS_FILE"

    # ── 3c. Nginx virtual host ──
    cat > "${NGINX_CONF_DIR}/${DOMAIN}.conf" <<NGINX
server {
    listen 80;
    listen [::]:80;
    server_name ${DOMAIN} www.${DOMAIN};

    root ${SITE_ROOT};
    index index.php index.html;

    access_log ${WEBROOT}/${DOMAIN}/logs/access.log;
    error_log  ${WEBROOT}/${DOMAIN}/logs/error.log;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location ~ \.php\$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(ht|git|env) {
        deny all;
    }

    location ~* \.(jpg|jpeg|png|gif|ico|css|js|woff2?)$ {
        expires 30d;
        add_header Cache-Control "public, immutable";
    }
}
NGINX

    ln -sf "${NGINX_CONF_DIR}/${DOMAIN}.conf" "${NGINX_ENABLED_DIR}/${DOMAIN}.conf"
done

# Remove default site
rm -f "${NGINX_ENABLED_DIR}/default"

# ── 4. Nginx validation & reload ──────────────────────────────
log "Validating Nginx configuration"
nginx -t
systemctl reload nginx

# ── 5. SSL via Certbot ────────────────────────────────────────
log "Obtaining SSL certificates"

DOMAIN_ARGS=""
for DOMAIN in "${BRANDS[@]}"; do
    DOMAIN_ARGS="${DOMAIN_ARGS} -d ${DOMAIN} -d www.${DOMAIN}"
done

certbot --nginx \
    --non-interactive \
    --agree-tos \
    --email "${CERTBOT_EMAIL}" \
    --redirect \
    ${DOMAIN_ARGS} || {
    echo "WARNING: Certbot failed. DNS must point to this server first."
    echo "Run manually: certbot --nginx ${DOMAIN_ARGS}"
}

# ── 6. Firewall ───────────────────────────────────────────────
log "Configuring firewall"
ufw --force reset
ufw default deny incoming
ufw default allow outgoing
ufw allow 22/tcp
ufw allow 80/tcp
ufw allow 443/tcp
ufw --force enable

# ── 7. PHP hardening ──────────────────────────────────────────
log "Hardening PHP"
PHP_INI="/etc/php/8.3/fpm/php.ini"
sed -i 's/^expose_php.*/expose_php = Off/' "$PHP_INI"
sed -i 's/^upload_max_filesize.*/upload_max_filesize = 20M/' "$PHP_INI"
sed -i 's/^post_max_size.*/post_max_size = 25M/' "$PHP_INI"
sed -i 's/^max_execution_time.*/max_execution_time = 60/' "$PHP_INI"
systemctl restart php8.3-fpm

# ── 8. Summary ────────────────────────────────────────────────
log "Deployment complete"

echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo " Credentials saved to: ${CREDS_FILE}"
echo " Brands deployed: ${#BRANDS[@]}"
echo ""
for DOMAIN in "${BRANDS[@]}"; do
    echo "  ✓ ${DOMAIN} → ${WEBROOT}/${DOMAIN}/public"
done
echo ""
echo " Next steps:"
echo "   1. Point DNS A records to this server"
echo "   2. Re-run certbot if SSL failed"
echo "   3. Deploy application code to each brand"
echo "   4. Copy white-label/brands.json to ${WEBROOT}/"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
