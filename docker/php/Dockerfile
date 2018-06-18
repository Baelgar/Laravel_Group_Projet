FROM php:7.0-apache
RUN a2enmod rewrite
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN apt-get update && apt-get install -y \
     zlib1g-dev \
     zip
RUN docker-php-ext-install \
    zip \
  && php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin --filename=composer \
  && chmod +x /usr/local/bin/composer
