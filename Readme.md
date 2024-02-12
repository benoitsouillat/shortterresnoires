# INSTALLATION DE L'ENVIRONNEMENT 
    docker-compose up --build

# PREPARATION DE LA BASE DE DONNEES
    docker exec php_serveur_php php ./database/generator.php

# --- DEV ONLY --- : CREER ADMINISTRATEUR ET DONNEES DE BASES --- DEV ONLY ---
    docker exec php_serveur_php php ./database/make_data.php

 