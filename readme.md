# Multilingual Web Application with Laravel

Ever wondered how to create a web application that supports multiple languages? Learn how to create a database that handles translations, language switcher and localization files.

*[Read online](https://laravelista.com/series/multilingual-web-application-with-laravel)*

## Installation

Clone repository to your drive and type in terminal there:

```
composer install
```

## Configuration

Copy file `.env.example` to `.env` file:

```
cp .env.example .env
```

and change the `APP_KEY` in `.env` using:

```
php artisan key:generate
```

## Running

From terminal type:

```
php artisan serve
```

You should get an address to open in your browser like http://localhost:8000.

**Have fun!**
