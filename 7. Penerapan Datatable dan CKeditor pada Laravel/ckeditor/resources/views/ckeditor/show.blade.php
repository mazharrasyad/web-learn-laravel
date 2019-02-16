<!DOCTYPE html>
<html lang="en">
<head>
<title>CKeditor Demo with KCFinder in Laravel 5.4 </title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
  <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"> </script> 
</head>
<body>

    <h2>{{ $post->title }}</h2>
    <br>
    <p>{!! $post->content !!}</p>
    <br>    
    {{-- Untuk delete data tidak diperlukan view delete karena form dalam view show dapat digunakan --}}    
    <form action="{{ route('post.destroy', $post->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <a href="{{ route('post.edit', $post->id) }}">Edit</a> | 
        <input type="submit" value="Delete">
    </form>

<script>
  var options = {
    filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
    filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token='
  };

  CKEDITOR.replace('content', options); 
</script>  

</body>
</html>