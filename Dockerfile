FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl pdo pdo_mysql \
    && docker-php-ext-enable intl pdo pdo_mysql

COPY apache.conf /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html
