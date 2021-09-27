@extends('admin.admin_master')

@section('title')
    Category Page
@endsection

@section('admin')

    
<div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Category Page</h4>

        <div class="template-demo">
            <a href="{{ route('add.category') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Add Category</button></a>            
        </div>
        

        <div class="table-responsive">
          <table class="table table-bordered">
              <br>
            <thead>
              <tr>
                <th> No </th>
                <th> Kategori Indonesia </th>
                <th> Category English </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

                @foreach($category as $row)
              <tr>
                <td> {{ $loop->iteration + ($category->perPage() * ($category->currentPage() - 1)  )  }} </td>
                <td> {{ $row->category_ind }} </td>
                
                <td> {{ $row->category_en }} </td>
                <td> 
                    <a href="{{ route('edit.category',$row->id ) }}" class="btn btn-outline-info btn-icon-text "> <i class="mdi mdi-table-edit
                      btn-icon-prepend"></i>Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-text delete-category" data-id="{{ $row->id }}" data-name="{{ $row->category_ind }}"><i class="mdi mdi-delete btn-icon-prepend"></i>Delete</a>
                </td>
              </tr>
              @endforeach
               
            </tbody>
          </table>
          
          <br>
          {{ $category->links('pagination-links') }}

        </div>
      </div>
    </div>
  </div>

@endsection