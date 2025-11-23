# Stage 1: Build
FROM php:8.2-fpm-alpine AS build

RUN apk add --no-cache \
    autoconf g++ make oniguruma-dev \
    libpng-dev libjpeg-turbo-dev freetype-dev libzip-dev zip unzip bash git curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . .

RUN composer install --no-dev --optimize-autoloader \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Stage 2: Runtime
FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache \
    bash \
    libpng libpng-dev \
    libjpeg-turbo libjpeg-turbo-dev \
    freetype freetype-dev \
    libzip libzip-dev \
    zlib-dev \
    mariadb-connector-c-dev \
    oniguruma-dev \
    && docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip \
    && apk del libpng-dev libjpeg-turbo-dev freetype-dev libzip-dev zlib-dev mariadb-connector-c-dev


# Copy optimized app from build stage
COPY --from=build /app /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]

