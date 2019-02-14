@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome, {{ Auth::user()->name }}</div>                
            </div>
            <a href="#uploadImage" data-toggle="modal" class="btn btn-primary btn-block"><i class="fa fa-upload"></i> Upload Image</a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadImage" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="file" name="image" class="form-control-file">
            </div>
            <div class="form-group">
              <textarea name="description" class="form-control" placeholder="Input text..."></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-block">Save</button>
          </form>
        </div>
      </div>      
    </div>
</div>

<hr>

<div class="container">

  <div class="col-md-12">
    <div class="card card-default">
      <div class="card-body">
        Gallery
      </div>
    </div>
  </div>

  
  <div class="card-group">

  @foreach ($posts as $post)  
    
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          
          <div class="show_image">
            <a href="#a{{ $post->id }}" data-toggle="modal">
              <img src="{{ asset('images/'.$post->image) }}">
            </a>
          </div>

          <div class="card-footer">
            <div class="button-footer">
              <a class="btn btn-default btn-xs" href="#a{{ $post->id }}" data-toggle="modal"><i class="fa fa-comment"></i> Comment</a>
              <span class="btn btn-default btn-xs">2</span>
              <span class="btn btn-default btn-xs"><i class="fa fa-thumbs-up"></i></span>
              <span class="btn btn-default btn-xs">2</span>
            </div>
          </div>

        </div>
      </div>
    </div>

    {{-- Modal Bootstrap 4 tidak bisa hanya menggunakan angka --}}
      <div class="modal fade" id="a{{ $post->id }}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <div class="show_modal_image">
                <a href="">
                  <img src="{{ asset('images/'.$post->image) }}">
                </a>                
              </div> 
            </div>
          </div>  
        </div>
      </div>      
  @endforeach
      
    </div>

  </div> {{-- End Container --}}
@endsection

<style type="text/css">
  .show_image img{
    width: 100%;
    height: auto;
  }

  .post-footer{
    padding: 13px;
    padding-top: 0;
  }

  .show_modal_image img{
    width: 100%;
    height: auto;
  }
</style>