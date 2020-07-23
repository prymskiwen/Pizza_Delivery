## Installation

This is just local installation using something like MAMP/WAMP or xampp. Of course you are free to use homestead if you like.

1. clone the repo and cd into it
1. `composer install`
1. make sure db is running and credentials are setup in config\database.php (or in your .env file).
1. If you have no .env file you can use the example one. Just rename .env.example to .env. Enter your db credentials here.
1. You can use db_dump.sql in the project or run as following instructions
1. `php artisan key:generate`
1. `php artisan migrate`
1. `php artisan db:seed`
1. `php artisan serve`
1. Visit localhost:8000 in your browser
