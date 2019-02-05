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

// Untuk membuat route CRUD tidak perlu menghubungkan methodnya masing-masing
// Route::get('/post/create', 'PostController@create');
// Route::post('/post/store', 'PostController@store');

// Route::get('/post/{id}', ['as' => 'post.detail', function($id){
//     echo "Post $id";
//     echo "<br>";
//     echo "Body post in ID $id";
// }]);

// Berikut untuk menghubungkan seluruh method dalam PostController
Route::resource('post', 'PostController');