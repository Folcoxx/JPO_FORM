FROM php:7.4.16-apache
WORKDIR /var/iut
RUN mkdir -p /var/iut
COPY index.php /var/iut/
COPY traitement.php /var/iut/
COPY css/ /var/iut/
COPY img/ /var/iut/
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo pdo_mysql