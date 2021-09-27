@extends('admin.admin_master')

@section('title')
    All Kolumnis
@endsection

@section('admin')

    
<div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kolumnis List</h4>

        <div class="template-demo">
            <a href="{{ route('add.kolumnis') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Add Kolumnis</button></a>            
        </div>
        

        <div class="table-responsive">
          <table class="table table-bordered">
              <br>
            <thead>
              <tr>
                <th> No </th>
                <th> Name </th>
                <th> Role </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

                @php
                    $i = 1
                @endphp

                @foreach($kolumnis as $row)
              <tr>
                <td> {{ $i++  }} </td>
                <td> {{ $row->name }} </td>
                
                <td> 
                    @if ($row->category == 1 )
                    <span class="badge badge-primary">Category</span>
                    @else
                    @endif    

                    @if ($row->district == 1 )
                    <span class="badge badge-success">District</span>
                    @else
                    @endif 

                    @if ($row->post == 1 )
                    <span class="badge badge-info">Post</span>
                    @else
                    @endif 

                    @if ($row->setting == 1 )
                    <span class="badge badge-danger">Setting</span>
                    @else
                    @endif 

                    @if ($row->website == 1 )
                    <span class="badge badge-primary">Website</span>
                    @else
                    @endif 

                    @if ($row->gallery == 1 )
                    <span class="badge badge-success">Gallery</span>
                    @else
                    @endif 

                    @if ($row->ads == 1 )
                    <span class="badge badge-info">Advertisement</span>
                    @else
                    @endif 

                    @if ($row->role == 1 )
                    <span class="badge badge-danger">Role</span>
                    @else
                    @endif 

                </td>
                <td> 
                    <a href="{{ route('edit.kolumnis',$row->id ) }}" class="btn btn-outline-info btn-icon-text "> <i class="mdi mdi-table-edit
                      btn-icon-prepend"></i>Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-text delete-kolumnis" data-id="{{ $row->id }}" data-name="{{ $row->name }}"><i class="mdi mdi-delete btn-icon-prepend"></i>Delete</a>
                </td>
              </tr>
              @endforeach
               
            </tbody>
          </table>
          
          <br>

        </div>
      </div>
    </div>
  </div>

@endsection