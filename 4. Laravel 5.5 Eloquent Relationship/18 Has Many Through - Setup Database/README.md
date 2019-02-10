# 18 Has Many Through - Setup Database

- Has many through yaitu relasi one to many yang tidak akan langsung terhubung antara foreign key dan priamry key sehingga dibutuhkan 3 model
- php artisan make:model Role -m
- php artisan make:migration add_role_id_to_users_table --table=users
- php artisan migrate:refresh (refresh karena akan membuat ulang struktur table)
- Perubahan pada file di project relation :
    - app/Role.php
    - app/User.php
    - database/migrations/2019_02_10_010318_create_roles_table.php
    - database/migrations/2019_02_10_010431_add_role_id_to_users_table.php