@extends('admin.admin_master')

@section('title')
    Edit Category
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Category</h4>
            <p class="card-description"> Multi Language Category </p>
            <form class="forms-sample" method="POST" action="{{ route('update.category',$category->id) }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Kategori Indonesia</label>
                <input type="text" class="form-control" name="category_ind" value="{{ $category->category_ind }}">
                @error('category_ind')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Category English</label>
                <input type="text" class="form-control" name="category_en" value="{{ $category->category_en }}">
                @error('category_en')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
            
              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection