#!/bin/sh
set -xe

# Detect the host IP
export DOCKER_BRIDGE_IP=$(ip ro | grep default | cut -d' ' -f 3)

if [ "$SYMFONY_ENV" = 'dev' ]; then
    composer install --prefer-dist --no-progress --no-suggest
else
    composer install --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader --classmap-authoritative
fi
# Create Database an mmodel
bin/console doctrine:database:create
bin/console doctrine:schema:update --force

# Import ciqual from url
bin/console bin/console fmu:ciqual-importer

# Start Apache with the right permissions after removing pre-existing PID file
rm -f /var/run/apache2/apache2.pid
exec docker/apache/start_safe_perms -DFOREGROUND
