#!/bin/bash
set -e

# Create log file
mkdir -p /var/log
touch /var/log/php-fpm-watermarks.log

# Add cron job
echo "* * * * * root /usr/local/bin/fpm-watermark.sh" > /etc/cron.d/fpm-watermark
chmod 0644 /etc/cron.d/fpm-watermark

# Start cron
cron &

# Start php-fpm in foreground
php-fpm -F

# Wait for any process to exit
wait -n

# Exit with status of the process that exited first
exit $?
