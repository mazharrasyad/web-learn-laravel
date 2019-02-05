<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>Laravel Blog | @yield('title')</title>
    {{-- @yield digunakan untuk menjadikan tampilan dinamis atau berubah-ubah --}}    
    @yield('styles') {{-- Untuk menambahkan css secara dinamis --}}
</head>
<body>
    {{-- @include untuk memasukkan code tampilan yang ada pada file berbeda --}}
    @include('layout.menu')
    @yield('body')

    @yield('scripts') {{-- Untuk menambahkan js secara dinamis --}}
</body>
</html>