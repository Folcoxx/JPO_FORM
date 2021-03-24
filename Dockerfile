FROM php:7.4.16-apache
RUN apt-get update
RUN docker-php-ext-install mysqli 
RUN docker-php-ext-enable mysqli
RUN apachectl restart