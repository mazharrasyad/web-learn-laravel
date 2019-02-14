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
          <form action="" method="">            
            <div class="form-group">
              <input type="file" name="" class="form-control">
            </div>
            <div class="form-group">
              <textarea name="" class="form-control" placeholder="Input text..."></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-block">Save</button>
          </form>
        </div>
      </div>
      
    </div>
</div>

@endsection
