FROM php:8.1.0-fpm-alpine
RUN apk add --no-cache mysql-client libpng-dev jpeg-dev freetype-dev libxml2-dev icu-dev libjpeg-turbo-dev \
    nginx supervisor curl bash busybox-suid git openssh wget apache2-utils coreutils tzdata zip libzip-dev
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd