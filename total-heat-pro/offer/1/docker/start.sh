#!/usr/bin/env bash
set -e

php artisan config:clear
php artisan view:clear

if [ "${RUN_MIGRATIONS:-false}" = "true" ]; then
    php artisan migrate --force
fi

php artisan config:cache
php artisan storage:link || true

php -S 0.0.0.0:"${PORT:-10000}" -t public docker/router.php
