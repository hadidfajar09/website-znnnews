@extends('admin.admin_master')

@section('title')
    Province Page
@endsection

@section('admin')

    
<div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Province Page</h4>

        <div class="template-demo">
            <a href="{{ route('add.province') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Add Province</button></a>            
        </div>
        

        <div class="table-responsive">
          <table class="table table-bordered">
              <br>
            <thead>
              <tr>
                <th> No </th>
                <th> Provinsi Indonesia </th>
                <th> Province English </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

                @foreach($province as $row)
              <tr>
                <td> {{ $loop->iteration + ($province->perPage() * ($province->currentPage() - 1)  )  }} </td>
                <td> {{ $row->province_ind }} </td>
                
                <td> {{ $row->province_en }} </td>
                <td> 
                    <a href="{{ route('edit.province',$row->id ) }}" class="btn btn-outline-info btn-icon-text "> <i class="mdi mdi-table-edit
                      btn-icon-prepend"></i>Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-text delete-province" data-id="{{ $row->id }}" data-name="{{ $row->province_ind }}"><i class="mdi mdi-delete btn-icon-prepend"></i>Delete</a>
                </td>
              </tr>
              @endforeach
               
            </tbody>
          </table>
          
          <br>
          {{ $province->links('pagination-links') }}

        </div>
      </div>
    </div>
  </div>

@endsection