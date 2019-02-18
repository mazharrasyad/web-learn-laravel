# Step

- Duplicate file namaproject/server.php
- Ganti namanya menjadi index.php
- Buat file baru dengan nama .htaccess menjadi namaproject/.htaccess
- Isi file tersebut dengan perintah berikut

<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews
    </IfModule>
 
    RewriteEngine On
 
    RewriteCond %{REQUEST_FILENAME} -d [OR]
    RewriteCond %{REQUEST_FILENAME} -f
    RewriteRule ^ ^$1 [N]
 
    RewriteCond %{REQUEST_URI} (\.\w+$) [NC]
    RewriteRule ^(.*)$ public/$1
 
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ server.php
 
</IfModule>

# Referensi

- https://idtuto.com/tips-dan-cara-menghapus-url-public-pada-laravel/
- https://www.youtube.com/playlist?list=PL1aMeb5UP_PGmwXDBzrp8diCFHf0xN1IC