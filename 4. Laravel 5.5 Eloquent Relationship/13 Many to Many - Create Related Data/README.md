# 13 Many to Many - Create Related Data

- Pada many to many terdapat 3 table, contoh : categories, posts, category_post
- Dalam laravel table category_post tidak perlu dibuat modelnya karena sudah digantikan dengan model Post dan Category dengan menggunakan belongsToMany
- Sehingga table category_post tidak perlu diinput manual dan sudah otomatis terisi jika kedua data table posts atau categories terisi
- Ilustrasi many to many :
    - make:migration posts (migration = table)
    - make:migration categories (Setiap table diakhiri huruf s dan perhatikan perubahan huruf akhirnya seperti huruf y jika diganti s menjadi ies karena menggunakan bahasa inggris)
    - make:migration category_post (ini table pivot dan tidak perlu menambahkan huruf s pada huruf akhir)
    - make:model Post
    - make:model Category    
    - (model category_post tidak perlu dibuat karena sudah digabung model Post dan Category dengan belongsToMany)
    - method posts() belongsToMany Post
    - method categories() belongsToMany Category
    - Kedua method diatas akan dipanggil supaya table category_post otomatis terisi jika kedua data diinputkan atau direlasikan dan tidak bisa hanya 1 data
- Perubahan pada file di project relation :
    - routes/web.php