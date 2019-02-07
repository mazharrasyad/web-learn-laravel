<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Berikut perintah yang akan dipanggil oleh route
        $posts = [
            ['id' => '1', 'title' => 'Post 1', 'body' => 'Body post in ID 1'],
            ['id' => '2', 'title' => 'Post 2', 'body' => 'Body post in ID 2'],
            ['id' => '3', 'title' => 'Post 3', 'body' => 'Body post in ID 3'],
            ['id' => '4', 'title' => 'Post 4', 'body' => 'Body post in ID 4'],
        ];
    
        echo '<ul>';
        foreach($posts as $post){
            echo '<li> <a href="'.route('post.detail', $post['id']).'">'.$post['title'].'</a></li>';
        }
        echo '</ul>';        
    }

    // Controller dapat melakukan return view atau mengarahkan ke view ketika mengakses url
    public function create()
    {
        // Untuk menampilkan suatu halaman
        return view('create');
        // Kemudian arahkan ke dalam file yang ada di resources/views
        // Jika belum ada maka buat terlebih dahulu sesuai nama tersebut dan ditambah extensi .blade.php
            // Contoh : resources/views/create.blade.php            
    }

    // Untuk menghandle suatu request maka harus menginjeksi suatu class tersebut ke dalam parameter method
    public function store(Request $request)
    {
        // Contoh method Dump and Die atau dd()
        // Kemudian isikan variabel $request dengan method
        // Contoh method all() untuk menampilkan seluruh inputan yang dikirimkan user
        // return sebagai nilai balik atau isi yang dihasilkan jika method dipanggil        
        return dd($request->all());                
        // Kemudian harus membuat suatu form dalam suatu views
        // Contoh : resources/views/create.blade.php
    }
}
