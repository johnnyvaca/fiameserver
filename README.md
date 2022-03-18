# Fiame Server

Cette application Laravel n'a pas de vrai front-end. Elle sert de serveur d'API pour le projet de TPI "Fiame" de Johnny Vaca.

## Prérequis

Votre machine doit être équipée de:

- Un émulateur de terminal bash avec git. Par exemple [cmder](https://cmder.net/)
- Composer, version 2.0.7 ou plus
- npm (de nodejs), version 8.5.1 ou plus
- Un interpréteur php, version 8.0 ou plus avec les extensions suivantes activées:
  - ext-fileinfo
  - pdo_mysql
- Une base de donnée MySQL ou MariaDb
- Postman ou Insomnia ou autre

## Installation

- Dans l'émulateur: 
```
> git clone https://github.com/XCarrel/fiameserver.git
> cd fiameserver
> composer install
```
- Créer une base de donnée (vide) nommée 'fiame'
- Renommer le fichier `.env.example` en `.env`
- Dans ce fichier, mettre à jour les informations concernant la base de données:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fiame
DB_USERNAME= ...
DB_PASSWORD= ...
```

- Dans l'émulateur:
```
> php artisan key:generate
> php artisan migrate --seed
> php artisan serve
```

- Dans Postman/Insomnia, la requête GET `localhost:8000/api/products` doit retourner
```
[
    {
        "id": 1,
        "name": "Lasagne",
        "img": null,
        "selling_date": "2022-04-01 00:00:00",
        "price": 10,
        "user_id": 1
    },
    {
        "id": 2,
        "name": "Couscous",
        "img": null,
        "selling_date": "2022-04-11 00:00:00",
        "price": 12,
        "user_id": 2
    }
]
```
