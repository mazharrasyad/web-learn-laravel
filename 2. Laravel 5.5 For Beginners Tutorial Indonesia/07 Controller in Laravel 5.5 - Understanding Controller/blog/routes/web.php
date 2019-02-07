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


// Route::get('/blog', function(){
    // Isi route ini dipindahkan ke method index pada PostController
// });

// Untuk menghubungkan method yang ada pada PostController maka parameter terakhir diganti
Route::get('/blog', 'PostController@index');
Route::get('/post/create', 'PostController@create');
// /post/create : Request URL
// PostController@create : Memanggil method create pada controller
Route::post('/post/store', 'PostController@store');


Route::get('/post/{id}', ['as' => 'post.detail', function($id){
    echo "Post $id";
    echo "<br>";
    echo "Body post in ID $id";
}]);