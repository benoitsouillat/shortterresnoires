#!/bin/bash

# Attendez que MySQL soit prêt à accepter des connexions
until nc -z -v -w30 db 3306
do
  echo "En attente de la disponibilité de MySQL sur le port 3306..."
  sleep 5
done
  echo "Mysql démarré"

# Exécution des scripts PHP
# echo "Exécution du script generator.php"
# docker exec php_serveur_php php ./database/generator.php
# echo "Exécution du script make_data.php"
# docker exec php_serveur_php php ./database/make_data.php

# Démarrer Apache
apache2-foreground &

# Exécutez les scripts PHP après le démarrage d'Apache
sleep 10 # Attendez quelques secondes pour que Apache démarre complètement
php /var/www/html/database/generator.php
php /var/www/html/database/make_data.php

# Gardez le conteneur en vie
tail -f /dev/null