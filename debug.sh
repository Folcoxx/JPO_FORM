#!/bin/bash

docker exec -it jpo_form_php_1 docker-php-ext-install pdo pdo_mysql mysqli
docker exec -it jpo_form_php_1 apachectl restart

# Debug de "Erreur : could not find driver" après l'envoie du formulaire