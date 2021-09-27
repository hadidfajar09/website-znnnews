@extends('admin.admin_master')

@section('title')
    Add User Role
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add User Role</h4>
            <p class="card-description"> Privallage User Setting </p>
            <form class="forms-sample" method="POST" action="{{ route('store.kolumnis') }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Name</label>
                <input type="text" class="form-control" name="name" >
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" name="password">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="category" value="1"> Category <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="district" value="1" > District <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="post" value="1" > Post <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="setting" value="1" > Setting <i class="input-helper"></i></label>
                      </div>
                     
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="website" value="1"> Website <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="gallery" value="1"> Gallery <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="ads" value="1"> Advertisement <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="role" value="1"> Role <i class="input-helper"></i></label>
                      </div>
                     
                    </div>
                  </div>

              </div>
            
              <br>
              <button type="submit" class="btn btn-primary btn-rounded">Add</button>
            </form>
          </div>
        </div>
      </div>

    @endsection