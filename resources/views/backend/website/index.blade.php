@extends('admin.admin_master')

@section('title')
    Source Link Page
@endsection

@section('admin')

    
<div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Source Website Link</h4>

        <div class="template-demo">
            <a href="{{ route('add.website') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Add Source</button></a>            
        </div>
        

        <div class="table-responsive">
          <table class="table table-bordered">
              <br>
            <thead>
              <tr>
                <th> No </th>
                <th> Source Website Name </th>
                <th> Link </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

                @foreach($website as $row)
              <tr>
                <td> {{ $loop->iteration + ($website->perPage() * ($website->currentPage() - 1)  )  }} </td>
                <td> {{ $row->website_name }} </td>
                
                <td> {{ $row->website_link }} </td>
                <td> 
                    <a href="{{ route('edit.website',$row->id ) }}" class="btn btn-outline-info btn-icon-text "> <i class="mdi mdi-table-edit
                      btn-icon-prepend"></i>Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-text delete-website" data-id="{{ $row->id }}" data-name="{{ $row->website_name }}"><i class="mdi mdi-delete btn-icon-prepend"></i>Delete</a>
                </td>
              </tr>
              @endforeach
               
            </tbody>
          </table>
          
          <br>
          {{ $website->links('pagination-links') }}

        </div>
      </div>
    </div>
  </div>

@endsection