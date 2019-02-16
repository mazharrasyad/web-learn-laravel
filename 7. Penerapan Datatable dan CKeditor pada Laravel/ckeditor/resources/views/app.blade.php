<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CKEditor</title>    

    <link rel="stylesheet" href="/css/jquery.dataTables.min.css">
</head>
<body>
    <h2>Tutorial CKEditor</h2>

    @yield('content')

    {{-- Biasakan jQuery terlebih dahulu yang diinclude untuk terbaca terlebih dahulu --}}
    <script src="/js/jquery-3.3.1.js"></script>    
    <script src="/js/jquery.dataTables.min.js"></script>    
    <script src="/js/ckeditor/ckeditor.js"></script>    

    @yield('scripts')
</body>
</html>