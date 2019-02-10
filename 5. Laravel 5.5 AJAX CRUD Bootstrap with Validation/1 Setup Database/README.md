# 1 Setup Database

- composer create-project --prefer-dist laravel/laravel larajax
- php artisan make:model Contact -m
- php artisan make:factory ContactFactory
- php artisan make:seed ContactsTableSeeder
- php artisan migrate --seed
- Perubahan file pada project larajax :
    - .env
    - app/Contact.php
    - database/migrations/2019_02_10_134244_create_contacts_table.php
    - database/factories/ContactFactory.php
    - database/seeds/ContactsTableSeeder.php
    - database/seeds/DatabaseSeeder.php