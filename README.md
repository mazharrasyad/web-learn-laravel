# Web Laravel IDStack

- Learn Web Framework Laravel 5.5 From IDStack

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

# How To Install Laravel Valet Linux Ubuntu 17.10 17.04 16.04 LTS

- Buka Terminal
- sudo apt update
- sudo apt install curl git php7.1 php7.1-mbstring php7.1-mcrypt php7.1-xml php7.1-zip php7.1-curl
- php -v
- Jika versi php bukan php7.1 maka gunakan perintah berikut : 
    - sudo update-alternatives --set php /usr/bin/php7.1
- curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
- composer
- sudo chmod -R 777 ~/.composer
- composer global require cpriego/valet-linux
- nano ~/.profile
    - Tambahkan path composer pada akhir baris yaitu :
        - PATH="$HOME/.composer/vendor/bin:$PATH"
- source ~/.profile
- sudo apt install network-manager libnss3-tools jq xsel
- valet install
    - Jika error maka install terlebih dahulu nginx dan kemudian ulangi :
        - sudo apt install nginx
            - Jika error saat instalasi maka matikan terlebih dahulu web server contoh apache2 dan kemudian ulangi :
                - sudo systemctl stop apache2
        - sudo systemctl status nginx
- mkdir ~/Code
- cd Code/
- valet park
- composer create-project --prefer-dist laravel/laravel blog
- Buka browser dan Masukkan URL : blog.test
    - Jika ingin mengubah domain gunakan perintah dan nama domain dapat dicari di dokumentasi https://laravel.com/docs/5.5/valet :
        - valet domain nama_domain
            - Contoh :
                - valet domain dev
- Buka Terminal
- sudo apt install php7.1-mysql mysql-server mysql-client mysql-workbench
    - Jika diminta password maka ketikkan password yang diinginkan namun jika default password yaitu :
        - Username : phpmyadmin
        - Password : root
- sudo systemctl status mysql

# 04 Laravel 5.5 Project Structure

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
- Video Tutorial : https://www.youtube.com/playlist?list=PL1aMeb5UP_PGje8-vt99VyVuVikcaSpTG
- Instalasi Laravel : https://www.youtube.com/watch?v=dFO9UcbTIDs&index=2&list=PL1aMeb5UP_PHlG2s2mluMd3DY8Bo_hZ1A
