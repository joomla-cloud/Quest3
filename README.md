# Quest3

This is unfinished code for the test constructor.

## Prerequisites

### DigitalOcean
It is implied that current project is deployed on DigitalOcean.

### Laravel 8
This app was created with [Laravel 8](https://laravel.com/docs/8.x) framework.

Following Laravel services are used:

#### Auth
Auth is used for user authentication based on vue. Can be replaced by [Starter Kit](https://laravel.com/docs/8.x/starter-kits#laravel-breeze-installation) from Laravel.

#### MVC
This app was built using MVC structure. M - models - app/Models/; V - views (Blade Templates) - resources/views/; C - controllers - app/Http/Controllers/.

### Voyager
[Voyager](https://voyager.devdojo.com/) is used as Admin panel and also for set up database relations using BREAD (browse, read, edit, add and delete).

## Deployment

1. Setup a droplet: Create Droplets -> Marketplace -> Laravel
2. [Initial Server Setup with Ubuntu](https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-20-04)
3. Update [Composer](https://getcomposer.org/), if there is not the lates version in the package
4. Update Laravel, if there is not the lates version in the package
5. Upload the entire project `git pull`

## Configuration

After you pulled the project to the root folder of your site, notice that the `.env` file is not included. Copy the `.env.example` and rename it `.env`. Remember to put in the database information.

```
APP_NAME=*your_app_name*
APP_ENV=development
APP_KEY=APPLICATION_UNIQUE_KEY_DONT_COPY
APP_DEBUG=true
APP_URL=http://*your_domain_or_IP*

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=*your_database_name*
DB_USERNAME=*your_database_user*
DB_PASSWORD=*your_database_password*

...
```
Run `composer install` to install dependencies.

Generate APP_KEY:
```
php artisan key:generate
```
Link storage:
```
php artisan storage:link
```
Run migrations:
```
php artisan migrate
```
Finally, open the `.env` file again, change `APP_ENV` to `production` and `APP_DEBUG` to `false`.
