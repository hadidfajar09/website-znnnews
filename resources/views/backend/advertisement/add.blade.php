@extends('admin.admin_master')

@section('title')
    Add Advertisement
@endsection

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="col-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Advertisement</h4>
        <p class="card-description"> Display on Frontend </p>
        <form class="forms-sample" action="{{ route('store.advertisement') }}" method="post" enctype="multipart/form-data">
            @csrf



          <div class="form-group">
            <label for="exampleInputName1">Link</label>
            <input type="text" class="form-control" id="exampleInputName1" name="link">
          </div>

          <br>
        

        <div class="file-group">
            <label for="banner">Upload Banner</label>
            <input type="file" class="form-control-file" name="banner" id="banner">
        </div>
        

        <br>
  
        <div class="form-group">
          <label for="exampleInputName1">Type</label>
          <br>
          <select class="form-control" name="type">
            <option value="1"> Vertical  </option>
            <option value="2"> Horizontal  </option>
          </select>
            
        </div>
  
        <hr>

      <br>
        

          <button type="submit" class="btn btn-primary btn-rounded">Create</button>
        </form>
      </div>
    </div>
  </div>



    @endsection