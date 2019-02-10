# 25 Many to Many Polymorphic - Setup Database

- Many to many polymorphic yaitu table posts atau portofolios dapat memiliki banyak tags di table tags
- Pada asalnya relasi many to many memerlukan table pivot sehingga akan terbentuk 5 table namun karena menggunakan polymorphic cukup 4 table saja
- php artisan make:model Tag -m
- php artisan make:migration create_taggables_table --create=taggables 
- php artisan migrate:refresh --seed
- Perubahan pada file di project relation :
    - app/Tag.php
    - database/migrations/2019_02_10_070932_create_tags_table.php
    - database/migrations/2019_02_10_071018_create_taggables_table.php
    - database/seeds/DummiesTableSeeder.php