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
@endsection