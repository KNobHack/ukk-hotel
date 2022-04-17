FROM php:8.1.4-apache

# extension installer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions mysqli pdo_mysql intl @composer

# mod_rewrite
RUN a2enmod rewrite

WORKDIR /var/www/

COPY composer.json .

RUN composer install --no-dev

COPY . .
COPY public html/

RUN chown www-data writable -R