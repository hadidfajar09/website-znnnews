@extends('admin.admin_master')

@section('title')
    Insert a Ads
@endsection

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="col-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Insert Advertisement</h4>
        <p class="card-description"> Display on Frontend </p>
        <form class="forms-sample" action="{{ route('account.update', $editData->id) }}" method="POST" enctype="multipart/form-data">
            @csrf



          <div class="form-group">
            <label for="exampleInputName1">Username</label>
            <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ $editData->name }}">
            @error('link')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="email" class="form-control" id="exampleInputName1" name="email" value="{{ $editData->email }}">
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Mobile</label>
            <input type="text" class="form-control" id="exampleInputName1" name="mobile" value="{{ $editData->mobile }}">
            @error('mobile')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Address</label>
            <input type="text" class="form-control" id="exampleInputName1" name="address" value="{{ $editData->address }}">
            @error('link')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Position</label>
            <input type="text" class="form-control" id="exampleInputName1" name="position" value="{{ $editData->position }}">
            @error('position')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Gender</label>
            <br>
            <select class="form-control" name="gender" style="width:50%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option value="" selected="" disabled="">Select Gender</option>
              <option value="Male" {{ $editData->gender == "Male"? "selected":"" }}> Male </option>
              <option value="Female" {{ $editData->gender == "Female"? "selected":"" }}> Female </option>
            </select>
              
          </div>

          <br>

          
        

      <div class="row">
        <div class="file-group col-md-6">
            <label for="image">Upload Image Ads</label>
            <input type="file" class="form-control-file" name="image" id="image">
            
            
        </div>

        <div class="file-group col-md-6">
            <label for="image">Old Image</label>
            <br>
            <img id="showImage" src="{{ (!empty($editData->image))?url('upload/user_images/'.$editData->image):url('upload/no_image.PNG') }}" style="width: 150px; height: 150px; border: 1px; solid #000000"  alt="">
            
        </div>
  
  
      
  
        <hr>
      </div>

      <br>
        

          <button type="submit" class="btn btn-primary btn-rounded">Update</button>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
  </script>



    @endsection