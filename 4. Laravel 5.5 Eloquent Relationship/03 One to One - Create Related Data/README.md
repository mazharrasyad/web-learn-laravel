# 03 One to One - Create Related Data

- Berikut langkah-langkah menginput data yang berelasi :
    - Buat method di model yang tablenya dijadikan primary key
    - Tentukan primary key atau id yang ingin diinputkan
    - Masukkan data baru model yang tablenya dijadikan foreign key
    - primary_key->method()->save(foreign_key)
- Perubahan pada file di project relation :
    - app/User.php
    - routes/web.php