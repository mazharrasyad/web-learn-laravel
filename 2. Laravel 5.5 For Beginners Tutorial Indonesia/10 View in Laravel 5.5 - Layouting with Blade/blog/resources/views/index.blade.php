{{-- 
    Melakukan extensi untuk menggunakan file master layout di layout/app.blade.php

    Pada blade engine untuk menuliskan lokasi file tergantung dari file itu berada 
    Karena file index.blade.php berada dalam folder views maka untuk memanggil file app.blade.php
    dalam folder layout cukup mengetikkan folder.file, contoh layout.app dan pada file
    app.blade.php tidak perlu menuliskan extensinya cukup dengan nama filenya saja yaitu app
--}}
@extends('layout.app')

{{-- Pada file app terdapat 2 yield dan untuk menggunakannya dengan method section(nama) --}}
@section('title')
    Halaman Data Post
@stop

@section('body')
    <h1>Halaman Posts</h1>    
    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post) 
                <a href="{{ route('post.show', $post['id']) }}"><li>{{ $post['title'] }}</li></a>
            @endforeach
        </ul>
    @else
        <p>Tidak ada Data</p>
    @endif
@stop
