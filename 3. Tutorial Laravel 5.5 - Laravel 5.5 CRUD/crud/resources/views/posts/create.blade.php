@extends('layouts.app')

@section('title')
    Halaman Title
@endsection

@section('content')
    <h1>Create Post</h1>

    {{-- Menampilkan pesan macam-macam error --}}
    @if ($errors->any())    
        <ul>
            @foreach ($errors->all() as $error)            
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <form action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}
        Title:
        <br>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        {{-- old untuk menyimpan data jika terjadi error supaya user tidak mengetik ulang --}}
        <br>
        Body:
        <br>
        <textarea name="body" id="" cols="30" rows="10">{{ old('body') }}</textarea>
        <br>
        <br>
        <input type="submit" value="Post">
    </form>
@endsection