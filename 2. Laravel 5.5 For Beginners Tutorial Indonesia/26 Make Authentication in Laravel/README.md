# 26 Make Authentication in Laravel

- Authentication yaitu fungsi login, register, forgot password sudah disediakan oleh laravel dengan perintah :
    - php artisan make:auth
- Untuk melakukan reset password lakukan perintah berikut :
    - Pada file .env ubah MAIL_DRIVER=smtp menjadi MAIL_DRIVER=log
    - Kemudian buka link http://localhost/project/public/password/reset
    - Masukkan email yang sudah terdaftar sebelumnya
    - Buka file ../storage/logs/laravel.log
    - Lihat baris pada akhir file dan cari kata Reset Password : link
    - Kemudian buka link tersebut dan lakukan reset password
- Perubahan pada folder blog yaitu :
    - app/Http/Controllers/Auth/
    - app/Http/Controllers/HomeController.php
    - resources/views/auth/
    - resources/views/layouts/
    - routes/web.php
    - .env
    - storage/logs/laravel.log
