# 28 Laravel Middleware

- Middleware yaitu filtering url supaya yang mengakses hanya pihak tertentu, untuk membuatnya dengan perintah :
    - php artisan make:middleware nama
        - Contoh : php artisan make:middleware Role
- Perubahan pada folder blog yaitu :
    - app/Http/Middleware/Role.php
    - app/Http/Kernel.php