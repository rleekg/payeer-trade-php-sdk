FROM php:7.4.28-cli as base

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update; \
    apt-get upgrade -y; \
    apt-get install -y --no-install-recommends unzip;

ARG USER_ID
RUN groupadd --gid "$USER_ID" dev \
    && useradd --uid "$USER_ID" --gid dev --shell /bin/bash --create-home dev

RUN su dev -c 'mkdir -p /home/dev/.composer/ /home/dev/app/'

USER dev

WORKDIR /home/dev/app/
