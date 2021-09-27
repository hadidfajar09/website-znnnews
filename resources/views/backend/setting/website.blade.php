@extends('admin.admin_master')

@section('title')
    Update Component Website
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Component Website</h4>
            <p class="card-description"> Component for Frontend </p>
            <form class="forms-sample" method="POST" action="{{ route('update.component',$webset->id) }}" enctype="multipart/form-data">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ $webset->phone }}">
                @error('phone')
                <span class="text-danger">{{ $phone }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $webset->email }}">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              

              <div class="row">

                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Website Logo</label>
                  <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1">
                </div>
            
                 <div class="form-group col-md-6">
                  
                  <label for="exampleInputName1">Old Image</label>
                  
                  <br>
                  
                    <img src="{{ asset($webset->logo) }}" class="rounded" style="width: 500px; height: 300px;">
                    <input type="hidden" name="oldlogo" value="{{ $webset->logo }}">
                  
                  
                </div>
            
              </div> <!-- End Row  --> 

              

<div class="form-group">
    <label for="exampleTextarea1">Alamat</label>
   <textarea class="form-control" name="address_ind" id="summernote11">
     {{ $webset->address_ind }}

   </textarea>
                      </div>
  


 <div class="form-group">
    <label for="exampleTextarea1">Address</label>
    <textarea class="form-control" name="address_en" id="summernote12">
       {{ $webset->address_en }}
    </textarea>
                      </div>


              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection