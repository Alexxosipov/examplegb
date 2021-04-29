#!/usr/bin/env bash

set -e

role=${CONTAINER_ROLE:-app}
env=${APP_ENV:-production}

if [ "$env" != "local" ]; then
    echo "Don't forget to cache laravel sources!"
fi

if [ "$role" = "app" ]; then
    exec /usr/sbin/php-fpm7.4 -O

elif [ "$role" = "queue" ]; then

    echo "Running the queue..."
    php /application/artisan queue:work --verbose --tries=3 --timeout=90

elif [ "$role" = "scheduler" ]; then
    echo "Running scheduler..."
    printenv > /etc/environment && echo "cron starting..." && (cron) && : > /var/log/cron.log && tail -f /var/log/cron.log

elif [ "$role" = "websocket" ]; then

    echo "Running websocket..."
    php /application/artisan websockets:serve


else
    echo "Could not match the container role \"$role\""
    exit 1
fi
