#!/usr/bin/env bash
set -e

php artisan config:clear
php artisan view:clear

if [ "${RUN_MIGRATIONS:-false}" = "true" ]; then
    php artisan migrate --force
fi

php artisan config:cache
php artisan storage:link || true

php artisan serve --host=0.0.0.0 --port="${PORT:-10000}"
