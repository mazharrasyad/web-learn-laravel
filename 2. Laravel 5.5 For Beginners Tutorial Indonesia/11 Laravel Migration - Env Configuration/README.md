# 11 Laravel Migration - Env Configuration

- Migration yaitu fitur untuk mendesain database sehingga tidak perlu membuat database pada aplikasi database lainnya cukup dengan php artisan
- Buat terlebih dahulu database
- Ada 2 cara mengatur database yaitu dari file config/database.php atau .env
- File .env akan terhubung secara otomatis namun ketika menggunakan repository seperti github maka tidak akan diupload karena alasan keamanan data dan hanya mengupload .env.example
- Untuk membuat table dapat dengan menggunakan perintah berikut :
    - php artisan make:migration nama_class_migration --create=nama_table
        - Contoh : php artisan make:migration create_posts_table --create=posts
- Perubahan pada folder blog yaitu :     
    - config/database.php  
    - .env
    - database/migrations/2019_02_06_093348_create_posts_table.php