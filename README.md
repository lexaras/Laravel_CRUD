# PHP LARAVEL project

PHP Laravel CRUD application to manage campings. Only authorized users can access admin area and use CRUD operations. 


AMMPS and composer are required to run this project.
In resources folder exists file "naujas.xlsx" to test import accommodations functionality.

## How to install



```bash

# clone repository
https://github.com/lexaras/Laravel_CRUD.git

# change directory
cd Laravel_CRUD

# install all dependencies
composer update

npm install

npm run dev

# copy .env.example file
cp .env.expample .env

# add your database to .env

# generate app key
php artisan key:generate

# run migrations
php artisan migrate

# run seeders
php artisan db:seed 

# run app on the PHP development server
php artisan serve

# open project in your browser
http://localhost:8000

