## Hello, welcome to guide start the project in you'r machine


### Note : If you use windows recommended to use via wsl2

#### start you can install to php, composer , docker and docker composer

#### File log : /storage/logs/laravel.log 

#### Run the commands after installing and configuring the environment

1. Clone this project
2. Run the `composer install` command
3. Run the `npm install` command
4. Run the `npm run watch` command
5. Run the `./vendor/bin/sail up` command
6. Run the `cp .env.example .env` command
7. Run the `./vendor/bin/sail artisan key:generate` command
8. Run the `./vendor/bin/sail artisan storage:link` command
9. Run the `./vendor/bin/sail artisan migrate:fresh --seed` command


#### If you don't have the docker you can run with commands


1. Clone this project
2. Run the `composer install` command
3. Run the `npm install` command
4. Run the `npm run watch` command
5. Run the `php artisan server` command
6. Run the `cp .env.example .env` command
7. Run the `php artisan key:generate` command
8. Run the `php artisan storage:link` command
9. Run the `php artisan migrate:fresh --seed` command
