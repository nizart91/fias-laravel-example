FROM php:7.2-fpm-alpine

# alpine components
RUN set -xe && apk update && apk add --no-cache \
    shadow \
    libzip \
    bash \
    curl \
    icu-dev \
    libmcrypt-dev \
    libxml2-dev \
    postgresql-dev \
    pcre-dev \
    git \
    autoconf \
    g++ \
    make


# php pecl components
RUN docker-php-ext-install pdo_pgsql pdo_mysql zip pcntl sockets soap intl opcache \
    && docker-php-source extract \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && pecl install rar \
    && docker-php-ext-enable rar \
    && docker-php-source delete


# composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && mkdir -p /.composer \
    && chmod -Rf 777 /.composer


# change uid for nginx user to avoid problems with host permissions
ARG HOST_USER_ID
ARG HOST_GROUP_ID
RUN if [ ! -z "$HOST_USER_ID" ] ; then usermod -u $HOST_USER_ID www-data ; fi \
    && if [ ! -z "$HOST_GROUP_ID" ] ; then groupmod -g $HOST_GROUP_ID www-data ; fi \
    && mkdir /var/session \
    && chown -Rf www-data:www-data /var/session


# laravel pool config
COPY laravel.conf /usr/local/etc/php-fpm.d/laravel.conf


WORKDIR /var/app
