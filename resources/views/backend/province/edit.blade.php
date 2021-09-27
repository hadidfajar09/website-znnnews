@extends('admin.admin_master')

@section('title')
    Edit Province
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Province</h4>
            <p class="card-description"> Multi Language Province </p>
            <form class="forms-sample" method="POST" action="{{ route('update.province',$province->id) }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Provinsi Indonesia</label>
                <input type="text" class="form-control" name="province_ind" value="{{ $province->province_ind }}">
                @error('province_ind')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Province English</label>
                <input type="text" class="form-control" name="province_en" value="{{ $province->province_en }}">
                @error('province_en')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
            
              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection