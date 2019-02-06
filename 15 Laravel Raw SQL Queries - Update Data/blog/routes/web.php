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
    $data = [
        'title' => 'Disini isian title',
        'body' => 'Isian Body untuk table posts',
        'user_id' => 2
    ];
    DB::table('posts')->insert($data);
    
    echo "Data berhasil ditambah";
});

Route::get('/read', function(){
    // Cara ke 1
    $query = DB::select('select * from posts where id = ?', [1]);

    // Cara ke 2
    // Select berdasarkan kolom
    $query = DB::table('posts')->select('title', 'body')->where('id', 1)->get();
    // get() menampilkan dengan tipe data array
    // first() menampilkan dengan tipe data objek

    // Select berdasarkan *
    $query = DB::table('posts')->where('id', 1)->get();
    
    return var_dump($query);
});