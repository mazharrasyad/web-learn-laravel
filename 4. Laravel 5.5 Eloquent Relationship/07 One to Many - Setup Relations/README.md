# 07 One to Many - Setup Relations

- One to many yaitu 1 data primary key dapat digunakan oleh banyak data foreign key
  - Contoh : data user dapat memiliki banyak data post
- php artisan make:model Post -m
- php artisan migrate
- Perubahan pada file di project relation :
  - app/Post.php
  - app/User.php
  - database/migrations/2019_02_09_042508_create_posts_table.php