# Starter kit pour le projet


Ce reposoitory comprend 2 répertoires principaux :
- `backend` : contient le code du backend
- `frontend` : contient le code du frontend 


## Configuration du backend
Pré-requis : installation de composer : https://getcomposer.org/download/

1. Se rendre dans le répertoire `backend`
2. Lancer la commande `composer install` pour installer les dépendances (si pb, essayer `composer update`)
3. copier le fichier .env.example dans .env 
4. Créer le fichier database.sqlite dans le répertoire `backend/database` (`touch database/database.sqlite`)
5. Lancer la commande `php artisan migrate:fresh --seed` pour créer la base de données et insérer les données de test
6. Lancer la commande `php artisan serve` pour lancer le serveur


## Configuration du frontend
1. Se rendre dans le répertoire `frontend`
2. Lancer la commande `npm install` pour installer les dépendances
3. Lancer la commande `npm run dev` pour lancer le serveur

Pour tester l'application, plusieurs utilisateurs ont été crées : prenom@test.com / password