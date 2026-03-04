# Use official PHP image with FPM (FastCGI Process Manager)
FROM php:8.1-fpm

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install system dependencies required for PHP extensions
RUN apt-get update && apt-get install -y \
        libmariadb-dev \
        libzip-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libicu-dev \
        ffmpeg \
        pkg-config \
        less nano curl libfcgi-bin cron \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        mysqli \
        pdo \
        pdo_mysql \
        gd \
    && install-php-extensions zip intl imagick \
       \
    && apt-get purge -y --auto-remove pkg-config \
       libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
       libicu-dev \
    && apt-get install -y cron \
    && rm -rf /var/lib/apt/lists/* /tmp/pear

# Optional: Copy in custom php.ini configuration (you can create your own php.ini if needed)
# COPY ./php.ini /usr/local/etc/php/


# Expose the port for PHP-FPM (default 9000)
EXPOSE 9000

COPY fpm-watermark.sh /usr/local/bin/fpm-watermark.sh
RUN chmod +x /usr/local/bin/fpm-watermark.sh
COPY run.sh /usr/local/bin/run.sh
RUN chmod +x /usr/local/bin/run.sh
CMD ["/usr/local/bin/run.sh"]

