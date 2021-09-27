@extends('admin.admin_master')

@section('title')
    SubCategory Page
@endsection

@section('admin')

    
<div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">SubCategory Page</h4>

        <div class="template-demo">
          <a href="{{ route('add.subcategory') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Add SubCategory</button></a>           
        </div>
        

        <div class="table-responsive">
          <table class="table table-bordered">
              <br>
            <thead>
              <tr>
                <th> No </th>
                <th> SubKategori Indonesia </th>
                <th> SubCategory English </th>
                <th> Category Name </th>
                <th> Action </th> 
              </tr>
            </thead>
            <tbody>

                @foreach($subcategory as $row)
              <tr>
                <td> {{ $loop->iteration + ($subcategory->perPage() * ($subcategory->currentPage() - 1)  )  }} </td>
                <td> {{ $row->subCategory_ind }} </td>
                
                <td> {{ $row->subCategory_en }} </td>

                <td> {{ $row->category_ind }} </td>
                <td> 
                    <a href="{{ route('edit.subcategory',$row->id ) }}" class="btn btn-outline-info btn-icon-text "> <i class="mdi mdi-table-edit
                      btn-icon-prepend"></i>Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-text delete-subcategory" data-id="{{ $row->id }}" data-name="{{ $row->subCategory_ind }}" ><i class="mdi mdi-delete btn-icon-prepend"></i>Delete</a>
                </td>
              </tr>
              @endforeach
               
            </tbody>
          </table>
          
          <br>
          {{ $subcategory->links('pagination-links') }}

        </div>
      </div>
    </div>
  </div>

@endsection