# taging with Laravel 9

### install Laravel

```s
composer install
Copy file .env.example -> .env
update database -> .env

php artisan jwt:secret
php artisan key:generate
php artisan storage:link
```

### Set database

```s
php artisan migrate --seed
# reset database
php artisan migrate:refresh --seed
```

## Start app

```s
php artisan serve
```