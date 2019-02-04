<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // Memanggil File
    return 'Hello, World!'; // Menampilkan String
    $a = 1;
    $b = 2;
    $c = $a + $b;
    return $c; // Proses Logic
    return redirect('/about'); // Redirect
});

// Dalam routes dapat memproses redirect atau memanggil route lainnya
Route::get('/about', function() {
    return 'Hi, This about page';
});

/* 
    Route : Object
    get : Method protokol http
        - Parameter Pertama : URL yang akan diarahkan
        - Parameter Diantara : Dapat menambahkan opsi-opsi
        - Parameter Terakhir : File yang akan dipanggil, Menampilkan String, Proses Logic
*/