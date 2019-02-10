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
use App\Profile; // Profile Foreign Key, belongsTo
use App\Post; // Profile Foreign Key, belongsTo
use App\Category; // Profile Foreign Key, belongsToMany
use App\Role;
use App\Portfolio;
use App\Tag;

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

    // Cara ke 3
    $user->posts()->create([
        'user_id' => 2,
        'title' => 'Isi Title Post',
        'body' => 'Hello World! Ini isi dari body table Post'
    ]);

    // Cara ke 4
    Post::create([
        'user_id' => 2,
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
    $post = $user->posts()->first();

    $data[] = [
        'name' => $post->user->name,
        'post_id' => $post->id,
        'title' => $post->title,
        'body' => $post->body
    ];

    return $data;
});

Route::get('/update_post', function () {
    $user = User::findOrFail(1);

    // Cara ke 1
    // whereKolom(value) sama seperti where(kolom, value)        
    $user->posts()->whereId(1)->update([
        'title' => 'Ini isian title post update',
        'body' => 'Ini isian body post yang sudah diupdate'
    ]);
    
    // Cara ke 2
    $user->posts()->where('id', 2)->update([
        'title' => 'Ini isian title post update',
        'body' => 'Ini isian body post yang sudah diupdate'
    ]);

    // Cara ke 3
    $user->posts()->update([
        'title' => 'Ini isian title post update',
        'body' => 'Ini isian body post yang sudah diupdate'
    ]);

    return 'Success';
});

Route::get('/delete_post', function () {
    // Memilih id = 1 pada tabel users
    $user = User::find(1);

    // Cara ke 1    
    $user->posts()->whereId(1)->delete();

    // whereId juga digunakan untuk validasi jika id yang dimiliki berelasi dengan user_id
    $user->posts()->whereId(100)->delete();

    // Cara ke 2
    $user->posts()->where('id', 2)->delete();

    // Cara ke 3
    $user->posts()->delete();

    // Cara ke 4
    // Model camel case yaitu membaca kolom berdasarkan awal kata
    // Contoh kolom user_id menjadi UserId tanpa menggunakan tanda underscore _
    $user->posts()->whereUserId(2)->delete();

    return 'Success';
});

Route::get('/create_categories', function () {
    // Cara ke 1
    // Data table posts harus ada terlebih dahulu atau sebaliknya
    $post = Post::findOrFail(1);

    // Menginput table category sekaligus table category_post karena method categories()        
    // Untuk table category_post tidak didefinisikan di Model karena laravel sudah otomatis mendeklarasikannya
    // ! Hal yang perlu diperhatikan adalah penamaan table harus tepat
    $post->categories()->create([
        // str_slug() untuk memisahkan kata dengan tanda - dan dalam database kata tersebut menjadi lowercase
        'slug' => str_slug('Belajar Laravel', '-'),
        'category' => 'Belajar Laravel'
    ]);

    return 'Success';

    // Cara ke 2
    $user = User::create([
        'name' => 'Rasyad',
        'email' => 'rasyad@gmail.com',
        'password' => bcrypt('password')
    ]);

    $user->posts()->create([
        'title' => 'New Title',
        'body' => 'New Body Content'
    ])->categories()->create([
        'slug' => str_slug('New Category', '-'),
        'category' => 'New Category'
    ]);

    return 'Success';
});

Route::get('/read_category', function () {
    // Menampilkan data table categories dari relasi table posts
    $post = Post::find(1);

    // Tambahkan where() jika ingin menampilkan kondisi tertentu
    $categories = $post->categories->where('id', 2);
    foreach ($categories as $category) {
        echo $category->slug.'<br>';
    }

    // Menampilkan data table posts dari relasi table categories
    $category = Category::find(1);

    $posts = $category->posts;
    foreach ($posts as $post) {
        echo $post->title.'<br>';
    }
});

Route::get('/attach', function () {
    // Cara ke 1
    $post = Post::find(1); // id 2 table posts
    $post->categories()->attach(3); // id 1 table categories    
    // kedua id diatas diinputkan ke table category_post yaitu :
    // post_id = 2
    // category_id = 1

    // Cara ke 2
    $post = Post::find(5);
    $post->categories()->attach([1,2,3]);
    // Menginputkan post_id 3 dengan category_id sekaligus 3 id
    // Jika data lebih dari 1 maka menggunakan array [data1, data2]

    // Jika post_id dan category_id ada yang sama maka tidak akan error
    return 'Success';
});

Route::get('/detach', function () {
    // Cara ke 1
    $post = Post::find(1);
    $post->categories()->detach(3);
    // detach menghapus salah satu foreign key yang ditentukan

    // Cara ke 2
    $post = Post::find(5);
    $post->categories()->detach([1,2]);
    // $post->categories()->detach();
    // Jika method detach() tidak ada parameter maka semua data akan terhapus
    // Jika method attach() tidak ada parameter maka akan error

    // Jika method categories() digunakan : 
        // untuk read maka tidak perlu menggunakan () jadi categories untuk membacanya sebagai object
        // selain read maka perlu menggunakan () jadi categories() untuk mengambil method elquent lainnya

    return 'Success';
});

Route::get('/sync', function () {
    // Cara ke 1
    // Jika terjadi duplikasi data antar relasi many to many
    // $post = Post::find(5);

    // sync harus berupa plural(jamak) bukan singular(tunggal)
    // $post->categories()->sync([1]);
    // Mengubah category_id yang bukan id = 1 menjadi id = 1 berdasarkan post_id

    // Cara ke 2
    $post = Post::find(1);
    $post->categories()->sync([2,3]);
    // Mengubah category_id yang bukan id = 1 atau 3 menjadi id = 1 atau 3 berdasarkan post_id
    // Meskipun post id hanya memiliki 1 data tetapi dapat diupdate menjadi 2 data dengan category id 2 dan 3

    return 'Success';
});

Route::get('/role/posts', function () {
    // Memilih id role untuk menampilkan data posts berdasarkan id role tersebut
    $role = Role::find(1);

    // Mengecek data
    return $role->posts;
});

Route::get('/comment/create', function () {
    // Table posts
    $post = Post::find(1);
    $post->comments()->create([
        'user_id' => 2,
        'content' => 'Balasan dari respon user id 1'
        // Kolom commentable_id dan commentable_type tidak perlu diinput karena otomatis
        // Dari perintah ini $post = Post::find(1) kedua kolom itu diinput
        // Post:: untuk commentable_type dan isinya adalah App\Post
        // find(1) untuk commentable_id dan isinya adalah 1
    ]);

    // Table portfolios
    $portfolio = Portfolio::find(1);
    $portfolio->comments()->create([
        'user_id' => 2,
        'content' => 'Balasan dari portfolio respon user id 1'
    ]);

    return 'Success';
});

Route::get('/comment/read', function () {
    // Table posts
    $post = Post::findOrFail(1);
    $comments = $post->comments;
    // return $comments;
    foreach ($comments as $comment) {
        echo $comment->user->name.' - '.$comment->content.' ('.$comment->commentable->title.') <br>';
    }

    // Table portfolios
    $portfolio = Portfolio::findOrFail(1);
    $comments = $portfolio->comments;    
    foreach ($comments as $comment) {
        echo $comment->user->name.' - '.$comment->content.' ('.$comment->commentable->title.') <br>';
    }
});

Route::get('/comment/update', function () {    
    // Table posts
    $post = Post::find(1); // Instance    
    $comment = $post->comments()->where('id', 1)->first(); // Tanda -> disebut chain method
    // first() digunakan untuk mengubah data menjadi objek
    $comment->update([
        'content' => 'Komentarnya telah disunting'
    ]);

    // Table portfolios
    $portfolio = Portfolio::find(1);
    $comment = $portfolio->comments()->where('id', 3)->first();
    $comment->update([
        'content' => 'Komentarnya telah disunting di bagian portfolio'
    ]);

    return 'Success';
});

Route::get('/comment/delete', function () {
    // Table posts
    $post = Post::find(1);
    $post->comments()->where('id', 1)->delete();

    // Table portfolios
    $portfolio = Portfolio::find(1);
    $portfolio->comments()->where('id', 3)->delete();    

    return 'Success';
});

Route::get('/tag/read', function () {
    // Table posts
    $post = Post::find(1);

    // return $post->tags;

    foreach ($post->tags as $tag) {
        echo $tag->name.'<br>';
    }

    // Table portfolio
    $portfolio = Portfolio::find(1);

    foreach ($portfolio->tags as $tag) {
        echo $tag->name.'<br>';
    }
});

Route::get('/tag/attach', function () {
    // Table posts
    $post = Post::find(1);
    $post->tags()->attach([5,7,8]);

    // Table portfolios
    $portfolio = Portfolio::find(1);
    $portfolio->tags()->attach([4,6]);

    return 'Success';
});

Route::get('/tag/detach', function () {
    // Table posts
    $post = Post::find(1);
    $post->tags()->detach([1,3]);

    // Table portfolios
    $portfolio = Portfolio::find(1);
    $portfolio->tags()->detach([2,4]);

    return 'Success';
});