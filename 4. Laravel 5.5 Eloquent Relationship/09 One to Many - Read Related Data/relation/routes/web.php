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
    return view('welcome');
});

use App\User; // User Primary Key, hasOne
use App\Profile; // Profile Foreign Ket, belongsTo

// Test One To One

Route::get('/create_user', function(){
    $user = User::create([
        'name' => 'Azhar',
        'email' => 'azhar@gmail.com',
        'password' => bcrypt('password')
    ]);

    $user = User::create([
        'name' => 'Rasyad',
        'email' => 'rasyad@gmail.com',
        'password' => bcrypt('password')
    ]);

    return $user;
});

Route::get('/create_profile', function(){
    // Cara ke 1
    $profile = Profile::create([
        'user_id' => 1,
        'phone' => '01234567891',
        'address' => 'Jl. Persada No 1'
    ]);

    return $profile;

    // Cara ke 2
    $user = User::find(1);

    $user->profile()->create([
        'phone' => '01234567894',
        'address' => 'Jl. Persada No 4'
    ]);

    return $user;
});

Route::get('/create_user_profile', function(){
    $user = User::find(2);

    $profile = new Profile([
        'phone' => '01234567892',
        'address' => 'Jl. Persada No 2'
    ]);

    $user->profile()->save($profile);
    // profile() diambil dari model User untuk melakukan relasi

    return $user;
});

Route::get('/read_user', function(){
    // Memanggil data profile dari table user

    // User dengan id = 1 dicari
    $user = User::find(1);
    
    // Method profile() dari model User dipanggil    

    // Cara ke 1
    // Kolom phone yaitu sebuah atribut yang dipanggil dengan user id = 1
    return $user->profile->phone;
    return $user->profile->address;

    // Cara ke 2
    // Menggunakan array untuk memanggil beberapa kolom
    $data = [
        'name' => $user->name,
        'phone' => $user->profile->phone,
        'address' => $user->profile->address
    ];

    return $data;
});

Route::get('/read_profile', function(){
    // Memanggil data profile dari table user
    $profile = Profile::where('phone', '01234567891')->first();

    // Cara ke 1
    // user merupakan method yang dipanggil dalam model profile
    return $profile->user->name;

    // Cara ke 2
    $data = [
        'name' => $profile->user->name,
        'email' => $profile->user->email,
        'phone' => $profile->phone
    ];

    return $data;
});

Route::get('/update_profile', function(){
    // Mengupdate data profile berdasarkan id user
    // Table users      Table profiles
    // id               user_id
    $user = User::find(2);

    // Cara ke 1
    $user->profile()->update([
        'phone' => '01234567893',
        'address' => 'Jl. Persada No 3'
    ]);

    // Cara ke 2
    $data = [
        'phone' => '01234567893',
        'address' => 'Jl. Persada No 3'
    ];

    $user->profile()->update($data);

    return $user;
});

Route::get('/delete_profile', function(){
    // Menghapus data profile berdasarkan kolom id table users
    $user = User::find(2);

    $user->profile()->delete();

    return $user;

});

// Test One To Many

Route::get('/create_post', function(){
    // Cara ke 1
    // id yang baru dibuat akan sama dengan user_id
    // contoh id = 1 maka user_id = 1
    $user = User::create([
        'name' => 'Azhar',
        'email' => 'azhar@gmail.com',
        'password' => bcrypt('password')
    ]);

    $user->posts()->create([
        'title' => 'Isi Title Post',
        'body' => 'Hello World! Ini isi dari body table Post'
    ]);

    // Cara ke 2
    // Menggunakan id table users yang sudah ada
    $user = User::findOrFail(1);

    $user->posts()->create([
        'title' => 'Isi Title Post',
        'body' => 'Hello World! Ini isi dari body table Post'
    ]);

    return 'Success';
});

Route::get('/read_post', function () {    
    $user = User::find(1);

    // Cara ke 1
    // return $user->posts();
    // Terjadi error HasMany could not be converted to string

    // Cara ke 2
    // dd($user->posts()->get());

    // Cara ke 3
    // get() Mengambil seluruh data
    $posts = $user->posts()->get();

    foreach ($posts as $post) {
        $data[] = [
            'name' => $post->user->name,
            'post_id' => $post->id,
            'title' => $post->title,
            'body' => $post->body
        ];
    }

    return $data;

    // Cara ke 4
    // first() Mengambil data yang pertama dibuat
    // $post = $user->posts()->first();

    // $data[] = [
    //     'name' => $post->user->name,
    //     'post_id' => $post->id,
    //     'title' => $post->title,
    //     'body' => $post->body
    // ];

    // return $data;
});