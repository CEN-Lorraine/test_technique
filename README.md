# Test technique développeur.se fullstack du Conservatoire d'espaces naturels de Lorraine

- [Prérequis](#prérequis)
- [Installation](#installation)
- [Base de données](#bdd)
- [Configuration](#configuration)
- [Rôle](#role)
- [Utilisation](#utilisation)

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



