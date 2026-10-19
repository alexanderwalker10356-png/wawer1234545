#!/usr/bin/env bash
set -euo pipefail

# ============================================================
# deploy.sh — Deploy each brand to its own dedicated VPS
#
# Reads servers.conf for domain -> server mapping.
# Reads .env for SSH key path and certbot email.
# Expects downloaded sites in ./downloads/<domain>/
#
# Usage:
#   bash deploy.sh                     # deploy all 6
#   bash deploy.sh --domain ticket.ma  # deploy one
#   bash deploy.sh --dry-run           # show plan without executing
# ============================================================

SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
DOWNLOAD_DIR="${SCRIPT_DIR}/downloads"
SERVERS_CONF="${SCRIPT_DIR}/servers.conf"
ENV_FILE="${SCRIPT_DIR}/.env"
DEPLOY_LOG="${SCRIPT_DIR}/deploy.log"

# ── Load .env ─────────────────────────────────────────────────
if [[ -f "$ENV_FILE" ]]; then
    set -a
    source "$ENV_FILE"
    set +a
fi

SSH_KEY_PATH="${SSH_KEY_PATH:-$HOME/.ssh/id_rsa}"
CERTBOT_EMAIL="${CERTBOT_EMAIL:-admin@ticket.ma}"
SSH_OPTIONS="-o StrictHostKeyChecking=no -o ConnectTimeout=15 -o ServerAliveInterval=30"

log()  { printf '\033[1;34m[%s] >>> %s\033[0m\n' "$(date +%H:%M:%S)" "$1" | tee -a "$DEPLOY_LOG"; }
ok()   { printf '\033[1;32m[%s]  ✓  %s\033[0m\n' "$(date +%H:%M:%S)" "$1" | tee -a "$DEPLOY_LOG"; }
warn() { printf '\033[1;33m[%s]  !  %s\033[0m\n' "$(date +%H:%M:%S)" "$1" | tee -a "$DEPLOY_LOG"; }
err()  { printf '\033[1;31m[%s]  ✗  %s\033[0m\n' "$(date +%H:%M:%S)" "$1" | tee -a "$DEPLOY_LOG"; }

# ── Parse args ────────────────────────────────────────────────
SINGLE_DOMAIN=""
DRY_RUN=false

while [[ $# -gt 0 ]]; do
    case "$1" in
        --domain|-d) SINGLE_DOMAIN="$2"; shift 2 ;;
        --dry-run)   DRY_RUN=true; shift ;;
        --help|-h)
            echo "Usage: bash deploy.sh [--domain ticket.ma] [--dry-run]"
            exit 0
            ;;
        *) echo "Unknown arg: $1"; exit 1 ;;
    esac
done

# ── Validate ──────────────────────────────────────────────────
if [[ ! -f "$SERVERS_CONF" ]]; then
    err "Missing servers.conf — copy from servers.conf.example and fill in IPs."
    exit 1
fi

if [[ ! -d "$DOWNLOAD_DIR" ]]; then
    err "Missing downloads/ directory. Run download_sites.sh first."
    exit 1
fi

# ── Read server config ────────────────────────────────────────
declare -A SERVER_IP SERVER_PORT SERVER_USER SERVER_AUTH

while IFS='|' read -r domain ip port user auth; do
    domain="${domain%%[[:space:]]}"
    [[ "$domain" =~ ^#.*$ ]] && continue
    [[ -z "$domain" ]] && continue
    auth="${auth%%[[:space:]]}"
    SERVER_IP["$domain"]="$ip"
    SERVER_PORT["$domain"]="$port"
    SERVER_USER["$domain"]="$user"
    SERVER_AUTH["$domain"]="$auth"
done < "$SERVERS_CONF"

# ── Filter domains ────────────────────────────────────────────
if [[ -n "$SINGLE_DOMAIN" ]]; then
    if [[ -z "${SERVER_IP[$SINGLE_DOMAIN]+x}" ]]; then
        err "Domain '${SINGLE_DOMAIN}' not found in servers.conf"
        exit 1
    fi
    DOMAINS=("$SINGLE_DOMAIN")
else
    DOMAINS=("${!SERVER_IP[@]}")
fi

# ── SSH helper ────────────────────────────────────────────────
remote_exec() {
    local domain="$1"
    shift
    local ip="${SERVER_IP[$domain]}"
    local port="${SERVER_PORT[$domain]}"
    local user="${SERVER_USER[$domain]}"
    local auth="${SERVER_AUTH[$domain]}"

    local ssh_cmd="ssh ${SSH_OPTIONS} -p ${port}"

    if [[ "$auth" == "key" ]]; then
        ssh_cmd+=" -i ${SSH_KEY_PATH}"
    fi

    if $DRY_RUN; then
        echo "[DRY-RUN] ${ssh_cmd} ${user}@${ip} -- $*"
        return 0
    fi

    ${ssh_cmd} "${user}@${ip}" -- "$@"
}

remote_copy() {
    local domain="$1"
    local src="$2"
    local dest="$3"
    local ip="${SERVER_IP[$domain]}"
    local port="${SERVER_PORT[$domain]}"
    local user="${SERVER_USER[$domain]}"

    local scp_opts="${SSH_OPTIONS} -P ${port}"
    if [[ "${SERVER_AUTH[$domain]}" == "key" ]]; then
        scp_opts+=" -i ${SSH_KEY_PATH}"
    fi

    if $DRY_RUN; then
        echo "[DRY-RUN] rsync ${src} -> ${user}@${ip}:${dest}"
        return 0
    fi

    local ssh_inner="ssh ${SSH_OPTIONS} -p ${port}"
    if [[ "${SERVER_AUTH[$domain]}" == "key" ]]; then
        ssh_inner+=" -i ${SSH_KEY_PATH}"
    fi

    rsync -avz --progress \
        -e "$ssh_inner" \
        "$src" "${user}@${ip}:${dest}"
}

# ── Remote setup script (runs on each VPS) ────────────────────
generate_remote_setup() {
    local domain="$1"
    local certbot_email="$2"

    cat <<'REMOTE_SCRIPT'
#!/usr/bin/env bash
set -euo pipefail
export DEBIAN_FRONTEND=noninteractive

DOMAIN="__DOMAIN__"
CERTBOT_EMAIL="__CERTBOT_EMAIL__"
WEBROOT="/var/www/${DOMAIN}"
SITE_ROOT="${WEBROOT}/public"
NGINX_CONF="/etc/nginx/sites-available/${DOMAIN}.conf"
NGINX_LINK="/etc/nginx/sites-enabled/${DOMAIN}.conf"

echo ">>> Installing packages on $(hostname) for ${DOMAIN}..."

add-apt-repository -y ppa:ondrej/php 2>/dev/null || true
apt-get update -qq

apt-get install -y -qq \
    nginx \
    php8.3-fpm php8.3-cli php8.3-curl php8.3-mbstring \
    php8.3-xml php8.3-zip php8.3-gd php8.3-intl \
    certbot python3-certbot-nginx \
    ufw \
    rsync curl software-properties-common

systemctl enable --now nginx php8.3-fpm

# ── Directory structure ──
mkdir -p "${SITE_ROOT}" "${WEBROOT}/logs"

# ── Nginx config ──
cat > "${NGINX_CONF}" <<NGINX
server {
    listen 80;
    listen [::]:80;
    server_name ${DOMAIN} www.${DOMAIN};

    root ${SITE_ROOT};
    index index.php index.html;

    access_log ${WEBROOT}/logs/access.log;
    error_log  ${WEBROOT}/logs/error.log;

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

    location ~* \.(jpg|jpeg|png|gif|ico|css|js|woff2?|svg|ttf|eot)$ {
        expires 30d;
        add_header Cache-Control "public, immutable";
    }

    # Gzip
    gzip on;
    gzip_types text/plain text/css application/json application/javascript text/xml application/xml text/javascript image/svg+xml;
    gzip_min_length 256;
}
NGINX

ln -sf "${NGINX_CONF}" "${NGINX_LINK}"
rm -f /etc/nginx/sites-enabled/default

# ── PHP hardening ──
PHP_INI="/etc/php/8.3/fpm/php.ini"
sed -i 's/^expose_php.*/expose_php = Off/' "$PHP_INI"
sed -i 's/^upload_max_filesize.*/upload_max_filesize = 20M/' "$PHP_INI"
sed -i 's/^post_max_size.*/post_max_size = 25M/' "$PHP_INI"
sed -i 's/^max_execution_time.*/max_execution_time = 60/' "$PHP_INI"

# ── Permissions ──
chown -R www-data:www-data "${WEBROOT}"

# ── Validate & reload ──
nginx -t
systemctl reload nginx
systemctl restart php8.3-fpm

# ── Firewall ──
ufw --force reset
ufw default deny incoming
ufw default allow outgoing
ufw allow 22/tcp
ufw allow 80/tcp
ufw allow 443/tcp
ufw --force enable

# ── SSL ──
echo ">>> Requesting SSL certificate for ${DOMAIN}..."
certbot --nginx \
    --non-interactive \
    --agree-tos \
    --email "${CERTBOT_EMAIL}" \
    --redirect \
    -d "${DOMAIN}" -d "www.${DOMAIN}" || {
    echo "WARNING: Certbot failed. Ensure DNS A records point to this server."
    echo "Run manually: certbot --nginx -d ${DOMAIN} -d www.${DOMAIN}"
}

echo ">>> Setup complete for ${DOMAIN} on $(hostname)"
REMOTE_SCRIPT
}

# ── Main deployment loop ──────────────────────────────────────
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo " White-Label Multi-Server Deployment"
echo " Targets: ${#DOMAINS[@]} server(s)"
if $DRY_RUN; then
    echo " Mode:    DRY RUN (no changes)"
fi
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""

: > "$DEPLOY_LOG"

FAILED=()
SUCCESS=()

for DOMAIN in "${DOMAINS[@]}"; do
    IP="${SERVER_IP[$DOMAIN]}"
    PORT="${SERVER_PORT[$DOMAIN]}"
    LOCAL_SITE="${DOWNLOAD_DIR}/${DOMAIN}"

    echo ""
    log "═══ Deploying: ${DOMAIN} -> ${IP}:${PORT} ═══"

    # ── Validate local download exists ──
    if [[ ! -d "$LOCAL_SITE" ]]; then
        err "No downloaded site at ${LOCAL_SITE} — skipping ${DOMAIN}"
        FAILED+=("$DOMAIN")
        continue
    fi

    # ── Test SSH connectivity ──
    log "Testing SSH connection to ${IP}..."
    if ! remote_exec "$DOMAIN" "echo 'SSH OK'" 2>/dev/null; then
        err "Cannot connect to ${IP} for ${DOMAIN} — skipping"
        FAILED+=("$DOMAIN")
        continue
    fi
    ok "SSH connected to ${IP}"

    # ── Step 1: Install packages & configure server ──
    log "Setting up server for ${DOMAIN}..."

    SETUP_SCRIPT=$(generate_remote_setup "$DOMAIN" "$CERTBOT_EMAIL")
    SETUP_SCRIPT="${SETUP_SCRIPT//__DOMAIN__/$DOMAIN}"
    SETUP_SCRIPT="${SETUP_SCRIPT//__CERTBOT_EMAIL__/$CERTBOT_EMAIL}"

    if ! remote_exec "$DOMAIN" "bash -s" <<< "$SETUP_SCRIPT"; then
        err "Server setup failed for ${DOMAIN}"
        FAILED+=("$DOMAIN")
        continue
    fi
    ok "Server configured for ${DOMAIN}"

    # ── Step 2: Upload site files ──
    log "Uploading site files for ${DOMAIN}..."
    if ! remote_copy "$DOMAIN" "${LOCAL_SITE}/" "/var/www/${DOMAIN}/public/"; then
        err "File upload failed for ${DOMAIN}"
        FAILED+=("$DOMAIN")
        continue
    fi
    ok "Files uploaded for ${DOMAIN}"

    # ── Step 3: Upload white-label config ──
    log "Uploading white-label config..."
    remote_exec "$DOMAIN" "mkdir -p /var/www/${DOMAIN}/config"
    remote_copy "$DOMAIN" "${SCRIPT_DIR}/white-label/" "/var/www/${DOMAIN}/config/"
    ok "White-label config uploaded"

    # ── Step 4: Fix permissions ──
    remote_exec "$DOMAIN" "chown -R www-data:www-data /var/www/${DOMAIN}"
    ok "Permissions set"

    # ── Step 5: Final nginx reload ──
    remote_exec "$DOMAIN" "nginx -t && systemctl reload nginx"
    ok "Nginx reloaded on ${IP}"

    SUCCESS+=("$DOMAIN")
    ok "═══ ${DOMAIN} deployed successfully ═══"
done

# ── Summary ───────────────────────────────────────────────────
echo ""
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo " Deployment Summary"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""

if [[ ${#SUCCESS[@]} -gt 0 ]]; then
    echo " Successful (${#SUCCESS[@]}):"
    for d in "${SUCCESS[@]}"; do
        echo "   ✓ ${d} -> ${SERVER_IP[$d]}"
    done
    echo ""
fi

if [[ ${#FAILED[@]} -gt 0 ]]; then
    echo " Failed (${#FAILED[@]}):"
    for d in "${FAILED[@]}"; do
        echo "   ✗ ${d} -> ${SERVER_IP[$d]:-?}"
    done
    echo ""
fi

echo " Log: ${DEPLOY_LOG}"
echo ""
echo " Next steps:"
echo "   1. Point each domain's DNS A record to its server IP"
echo "   2. Re-run certbot on servers where SSL failed"
echo "   3. Test each site: curl -I https://<domain>"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
