# 01 Introduce

- Dibutuhkan Pemahaman :
    - Personal Home Page (PHP)
    - Object Oriented Programming (OOP)
    - Database Management System (DBMS)

- Yang Dipelajari :
    - Routes
    - Controllers
    - Views
    - Laravel Blade Template Engine
    - Laravel Mirgration
    - Query Builder
    - Eloquent
    - Middleware
    - Authentication

# 02 Why Using Framework

- Alasan Tidak Menggunakan Framework :
    - Spaghetti Code
    - Redundant Work
    - Redundant Changes
    - Disorganization
    - Change on Thing and Break Another
    - Hard Code
    - Encounter Teamwork

- Alasan Menggunakan Framework :
    - Recipe for Clean Code
    - Easy Reuse
    - Easy Changes
    - Organization
    - Prebuilt
    - Organized Code
    - Easier to Test
    - Faster to Implement
    - Team Collaboration

# 03 What is MVC Concept

- Model : Database
- View : Form
- Controller : Request
- Alur : View <-> Controller <-> Model

# 04 Laravel 5.5 Project Structure

- Laravel yang digunakan versi 5.5
- PHP >= 7.0.0
- Berikut struktur laravel yang sering digunakan :
- app
    - User.php : Model dari framework
    - Http
        - Controller : Logic dari aplikasi yang dibuat
        - Middleware : Security
        - Kernel.php : Registrasi Middleware yang dibuat
- config
    - app.php : Konfigurasi name, env, url, providers, aliases
    - auth.php : Konfigurasi user role
    - database.php : Konfigurasi database, driver, connection, env
- database
    - factories
        - UserFactory.php : File untuk membuat data ke dalam database
    - migrations
        - File-file table yang akan diimport ke database
    - seeds
        - Registrasi class yang akan mengimport data dummy ke beberapa table di dalam migrations
- public
    - assets
- resources
    - views : Menyimpan suatu tampilan dengan HTML
- routes
    - web.php : Mengatur URL untuk diarahkan ke halaman view atau controller
- storage
    - app : Menyimpan beberapa file yang dapat diupload di aplikasi
    - logs : Menyimpan log yang diberikan laravel
- vendor
    - Package-package yang digunakan oleh framework laravel
- .env : Konfigurasi APP, DB

- Letak folder file-file MVC :
    - Model : app/
    - Controller : app/Http/Controllers
    - Views : resources/views

# Referensi

- Narasumber : Hakim Sembiring M
- Channel : IDStack
- Link : https://www.youtube.com/playlist?list=PL1aMeb5UP_PGje8-vt99VyVuVikcaSpTG 