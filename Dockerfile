FROM php:7.4-apache
RUN docker-php-ext-install mysqli
COPY . /var/www/html
EXPOSE 80
RUN echo "opcache.enable=0" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini
