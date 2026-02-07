# Use official PHP image with FPM (FastCGI Process Manager)
FROM php:8.1-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y \
    libmysqlclient-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Optional: Copy in custom php.ini configuration (you can create your own php.ini if needed)
# COPY ./php.ini /usr/local/etc/php/

# Expose the port for PHP-FPM (default 9000)
EXPOSE 9000
