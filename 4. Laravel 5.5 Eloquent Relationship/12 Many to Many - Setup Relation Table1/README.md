# 12 Many to Many - Setup Relation Table

- Many to many yaitu banyak data foreign key suatu table memiliki banyak data foreign key table lain
- Karena data yang ditampung banyak maka akan digunakan table pivot yaitu table yang didalamnya terdapat kolom foreign key dan foreign key 
- Untuk membuat table pivot perlu dengan alphabetis yaitu kolom tergantung urutan ascending A - Z    
- Contoh : 
    - Table posts
    - Table categories 
    - Maka perlu table baru yaitu Table category_post
- php artisan make:model Category -m
- php artisan make:migration create_category_post_table --create=category_post
- php artisan migrate
- Perubahan pada file di project relation :
    - app/Category.php
    - app/Post.php
    - database/migrations/2019_02_09_104103_create_categories_table.php
    - database/migrations/2019_02_09_104632_create_category_post_table.php