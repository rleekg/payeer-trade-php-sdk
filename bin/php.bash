#!/usr/bin/env bash

docker-compose --env-file ./docker/.env run --rm php-cli "$@"


