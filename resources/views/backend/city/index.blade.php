@extends('admin.admin_master')

@section('title')
    City Page
@endsection

@section('admin')

    
<div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">City Page</h4>

        <div class="template-demo">
          <a href="{{ route('add.city') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Add City</button></a>           
        </div>
        

        <div class="table-responsive">
          <table class="table table-bordered">
              <br>
            <thead>
              <tr>
                <th> No </th>
                <th> Kota Indonesia </th>
                <th> City English </th>
                <th> Province Name </th>
                <th> Action </th> 
              </tr>
            </thead>
            <tbody>

                @foreach($city as $row)
              <tr>
                <td> {{ $loop->iteration + ($city->perPage() * ($city->currentPage() - 1)  )  }} </td>
                <td> {{ $row->city_ind }} </td>
                
                <td> {{ $row->city_en }} </td>

                <td> {{ $row->province_ind }} </td>
                <td> 
                    <a href="{{ route('edit.city',$row->id ) }}" class="btn btn-outline-info btn-icon-text "> <i class="mdi mdi-table-edit
                      btn-icon-prepend"></i>Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-text delete-city" data-id="{{ $row->id }}" data-name="{{ $row->city_ind }}" ><i class="mdi mdi-delete btn-icon-prepend"></i>Delete</a>
                </td>
              </tr>
              @endforeach
               
            </tbody>
          </table>
          
          <br>
          {{ $city->links('pagination-links') }}

        </div>
      </div>
    </div>
  </div>

@endsection