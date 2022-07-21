FROM php:8.0-apache
WORKDIR /var/www/html
COPY ./public-html/index.php index.php
EXPOSE 80