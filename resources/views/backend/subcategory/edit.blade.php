@extends('admin.admin_master')

@section('title')
    Edit SubCategory
@endsection

@section('admin')

    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit SubCategory</h4>
            <p class="card-description"> Multi Language SubCategory </p>
            <form class="forms-sample" method="POST" action="{{ route('update.subcategory', $subcategory->id) }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">SubKategori Indonesia</label>
                <input type="text" class="form-control" name="subCategory_ind" value="{{ $subcategory->subCategory_ind }}">
                @error('subCategory_ind')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">SubCategory English</label>
                <input type="text" class="form-control" name="subCategory_en" value="{{ $subcategory->subCategory_en }}">
                @error('subCategory_en')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
            
              <div class="form-group">
                <label for="category_id">Select Category</label>
                <select class="js-example-basic-single select2-hidden-accessible" name="category_id" id="category_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled="" selected=""> --Select Category  </option>

                  @foreach ($category as $row)
                    <option value="{{ $row->id }}"
                      
                      @if($subcategory->category_id == $row->id) selected @endif
                      
                      
                      >{{ $row->category_ind }} | {{ $row->category_en }}</option>

                  @endforeach

                </select>
              </div>

              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection