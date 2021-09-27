@extends('admin.admin_master')

@section('title')
    All Post Page
@endsection

@section('admin')

    
<div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Post Page</h4>

        <div class="template-demo">
            <a href="{{ route('create.post') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Add Post</button></a>            
        </div>
        
        <div class="row justify-content-center">
        <form method="get" action="{{ route('all.post') }}">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Title"  value="{{ Request::get('keyword') }}" id="keyword" name="keyword">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>
          </div>
        </div>
      </form>
    </div>

        <div class="table-responsive">
          <table class="table table-bordered">
              <br>
            <thead>
              <tr>
                <th> No </th>
                <th> Judul </th>
                <th> Kategori </th>
                <th> Provinsi </th>
                <th> Thumbnail </th>
                <th> Date </th>
                <th> Action </th>

              </tr>
            </thead>
            <tbody>

                @foreach($post as $row)
              <tr>
                <td> {{ $loop->iteration + ($post->perPage() * ($post->currentPage() - 1)  )  }} </td>
                <td> {{ Str::limit($row->title_ind, 10)  }} </td>
                <td> {{ $row->category_ind }} </td>
                <td> {{ $row->province_ind }} </td>
                <td> <img src="{{ $row->image }}" style="width: 50px; height: 50px;" alt=""> </td>
                
                <td> {{ $row->post_date  }} </td>
                <td> 
                    <a href="{{ route('edit.post',$row->id ) }}" class="btn btn-outline-info btn-icon-text "> <i class="mdi mdi-table-edit
                      btn-icon-prepend"></i>Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-text delete-post" data-id="{{ $row->id }}" data-name="{{ $row->title_ind }}"><i class="mdi mdi-delete btn-icon-prepend"></i>Delete</a>
                </td>
              </tr>
              @endforeach
               
            </tbody>
          </table>
          
          <br>
          {{ $post->appends(Request::all())->links('pagination-links') }}

        </div>
      </div>
    </div>
  </div>

@endsection