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
    $profile = Profile::create([
        'user_id' => 1,
        'phone' => '01234567891',
        'address' => 'Jl. Persada No 1'
    ]);

    return $profile;
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