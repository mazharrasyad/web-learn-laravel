# 20 Polymorphic - Setup Database and Migration

- Polymorphic yaitu relasi dapat berubah atau memiliki banyak model
- Contoh table komentar dapat dimiliki table posts, table portfolio, dll yang memiliki komentar didalamnya
- php artisan make:model Portfolio -m
- php artisan make:model Comment -m
- php artisan make:seed DummiesTableSeeder
- php artisan migrate:refresh --seed
- Perubahan pada file di project relation :
    - app/Comment.php
    - app/Portfolio.php
    - app/Post.php
    - database/migrations/2019_02_10_033709_create_portfolios_table.php
    - database/migrations/2019_02_10_033729_create_comments_table.php
    - database/seeds/DatabaseSeeder.php
    - database/seeds/DummiesTableSeeder.php