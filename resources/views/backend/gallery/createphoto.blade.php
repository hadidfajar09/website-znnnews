@extends('admin.admin_master')

@section('title')
    Insert a Photo
@endsection

@section('admin')


<div class="col-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Insert a Photo</h4>
        <p class="card-description"> Display on Frontend </p>
        <form class="forms-sample" action="{{ route('store.photo') }}" method="POST" enctype="multipart/form-data">
            @csrf



          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" id="exampleInputName1" name="title">
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <br>
        

      <div class="row">
        <div class="file-group col-md-6">
            <label for="photo">Upload Thumbnail</label>
            <input type="file" class="form-control-file" name="photo">
            @error('photo')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            
        </div>
  
  
        <div class="form-group col-md-6">
          <label for="exampleInputName1">Type</label>
          <br>
          <select class="js-example-basic-single select2-hidden-accessible" name="type" style="width:50%" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="1"> Big Thumbnail  </option>
            <option value="0"> Small Thumbnail  </option>
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