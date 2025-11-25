# Stage 1: Build
FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
    autoconf g++ make oniguruma-dev \
    libpng-dev libjpeg-turbo-dev freetype-dev libzip-dev zip unzip bash git curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Permissions
RUN chown -R www-data:www-data /var/www

CMD ["php-fpm", "-F"]
