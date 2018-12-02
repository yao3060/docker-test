FROM php:7.2-fpm

RUN echo "deb http://mirrors.aliyun.com/debian/ stretch main non-free contrib" > /etc/apt/sources.list
RUN echo "deb-src http://mirrors.aliyun.com/debian/ stretch main non-free contrib" >> /etc/apt/sources.list
RUN echo "deb http://mirrors.aliyun.com/debian-security stretch/updates main" >> /etc/apt/sources.list
RUN echo "deb-src http://mirrors.aliyun.com/debian-security stretch/updates main" >> /etc/apt/sources.list
RUN echo "deb http://mirrors.aliyun.com/debian/ stretch-updates main non-free contrib" >> /etc/apt/sources.list
RUN echo "deb-src http://mirrors.aliyun.com/debian/ stretch-updates main non-free contrib" >> /etc/apt/sources.list
RUN echo "deb http://mirrors.aliyun.com/debian/ stretch-backports main non-free contrib" >> /etc/apt/sources.list
RUN echo "deb-src http://mirrors.aliyun.com/debian/ stretch-backports main non-free contrib" >> /etc/apt/sources.list

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils

# Install GD
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install gd

# install pdo_mysql for drupal, mysqli for wordpress
RUN docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install mysqli pdo_mysql

RUN pecl install redis \
    && pecl install xdebug \
    && docker-php-ext-enable redis xdebug


# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Copy configuration
COPY config/opcache.ini $PHP_INI_DIR/conf.d/
COPY config/xdebug.ini $PHP_INI_DIR/conf.d/