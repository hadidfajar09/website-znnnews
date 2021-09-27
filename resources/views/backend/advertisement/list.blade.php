@extends('admin.admin_master')

@section('title')
Advertisement List
@endsection

@section('admin')

    
<div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Advertisement List</h4>

        <div class="template-demo">
            <a href="{{ route('add.advertisement') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Add Reclame</button></a>            
        </div>
        

        <div class="table-responsive">
          <table class="table table-bordered">
              <br>
            <thead>
              <tr>
                <th> No </th>
                <th> Link </th>
                <th> Banner </th>
                <th> Type </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

                @php($i = 1)
                @foreach($reclame as $row)
              <tr>
                <td> {{ $i++ }} </td>
                <td> {{ $row->link }} </td>
                <td> <img src="{{ asset($row->banner) }}" style="width: 100px; height: 80px;" alt=""> </td>
                <td> 
                    
                    @if ($row->type == 2)
                        <span class="badge badge-success">Horizontal</span>
                    @else
                        <span class="badge badge-info">Vertical</span>
                    @endif
                    
                </td>
                <td> 
                    <a href="{{ route('edit.photo',$row->id ) }}" class="btn btn-outline-info btn-icon-text "> <i class="mdi mdi-table-edit
                      btn-icon-prepend"></i>Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-text delete-ads" data-id="{{ $row->id }}" data-name="{{ $row->link }}"><i class="mdi mdi-delete btn-icon-prepend"></i>Delete</a>
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