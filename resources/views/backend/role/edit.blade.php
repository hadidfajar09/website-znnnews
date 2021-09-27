@extends('admin.admin_master')

@section('title')
    Edit User Role
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit User Role</h4>
            <p class="card-description"> Privallage User Setting </p>
            <form class="forms-sample" method="POST" action="{{ route('update.kolumnis', $kolumnis->id) }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $kolumnis->name }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $kolumnis->email }}"> 
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>



              <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="category" value="1" @if($kolumnis->category == 1) checked="" @endif> Category <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="district" value="1" @if($kolumnis->district == 1) checked="" @endif> District <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="post" value="1" @if($kolumnis->post == 1) checked="" @endif> Post <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="setting" value="1" @if($kolumnis->setting == 1) checked="" @endif> Setting <i class="input-helper"></i></label>
                      </div>
                     
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="website" value="1" @if($kolumnis->website == 1) checked="" @endif> Website <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="gallery" value="1" @if($kolumnis->gallery == 1) checked="" @endif> Gallery <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="ads" value="1" @if($kolumnis->ads == 1) checked="" @endif> Advertisement <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="role" value="1" @if($kolumnis->role == 1) checked="" @endif> Role <i class="input-helper"></i></label>
                      </div>
                     
                    </div>
                  </div>

              </div>
            
              <br>
              <button type="submit" class="btn btn-primary btn-rounded">Update</button>
            </form>
          </div>
        </div>
      </div>

    @endsection