@extends('admin.admin_master')

@section('title')
    Create Category
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Category</h4>
            <p class="card-description"> Multi Language Category </p>
            <form class="forms-sample" method="POST" action="{{ route('store.category') }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Kategori Indonesia</label>
                <input type="text" class="form-control" name="category_ind" placeholder="Kategori" >
                @error('category_ind')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Category English</label>
                <input type="text" class="form-control" name="category_en" placeholder="Category">
                @error('category_en')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
            
              <button type="submit" class="btn btn-primary btn-rounded">Create</button>
            </form>
          </div>
        </div>
      </div>

    @endsection