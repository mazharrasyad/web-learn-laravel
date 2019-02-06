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
    return redirect('/about');
});

Route::get('/about', function() {
    return 'Hi, This about page';
});

Route::get('/blog', 'PostController@index');
Route::resource('post', 'PostController');

Route::get('/insert', function(){
    // Cara ke 1    
    DB::insert('insert into posts (title, body, user_id) values (?, ?, ?)', ['Belajar PHP dengan Laravel', 'Laravel the best framework', '1']);
    // Class DB untuk membuat query builder
    // Method insert untuk memasukkan data ke table
    // Tanda ? merupakan question mark yang nantinya akan diisi dari form berdasarkan urutannya
    // Tanda [] data array sesuai data-data field yang akan diinputkan

    // Cara ke 2
    $data = [
        'title' => 'Disini isian title',
        'body' => 'Isian Body untuk table posts',
        'user_id' => 2
    ];
    DB::table('posts')->insert($data);
    
    echo "Data berhasil ditambah";
});