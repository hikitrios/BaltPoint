# Movies App (Laravel 7)

Simple CRUD application for managing movies.

## Features
- Movies list
- Create movie form
- Eloquent relationships (Movie → Genre)
- Seeder with demo data

## Stack
- Laravel 7
- MySQL
- Blade templates

## Installation

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve