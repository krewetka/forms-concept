#!/bin/sh
set -e

if [ ! -f /app/vendor/autoload.php ]; then
    composer build
fi

exec "$@"
