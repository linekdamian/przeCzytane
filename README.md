# przeCzytane

How to run this repo:
1. clone to htdocs
2. then run this commands:
    
    ```
    composer instal
    rm -rf przeCzytane/storage/logs/laravel.logs
    chmod -R 777 przeCzytane/storage
    php artisan cache:clear
    php artisan composer dump-autoload
    ```
3. next run 
```
php artisan key:generate
```
4.Set the debug option to true in app/config/app.php

# Now it should be working fine
