FROM node:alpine as frontend

COPY package.json package-lock.json /app/
RUN cd /app \
    && npm install
COPY webpack.mix.js /app/
COPY resources/js/ /app/resources/js/
COPY resources/sass/ /app/resources/sass/
RUN cd /app \
      && npm run production


FROM composer as composer
COPY database/ /app/database/
COPY composer.json composer.lock /app/
RUN cd /app \
      && composer install \
           --optimize-autoloader \
           --ignore-platform-reqs \
           --prefer-dist \
           --no-interaction \
           --no-plugins \
           --no-scripts \
           --no-dev

FROM php:7.4-apache-buster
RUN apt-get update \
    && apt-get install -y vim cron libmagickwand-dev imagemagick
RUN docker-php-ext-install intl pdo_mysql bcmath \
    && pecl install redis imagick \
    && docker-php-ext-enable opcache redis imagick \
    && cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini
RUN apt-get clean \
    && apt-get autoclean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

ARG LARAVEL_PATH=/var/www/laravel
WORKDIR ${LARAVEL_PATH}

COPY . ${LARAVEL_PATH}
COPY --from=composer /app/vendor/ ${LARAVEL_PATH}/vendor/
COPY --from=frontend /app/public/js/ ${LARAVEL_PATH}/public/js/
COPY --from=frontend /app/public/css/ ${LARAVEL_PATH}/public/css/
COPY --from=frontend /app/mix-manifest.json ${LARAVEL_PATH}/mix-manifest.json

RUN cd ${LARAVEL_PATH} \
      && php artisan package:discover \
      && chown www-data:www-data bootstrap/cache \
      && chown -R www-data:www-data storage/

RUN rm /etc/apache2/sites-enabled/*
COPY config/apache2 /etc/apache2/
RUN a2enmod rewrite headers \
    && a2ensite laravel