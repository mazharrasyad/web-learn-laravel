# 04 One to One - Read Related Data

- Mengubah tampilan id pada foreign key menjadi kolom yang ditentukan pada primary key
- hasOne untuk Primary Key contoh id pada table user
- belongsTo untuk Foreign Key, contoh user_id pada table profile
- Perubahan pada file di project  :
    - app/User.php
    - app/Profile.php
    - routes/web.php