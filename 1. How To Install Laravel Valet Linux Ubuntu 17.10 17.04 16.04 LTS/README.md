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

- Jika hanya menginstall laravel tanpa valet dan xampp gunakan langkah berikut :
    - Install XAMPP Ubuntu
    - Buka Terminal
    - cd /opt/lampp/htdocs
    - composer create-project --prefer-dist laravel/laravel nama
        - Contoh : composer create-project --prefer-dist laravel/laravel blog
    - Buka Browser dan ketikkan URL
    - http://localhost/nama/public
        - Contoh : http://localhost/blog/public

# Referensi

- Narasumber : Hakim Sembiring M
- Link : https://www.youtube.com/watch?v=dFO9UcbTIDs&index=2&list=PL1aMeb5UP_PHlG2s2mluMd3DY8Bo_hZ1A
