# 11 Laravel Migration - Env Configuration

- Sebelum melakukan migrate perlu diatur pada AppServiceProvider.php untuk default panjang string agar tidak terjadi error
- Untuk melakukan migrate dengan perintah :
    - php artisan migrate
- Untuk membatalkan migrate dengan perintah :
    - php artisan migrate:rollback
- Untuk menambahkan kolom dengan perintah :
    - php artisan make:migration nama_migrate --table=nama_table
        - Contoh : - php artisan make:migration add_user_id_column --table=posts
- Untuk melihat opsi artisan dengan perintah :
    - php artisan
- Perubahan pada folder blog yaitu :     
    - app/Providers/AppServiceProvider.php
    - database/migrations/2019_02_06_093348_create_posts_table.php
    - database/migrations/2019_02_06_103613_add_user_id_column.php