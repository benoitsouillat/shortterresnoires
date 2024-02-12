# Utilisez l'image officielle PHP comme base
FROM php:8.1-apache

# Copiez le script d'attente MySQL
COPY docker-php-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-php-entrypoint.sh

# Installation d'Apache et des dépendances
RUN apt-get update && apt-get install -y \
    apache2 \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    netcat-traditional \
    && rm -rf /var/lib/apt/lists/*

# Installez les extensions PHP nécessaires pour votre application
RUN docker-php-ext-install mysqli pdo pdo_mysql gd

# Activation de l'extension GD
RUN docker-php-ext-enable gd

# Configuration d'Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN a2enmod rewrite

WORKDIR ${APACHE_DOCUMENT_ROOT}

# Copiez les fichiers de votre application dans le conteneur
COPY . ${APACHE_DOCUMENT_ROOT}

# Exposez le port 80 pour le serveur web Apache
EXPOSE 80

# Commande par défaut pour démarrer le serveur web Apache
CMD ["/usr/local/bin/docker-php-entrypoint.sh"]
