#!/usr/bin/env bash
set -e
php artisan migrate --force
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan storage:link || true
php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
