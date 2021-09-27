@extends('admin.admin_master')

@section('title')
    Edit Source Link
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Source Links</h4>
            <form class="forms-sample" method="POST" action="{{ route('update.website',$website->id) }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Source Name</label>
                <input type="text" class="form-control" name="website_name" value="{{ $website->website_name }}">
                @error('website_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Source Link</label>
                <input type="text" class="form-control" name="website_link" value="{{ $website->website_link }}">
                @error('website_link')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
            
              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection