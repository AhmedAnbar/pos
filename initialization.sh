composer install


php artisan jwt:secret


#composer dumpautoload
php artisan clear-compiled
php artisan optimize
php artisan cache:clear
php artisan route:cache
php artisan route:clear
php artisan config:clear
php artisan view:clear

php artisan migrate:fresh
php artisan module:seed
