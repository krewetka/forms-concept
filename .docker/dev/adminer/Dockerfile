FROM adminer:standalone

ARG TIMEZONE

USER root

RUN apk add --update tzdata && \
    cp /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && \
    echo "${TIMEZONE}" > /etc/timezone

COPY adminer.css /var/www/html
COPY php.ini /usr/local/etc/php/conf.d/

USER adminer
