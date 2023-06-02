# ![Blog System App](logo.png)

## About The Project
This Project is made as a task ordered from me to some company .
It was built with PHP 8.1
I used Laravel Framework v10 with some packages as:

- [Livewire](https://laravel-livewire.com/).
- [laravel/ui](https://laravel.com/).

# Getting started

## Installation Laravel

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)
Clone the repository

    git clone https://github.com/engmahmoudali/blog blog

Switch to the repo folder

    cd blog

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations with seeders (**Set the database connection in .env before migrating**)

    php artisan migrate --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000


## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
