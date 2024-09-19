# Test technique développeur.se fullstack du Conservatoire d'espaces naturels de Lorraine

- [Prérequis](#prérequis)
- [Installation](#installation)
- [Téchnologies](#Téchnologies)
- [Consignes](#Consignes)


## Prérequis
    * Environnement de dev (wamp / lamp)
    * Php >= 8.2
    * Mysql
    * Node >= v16.18.0
    * Npm >= 8.19.2
    * Composer
    * Git

## Installation
```sh
git clone https://github.com/CEN-Lorraine/test_technique.git
```
 Une fois le clone effectué, renommer le fichier .env.example en .env à la racine de l'application en indiquant la connexion à votre base de données dans les champs suivants :
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_technique ==> à modifier en fonction de votre BDD
DB_USERNAME=root ==> à modifier en fonction de votre BDD
DB_PASSWORD= ==> à modifier en fonction de votre BDD
```
A la racine de votre application, ouvrir une console et lancer la commande suivante :
```sh
composer update
```
Lancer la commande suivante pour générer les tables :
```sh
php artisan:migrate
```
Lancer ensuite la commande suivante :
```sh
npm update
```
```sh
npm run dev
```
Rendez-vous sur votre localhost (en indiquant /public à la fin), exemple : http://localhost/test_technique/public
Faites-vous un compte dans l'onglet inscription, et vous servez connecté, c'est partit !

## Téchnologies
L'application utilise les technologies suivantes :
- Laravel 11 (https://laravel.com/docs/11.x)
- Vue 3 (https://vuejs.org/guide/introduction.html)
- Intertia (https://inertiajs.com/)
- Bootstrap 5 (https://getbootstrap.com/docs/5.0/getting-started/introduction/)
- MySql (https://www.mysql.com/fr/)

## Consignes
Une fois connecté, vous verrez une petite structure d'application déjà existante. Le but de ce test est de voir votre capacité à comprendre mais aussi à réutiliser du code existant. Ne vous inquiétez pas si vous n'arrivez pas à tout faire !
(Vous retrouverez les consignes sur la page d'accueil de l'application).

1)  Rajouter une fonctionnalité pour pouvoir créer une nouvelle mission (l’édition et la suppression sont déjà fonctionnelles).

2)  Régler le problème de suppression d’une mission

3)  Créer les fonctionnalités suivantes pour les projets :
- Création
- Édition
- Suppression
Vous pouvez vous inspirer de ce qui a été fait dans l’onglet mission.
-   Ajouter dans le formulaire, la possibilité d’au moins relier une mission à un projet, l’idéal serait de pouvoir relier plusieurs missions à un projet (vous devrez utiliser les fichiers de migrations de Laravel).

4)  Créer un nouvel espace où l’utilisateur pourra modifier :
-   Son nom
-   Son Email
-   (Optionnel) son mot de passe

NOTE : N'hésitez pas à commenter votre code !!!

Une fois terminé, faire une pull request sur le repository, ou déposer directement le code sur un github à vous !

Bon code !