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

use App\User;
use App\Profile;

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