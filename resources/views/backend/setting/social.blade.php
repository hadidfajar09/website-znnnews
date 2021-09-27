@extends('admin.admin_master')

@section('title')
    Social Media Setting
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Social Media Links</h4>
            <p class="card-description"> Social Media about ZeroNineNews </p>
            <form class="forms-sample" method="POST" action="{{ route('social.update',$social->id) }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Facebook</label>
                <input type="text" class="form-control" name="facebook" value="{{ $social->facebook }}">
                @error('facebook')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Twitter</label>
                <input type="text" class="form-control" name="twitter" value="{{ $social->twitter }}">
                @error('twitter')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Youtube</label>
                <input type="text" class="form-control" name="youtube" value="{{ $social->youtube }}">
                @error('youtube')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Whatsapp</label>
                <input type="text" class="form-control" name="whatsapp" value="{{ $social->whatsapp }}">
                @error('whatsapp')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="{{ $social->instagram }}">
                @error('instagram')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Github</label>
                <input type="text" class="form-control" name="github" value="{{ $social->github }}">
                @error('github')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              
              <div class="form-group">
                <label for="exampleInputEmail1">Linkedin</label>
                <input type="text" class="form-control" name="linkedin" value="{{ $social->linkedin }}">
                @error('linkedin')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
            
              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection