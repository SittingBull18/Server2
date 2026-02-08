#!/bin/sh
set -eu

WEBROOT="/var/www/certbot"
SLEEP_INTERVAL="12h"
APACHE_CONTAINER="${APACHE_CONTAINER:-apache}"

log() {
printf '%s [certbot] %s\n' "$(date -Iseconds)" "$*"
}

trap 'log "shutdown signal received"; exit 0' TERM INT

log "daemon started"

while true; do
log "starting renewal check"

certbot renew --webroot -w "$WEBROOT" || log "renewal command returned non-zero"

log "sleeping for $SLEEP_INTERVAL"
sleep "$SLEEP_INTERVAL" &
wait $!
done
