@extends('admin.admin_master')

@section('title')
    Notice Setting
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Notice Setting</h4>



            <div class="template-demo">
                @if ($notice->status == 1)

                <a href="{{ route('notice.inactive',$notice->id) }}"><button type="button" class="btn btn-outline-danger btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>InActive</button></a>          

                @else

                <a href="{{ route('notice.active',$notice->id) }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Active</button></a>          

                @endif
                  
            </div>

            @if ($notice->status == 1)
            <small class="text-success">Now Notice Active</small>
            @else
            <small class="text-danger">Now Notice InActive</small>
            @endif

            <br><br>

            <form class="forms-sample" method="POST" action="{{ route('notice.update',$notice->id) }}">
              @csrf
              
               


              <div class="form-group">
                <label for="exampleTextarea1">Notice This Application</label>
               <textarea class="form-control" name="notice" id="summernote">
                 {{ $notice->notice }}
            
               </textarea>
              </div>


              
            
              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection