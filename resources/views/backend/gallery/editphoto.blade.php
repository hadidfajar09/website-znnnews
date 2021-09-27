@extends('admin.admin_master')

@section('title')
    Edit a Photo
@endsection

@section('admin')


<div class="col-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit a Photo</h4>
        <p class="card-description"> Display on Frontend </p>
        <form class="forms-sample" action="{{ route('update.photo',$photo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf



          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ $photo->title }}">
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <br>
        

      <div class="row">
        <div class="file-group col-md-6">
            <label for="photo">Upload New Thumbnail</label>
            <input type="file" class="form-control-file" name="photo">
            
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputName1">Old Thumbnail</label>
            <br>
            <img src="{{ URL::to($photo->photo)  }}" class="rounded" style="width: 500px; height: 300px;">
            <input type="hidden" name="oldimage" value="{{ $photo->photo }}">
          </div>

        
  
        <div class="form-group col-md-6">
          <label for="exampleInputName1">Type</label>
          <br>
          <select class="js-example-basic-single select2-hidden-accessible" name="type" style="width:30%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="1" @if($photo->type == 1) selected @endif>Big Thumbnail</option>
                                <option value="0" @if($photo->type == 0) selected @endif>Small Thumbnail</option>
            

          </select>
            
        </div>
  
        <hr>
      </div>

      <br>
        

          <button type="submit" class="btn btn-primary btn-rounded">Create</button>
        </form>
      </div>
    </div>
  </div>



    @endsection