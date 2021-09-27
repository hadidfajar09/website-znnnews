@extends('admin.admin_master')

@section('title')
    Add Source Website
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Source Links</h4>
            <form class="forms-sample" method="POST" action="{{ route('store.website') }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Source Name</label>
                <input type="text" class="form-control" name="website_name" placeholder="Name" >
                @error('website_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Source Link</label>
                <input type="text" class="form-control" name="website_link" placeholder="URL">
                @error('website_link')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
            
              <button type="submit" class="btn btn-primary btn-rounded">Create</button>
            </form>
          </div>
        </div>
      </div>

    @endsection