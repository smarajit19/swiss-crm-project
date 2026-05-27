FROM composer:2 AS vendor

WORKDIR /app

COPY total-heat-pro/offer/1/composer.json total-heat-pro/offer/1/composer.lock ./
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --no-scripts


FROM node:22-bookworm-slim AS assets

WORKDIR /app

COPY total-heat-pro/offer/1/package*.json total-heat-pro/offer/1/vite.config.js ./
COPY total-heat-pro/offer/1/resources ./resources
COPY total-heat-pro/offer/1/public ./public
RUN npm ci || npm install
RUN npm run build


FROM php:8.3-cli

WORKDIR /var/www/html

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libpq-dev \
        libzip-dev \
    && docker-php-ext-install \
        bcmath \
        pdo_mysql \
        pdo_pgsql \
        zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY total-heat-pro/offer/1 .
COPY --from=vendor /app/vendor ./vendor
COPY --from=assets /app/public/build ./public/build

RUN chmod +x docker/start.sh \
    && mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

EXPOSE 10000

CMD ["docker/start.sh"]
