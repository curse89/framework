ARG PHP_VERSION

FROM php:${PHP_VERSION}-fpm

RUN cp /usr/share/zoneinfo/Europe/Moscow /etc/localtime

RUN curl -L https://getcomposer.org/composer-stable.phar -o \
 /usr/bin/composer && chmod a+x /usr/bin/composer

RUN apt update && apt -y upgrade && apt install -y git \
 unzip \
 libtool \
 wget \
 nodejs\
 libzip4 \
 libzip-dev \
 libpq5 \
 libpq-dev \
 zlib1g-dev \
 libxml2-dev \
 build-essential \
 libssl-dev

RUN docker-php-ext-install -j$(nproc) intl soap pcntl sockets pdo_pgsql zip

RUN pecl install pcov redis xdebug && docker-php-ext-enable pcov redis xdebug

CMD ["php-fpm"]
