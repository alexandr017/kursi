# Kursi

## Install/Run

create database

configure .env

php artisan key:generate

php composer install
npm install

php artisan migrate

php artisan db:seed

php artisan passport:install

// Add in .env PASSPORT_PASSWORD_GRANT_CLIENT_ID=2

php artisan serve

npm run dev  // (if there will be error, use nvm 14 (usually I am using this version ))

//if you need to use authorization,
//you need to run project in other port too, and set it in .env, 
//this is the way to work with passport in local 

## Run Psalm

./vendor/bin/psalm
