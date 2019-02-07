<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Create Post</title>
</head>
<body>
    <h1>Halaman Create Post</h1>    
    <form action="http://blog.test/post/store" method="post">    
        {{ csrf_field() }}
        {{-- 
            Hasil dari method diatas yaitu
            <input type="hidden" name="_token" value="isi_token"> == $0
            isi token tersebut adalah kode unik yang digenerate secara otomatis
            untuk melakukan validasi CSRF supaya memberitahukan bahwa inputan yang diisi
            berasal dari form terpercaya atau bukan form terpercaya
        --}}
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Submit</button>
        {{-- 
            Jika diinput maka akan error karena route menggunakan 
            middleware web yaitu menggunakan proteksi contoh proteksi 
            CSRF untuk menghindari terjadi injeksi XSS, untuk itu dibutuhkan
            field token sebagai validasi untuk CSRF.

            Untuk melewati CSRF maka diperlukan method csrf_field yang nantinya
            akan membuat sebuah field baru yang berisi token
        --}}

        {{-- 
            Jika berhasil post maka akan muncul tampilan Dump and Die yang
            berisi nama field dan isi field tersebut

            Hal tersebut merupakan contoh controller menghandle suatu inputan dari request dan route yang
            menggunakan method post yang dihandle dalam routes/web.php
        --}}
    </form>
</body>
</html>