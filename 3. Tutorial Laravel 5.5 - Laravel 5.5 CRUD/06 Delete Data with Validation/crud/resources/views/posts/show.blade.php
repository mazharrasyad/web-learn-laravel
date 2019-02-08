@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <h2>{{ $post->title }}</h2>
    <br>
    <p>{!! $post->body !!}</p>
    {{-- Tanda {{  }} sebagai plain text dan tidak bisa melakukan word processing seperti <b>Text</b> --}}
    {{-- Tanda {!!  !!} sebagai html dan melakukan word processing --}}
    <br>    
    {{-- Untuk delete data tidak diperlukan view delete karena form dalam view show dapat digunakan --}}    
    <form action="{{ route('post.destroy', $post->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <a href="{{ route('post.edit', $post->id) }}">Edit</a> | 
        <input type="submit" value="Delete">
    </form>
@endsection