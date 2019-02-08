# 01 Setup Model Migration and Table Seeder

- Buat database dengan nama db_crud
- composer create-project --prefer-dist laravel/laravel crud
- php artisan make:model Post -m
- php artisan make:seed PostsTableSeeder
- php artisan make:factory PostFactory
- php artisan make:controller PostController --resource
- Perubahan file pada folder crud yaitu :
    - app/Post.php
    - app/Http/Controllers/PostControler.php
    - database/migrations/PostFactory.php
    - database/seeds/2019_02_08_012637_create_posts_table.php
    - database/factories/PostFactory.php
    - .env
- php artisan migrate --seed