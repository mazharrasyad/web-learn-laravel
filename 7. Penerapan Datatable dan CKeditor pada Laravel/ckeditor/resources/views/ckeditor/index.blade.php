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

<div class="container">
  <div class="panel panel-success">
    <div class="panel-heading">Integrating CKeditor in Laravel 5.3 </div>
    <div class="panel-body">      
      @if ($errors->any())    
        <ul>
            @foreach ($errors->all() as $error)            
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      @endif

      <form action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}      
        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
        <textarea name="content" id="content" class="ckeditor">{{ old('body') }}</textarea>          
        <input type="submit" value="Post">
      </form>
    </div>
  </div>
</div>

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