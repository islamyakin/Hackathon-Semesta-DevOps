FROM php:8.1-fpm
ENV HOSTNAME phpsemesta
COPY . /app
WORKDIR /app
RUN docker-php-ext-install pdo_mysql
