# Base image
FROM ubuntu:22.04

# Avoid interactive prompts
ENV DEBIAN_FRONTEND=noninteractive

# Install Apache + SSL + utilities
RUN apt-get update && \
    apt-get install -y \
        apache2 \
        ca-certificates \
        curl nano htop btop net-tools \
        vim-tiny \
        procps && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable recommended Apache modules
RUN a2dismod mpm_prefork && \
    a2enmod mpm_event rewrite headers ssl proxy proxy_fcgi

# Expose HTTP + HTTPS
EXPOSE 80 443

# Start Apache in foreground
CMD ["apachectl", "-D", "FOREGROUND"]
