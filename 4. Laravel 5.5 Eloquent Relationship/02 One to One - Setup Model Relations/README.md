# 02 One to One - Setup Model Relations

- php artisan make:model Profile -m
- Dalam laravel nama table yang buat dengan artisan maka akan menjadi bentuk jamak yaitu dengan ditambah s meskipun nama model bentuk tunggal
    - Contoh Model : Profile
    - Contoh Table : Profiles
- php artisan migrate
- Konfigurasi dari model User ke model Profile yaitu :
    - Model User membuat method untuk melakukan relation pada model profile
    - Artinya User memiliki 1 Profile
- Perubahan pada file di project  :
    - app/User.php
    - app/Profile.php
    - database/migrations/2019_02_08_133556_create_profiles_table.php
    - .env