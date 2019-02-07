<?php

use App\Post;

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
    $query = DB::table('posts')->select('title', 'body')->where('id', 1)->get();

    return var_dump($query);
});

Route::get('/update', function(){
    $data = [
        'title' => 'Isian Title',
        'body' => 'Isian Body baru'
    ];
    $updated = DB::table('posts')->where('id', 1)->update($data);
    
    return $updated;
});

Route::get('/delete', function(){
    $delete = DB::table('posts')->where('id', 2)->delete();

    return $delete;
});

Route::get('/posts', function(){
    $posts = Post::all();
    return $posts;
});

Route::get('/find', function(){
    $post = Post::find(5);
    return $post;
});

Route::get('findWhere', function(){
    $posts = Post::where('user_id', 2)->orderBy('id', 'desc')->take(1)->get();
    return $posts;
});

Route::get('/create', function(){
    $post = new Post();
    $post->title = 'Isi Judul Postingan';
    $post->body = 'Isian body dari postingan';
    $post->user_id = Auth::user()->id;
    
    $post->save();
});

Route::get('/createpost', function(){
    $post = Post::create([
        'title' => 'Create data dari method create',
        'body' => 'Kita isi dengan isian post dari create method',
        'user_id' => Auth::user()->id
    ]);
});

Route::get('/updatepost', function(){
    $post = Post::where('id', 5);
    $post->update([
        'title' => 'Update data di 5 dari method create',
        'body' => 'Kita isi dengan isian post dari update method',
        'user_id' => 5
    ]);  
});

Route::get('/deletepost', function(){
    $post = Post::where('user_id', 3);
    $post->delete();
});

Route::get('/softdelete', function(){
    Post::destroy(10);
});

Route::get('/trash', function(){
    $posts = Post::onlyTrashed()->get();
    return $posts;
});

Route::get('/restore', function(){
    $posts = Post::onlyTrashed()->restore();
    return $posts;
});

Route::get('/forcedelete', function(){
    $post = Post::find(13)->forceDelete();
    dd($post);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', function(){
    return Auth::user()->email;
});

Route::get('/user', 'HomeController@user');

Route::get('/admin', function(){
    return 'Halaman Admin';
})->middleware(['role', 'auth']);

Route::get('/member', function(){
    return 'Halaman Member';
});
