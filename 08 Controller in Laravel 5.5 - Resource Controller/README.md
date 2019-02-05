# 08 Controller in Laravel 5.5 - Resource Controller

- Membuat route dan controller dengan method resource untuk membuat CRUD
- php artisan make:controller NamaController --resource
    - Catatan : --resource digunakan untuk membuat method CRUD secara otomatis
- Untuk mengetahui bagaimana pola dari method resource maka gunakan perintah
- php artisan route:list
- Perubahan pada folder blog yaitu : 
    - app/Http/Controllers/PostController.php
    - routes/web.php   
    - resources/views/create.blade.php 