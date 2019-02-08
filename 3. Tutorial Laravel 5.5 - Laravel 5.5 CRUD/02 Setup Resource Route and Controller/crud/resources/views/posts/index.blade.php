@extends('layouts.app')

@section('title')
    Halaman Post
@endsection

@section('content')
    <h1>Data Posts</h1>

    @if (count($posts) > 0)
        <ul>
            @foreach ($posts as $post)
                <li><a href="">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data</p>
    @endif
@endsection