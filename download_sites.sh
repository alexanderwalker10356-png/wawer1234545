#!/usr/bin/env bash
set -euo pipefail

# ============================================================
# download_sites.sh — Mirror all brand websites locally
#
# Uses wget to create full offline copies with converted links.
# Run on your LOCAL machine before deploy.sh.
#
# Dependencies: wget
# Usage: bash download_sites.sh [--domain ticket.ma]
# ============================================================

DOWNLOAD_DIR="./downloads"
LOG_DIR="./downloads/logs"

DOMAINS=(
    "ticket.ma"
    "majourneys.com"
    "marrakech-desert-trips.com"
    "oncf-voyages.ma"
    "ctm.ma"
    "supratours.ma"
)

USER_AGENT="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36"

WAIT_SEC=1
MAX_RETRIES=3
DEPTH=10
RATE_LIMIT="500k"

log()  { printf '\033[1;34m[%s] >>> %s\033[0m\n' "$(date +%H:%M:%S)" "$1"; }
ok()   { printf '\033[1;32m[%s]  ✓  %s\033[0m\n' "$(date +%H:%M:%S)" "$1"; }
warn() { printf '\033[1;33m[%s]  !  %s\033[0m\n' "$(date +%H:%M:%S)" "$1"; }
err()  { printf '\033[1;31m[%s]  ✗  %s\033[0m\n' "$(date +%H:%M:%S)" "$1"; }

# ── Parse args ────────────────────────────────────────────────
SINGLE_DOMAIN=""
while [[ $# -gt 0 ]]; do
    case "$1" in
        --domain|-d) SINGLE_DOMAIN="$2"; shift 2 ;;
        --help|-h)
            echo "Usage: bash download_sites.sh [--domain ticket.ma]"
            echo "  Without --domain, downloads all 6 sites."
            exit 0
            ;;
        *) echo "Unknown arg: $1"; exit 1 ;;
    esac
done

if [[ -n "$SINGLE_DOMAIN" ]]; then
    DOMAINS=("$SINGLE_DOMAIN")
fi

# ── Pre-flight ────────────────────────────────────────────────
if ! command -v wget &>/dev/null; then
    err "wget is not installed. Install it:"
    echo "  Ubuntu/Debian: sudo apt install wget"
    echo "  macOS:         brew install wget"
    exit 1
fi

mkdir -p "$DOWNLOAD_DIR" "$LOG_DIR"

# ── Download function ─────────────────────────────────────────
download_site() {
    local domain="$1"
    local dest="${DOWNLOAD_DIR}/${domain}"
    local logfile="${LOG_DIR}/${domain}.log"

    log "Downloading: ${domain}"

    if [[ -d "$dest" ]]; then
        warn "Directory ${dest} exists. Resuming/updating mirror."
    fi

    mkdir -p "$dest"

    wget \
        --mirror \
        --convert-links \
        --adjust-extension \
        --page-requisites \
        --no-parent \
        --directory-prefix="$dest" \
        --no-host-directories \
        --restrict-file-names=windows \
        --user-agent="$USER_AGENT" \
        --wait="$WAIT_SEC" \
        --random-wait \
        --tries="$MAX_RETRIES" \
        --timeout=30 \
        --level="$DEPTH" \
        --limit-rate="$RATE_LIMIT" \
        --execute robots=off \
        --reject "*.exe,*.dmg,*.zip,*.tar.gz,*.rar" \
        --no-check-certificate \
        --content-disposition \
        --trust-server-names \
        --continue \
        "https://${domain}/" \
        2>&1 | tee "$logfile"

    local status=${PIPESTATUS[0]}

    if [[ $status -eq 0 ]] || [[ $status -eq 8 ]]; then
        ok "Downloaded: ${domain} -> ${dest}"
    else
        warn "wget exited with code ${status} for ${domain} (partial download may exist)"
    fi

    local file_count
    file_count=$(find "$dest" -type f | wc -l)
    local total_size
    total_size=$(du -sh "$dest" 2>/dev/null | cut -f1)
    echo "   Files: ${file_count}, Size: ${total_size}"
    echo ""
}

# ── Post-processing: fix remaining absolute URLs ──────────────
postprocess_site() {
    local domain="$1"
    local dest="${DOWNLOAD_DIR}/${domain}"

    log "Post-processing: ${domain}"

    # Replace any remaining absolute URLs to this domain with relative paths
    find "$dest" -type f \( -name "*.html" -o -name "*.css" -o -name "*.js" \) \
        -exec sed -i \
            -e "s|https\?://${domain}/|/|g" \
            -e "s|https\?://www\.${domain}/|/|g" \
            {} +

    # Remove query strings from local file references in HTML
    find "$dest" -type f -name "*.html" \
        -exec sed -i \
            -e 's|\(href="[^"?]*\)?[^"]*"|\1"|g' \
            -e 's|\(src="[^"?]*\)?[^"]*"|\1"|g' \
            {} +

    ok "Post-processed: ${domain}"
}

# ── Main loop ─────────────────────────────────────────────────
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo " White-Label Site Downloader"
echo " Targets: ${#DOMAINS[@]} site(s)"
echo " Output:  ${DOWNLOAD_DIR}/"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""

for DOMAIN in "${DOMAINS[@]}"; do
    download_site "$DOMAIN"
done

echo ""
log "Post-processing downloaded sites..."

for DOMAIN in "${DOMAINS[@]}"; do
    postprocess_site "$DOMAIN"
done

# ── Summary ───────────────────────────────────────────────────
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo " Download complete!"
echo ""
for DOMAIN in "${DOMAINS[@]}"; do
    local_size=$(du -sh "${DOWNLOAD_DIR}/${DOMAIN}" 2>/dev/null | cut -f1 || echo "?")
    echo "  ✓ ${DOMAIN}  (${local_size})"
done
echo ""
echo " Downloaded to: ${DOWNLOAD_DIR}/"
echo " Logs:          ${LOG_DIR}/"
echo ""
echo " Next step: bash deploy.sh"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
