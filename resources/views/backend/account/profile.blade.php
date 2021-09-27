@extends('admin.admin_master')

@section('title')
    Account Setting
@endsection

@section('admin')


<div class="col-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">User Profile</h4>
        <p class="card-description"> Details </p>

        <a href="{{ route('account.edit') }}"><button type="button" class="btn btn-outline-success btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Edit Profile</button></a>            

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ (!empty($editData->image))?url('upload/user_images/'.$editData->image):url('upload/no_image.PNG') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Username : {{ $editData->name }}</h5>
              <p class="card-text">Email : {{ $editData->email }}</p>
              <p class="card-text">Mobile : {{ $editData->mobile }}</p>
              <p class="card-text">Address : {{ $editData->address }}</p>
              <p class="card-text">Gender : {{ $editData->gender }}</p>
              <p class="card-text">Position : {{ $editData->position }}</p>
            </div>
           
            
          </div>


      </div>
    </div>
  </div>



    @endsection