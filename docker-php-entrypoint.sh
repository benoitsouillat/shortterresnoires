#!/bin/bash

# Attendez que MySQL soit prêt à accepter des connexions
until nc -z -v -w30 db 3306
do
  echo "En attente de la disponibilité de MySQL sur le port 3306..."
  sleep 5
done
  echo "Mysql démarré"

# Démarrer Apache
apache2-foreground &

# Exécutez les scripts PHP après le démarrage d'Apache
sleep 10 # Attendez quelques secondes pour que Apache démarre complètement
php /var/www/html/database/generator.php
php /var/www/html/database/make_data.php

# Gardez le conteneur en vie
tail -f /dev/null