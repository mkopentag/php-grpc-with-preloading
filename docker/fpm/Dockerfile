FROM kindratmakc/php-fpm-8.1.9-alpine-3.16-with-gdb:latest

WORKDIR /var/www/project

RUN apk add --update $PHPIZE_DEPS zlib-dev linux-headers

RUN pecl install grpc && docker-php-ext-enable  grpc

RUN docker-php-ext-install opcache

COPY docker/fpm/config/php.ini /usr/local/etc/php/php.ini
COPY docker/fpm/config/www.conf /usr/local/etc/php-fpm.d/www.conf

USER www-data
