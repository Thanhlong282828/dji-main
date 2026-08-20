FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --prefer-dist --no-progress
FROM node:22-alpine AS assets
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY resources resources
COPY vite.config.js ./
RUN npm run build
FROM php:8.4-fpm-alpine
RUN docker-php-ext-install pdo pdo_mysql opcache
WORKDIR /var/www/html
COPY . .
COPY --from=vendor /app/vendor vendor
COPY --from=assets /app/public/build public/build
RUN chown -R www-data:www-data storage bootstrap/cache
USER www-data
HEALTHCHECK --interval=30s CMD php artisan about >/dev/null || exit 1
CMD ["php-fpm"]
