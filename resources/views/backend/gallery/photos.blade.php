@extends('admin.admin_master')

@section('title')
    Photo Gallery
@endsection

@section('admin')

    
<div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Photo Gallery</h4>

        <div class="template-demo">
            <a href="{{ route('add.photo') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Add Photos</button></a>            
        </div>
        

        <div class="table-responsive">
          <table class="table table-bordered">
              <br>
            <thead>
              <tr>
                <th> No </th>
                <th> Title </th>
                <th> Photo </th>
                <th> Type </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

                @foreach($photo as $row)
              <tr>
                <td> {{ $loop->iteration + ($photo->perPage() * ($photo->currentPage() - 1)  )  }} </td>
                <td> {{ $row->title }} </td>
                <td> <img src="{{ asset($row->photo) }}" style="width: 50px; height: 50px;" alt=""> </td>
                <td> 
                    
                    @if ($row->type == 1)
                        <span class="badge badge-success">Big Thumbnail</span>
                    @else
                        <span class="badge badge-info">Small Thumbnail</span>
                    @endif
                    
                </td>
                <td> 
                    <a href="{{ route('edit.photo',$row->id ) }}" class="btn btn-outline-info btn-icon-text "> <i class="mdi mdi-table-edit
                      btn-icon-prepend"></i>Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-text delete-photo" data-id="{{ $row->id }}" data-name="{{ $row->title }}"><i class="mdi mdi-delete btn-icon-prepend"></i>Delete</a>
                </td>
              </tr>
              @endforeach
               
            </tbody>
          </table>
          
          <br>
          {{ $photo->links('pagination-links') }}

        </div>
      </div>
    </div>
  </div>

@endsection