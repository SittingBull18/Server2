#!/bin/sh

LOGFILE="/var/log/php-fpm-watermarks.log"
STATEFILE="/tmp/fpm-active-samples"

ACTIVE=$(
SCRIPT_NAME=/fpm-status \
SCRIPT_FILENAME=/fpm-status \
REQUEST_METHOD=GET \
cgi-fcgi -bind -connect 127.0.0.1:9001 2>/dev/null \
| awk -F':' '$1=="active processes" {gsub(/ /,"",$2); print $2}'
)


# numeric check
case "$ACTIVE" in
  ''|*[!0-9]*) exit 0 ;;
esac

echo "active: $ACTIVE"

echo "$ACTIVE" >> "$STATEFILE"

COUNT=$(wc -l < "$STATEFILE")

if [ "$COUNT" -ge 10 ]; then
    HIGH=$(sort -n "$STATEFILE" | tail -1)
    LOW=$(sort -n "$STATEFILE" | head -1)

    echo "$(date '+%Y-%m-%d %H:%M:%S') HIGH=$HIGH LOW=$LOW" >> "$LOGFILE"

    : > "$STATEFILE"
fi
