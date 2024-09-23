# Projet Zoo Arcadia

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


### Pour lancer le projet, voici les commande à entrer dans le terminal:

#### Prérequis: 
- Avoir une base de donnée mysql configurée.
    - Mettre les informations de connexion dans un fichier nommer .env  (Se baser sur le fichier .env.example)
- Avoir php 8 d'installé

#### Mise en place de la bdd
- Lancer la migration pour la base de donnée : 
    ```console
        php artisan migrate
    ```
- Vérifier le status de la migration : 
    ```console
        php artisan migrate:status 
    ```
- Lancer les seeders
    ```console
        php artisan db:seed
    ```
#### Lancer le serveur et le client
- Lancer le client vite
    ```console
       npm run dev
    ```

- Lancer le serveur laravel
    ```console
       php artisan serve
    ```

Pour accéder à la page web, connectez vous sur le lien http://localhost:8000