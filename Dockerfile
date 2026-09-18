FROM php:8.2-apache

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html

COPY web/ .

EXPOSE 80

CMD ["apache2-foreground"]
