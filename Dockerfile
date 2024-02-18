# Utilisez l'image officielle PHP comme base
FROM php:8.2-apache

# Copiez le script d'attente MySQL
COPY docker-php-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-php-entrypoint.sh

# Installation d'Apache et des dépendances
RUN apt-get update && apt-get install -y \
    apache2 \
    libgd-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    netcat-traditional \
    && rm -rf /var/lib/apt/lists/*

# Installez les extensions PHP nécessaires pour votre application
RUN docker-php-ext-install mysqli pdo pdo_mysql gd fileinfo

# Activation de l'extension GD
RUN docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \ 
    --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable gd

# Configuration d'Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT /var/www/html
# ENV UPLOAD_LIMIT 64M
# ENV POST_MAX_SIZE 64M 
# ENV MAX_EXECUTION_TIME 60
# ENV MAX_INPUT_TIME 60
# ENV MEMORY_LIMIT 512M
# ENV APACHE_KEEP_ALIVE_TIMEOUT=30 \
#     APACHE_MAX_KEEP_ALIVE_REQUESTS=120
WORKDIR ${APACHE_DOCUMENT_ROOT}

# Copiez les fichiers de votre application dans le conteneur
COPY . ${APACHE_DOCUMENT_ROOT}
RUN mkdir -p /var/www/html/src/img/repros && \
    mkdir -p /var/www/html/src/img/puppies && \
    mkdir -p /var/www/html/src/img/diapos/repros && \
    mkdir -p /var/www/html/src/img/diapos/tmp && \
    mkdir -p /var/www/html/src/img/diapos/puppies && \
    chown -R www-data:www-data /var/www/html/src/img && \
    chmod +rwx -R /var/www/html

# Modification de les valeurs des variables directement dans php.ini -- upload_limit permet d'envoyer les grosses images et qu'elles soient traités par php
RUN echo "post_max_size = 64M" >> /usr/local/etc/php/php.ini && \
    echo "max_input_time = 60" >> /usr/local/etc/php/php.ini && \
    echo "apache_keep_alive_timeout = 30" >> /usr/local/etc/php/php.ini && \
    echo "apache_max_keep_alive_requests = 120" >> /usr/local/etc/php/php.ini && \
    echo "memory_limit = 1024M" >> /usr/local/etc/php/php.ini && \
    echo "max_execution_time = 60" >> /usr/local/etc/php/php.ini && \
    echo "upload_max_filesize = 64M" >> /usr/local/etc/php/php.ini && \
    echo "upload_limit = 64M" >> /usr/local/etc/php/php.ini


# Exposez le port 80 pour le serveur web Apache
EXPOSE 80

# Commande par défaut pour démarrer le serveur web Apache
CMD ["/usr/local/bin/docker-php-entrypoint.sh"]