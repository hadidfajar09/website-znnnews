@extends('admin.admin_master')

@section('title')
    Live Streaming Setting
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Live Link Youtube</h4>



            <div class="template-demo">
                @if ($live->status == 1)

                <a href="{{ route('live.inactive',$live->id) }}"><button type="button" class="btn btn-outline-danger btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>InActive</button></a>          

                @else

                <a href="{{ route('live.active',$live->id) }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-fw" style="float:right;"> <i class="mdi mdi-lead-pencil btn-icon-prepend"></i>Active</button></a>          

                @endif
                  
            </div>

            @if ($live->status == 1)
            <small class="text-success">Now Live Streaming Active</small>
            @else
            <small class="text-danger">Now Live Streaming InActive</small>
            @endif

            <br><br>

            <form class="forms-sample" method="POST" action="{{ route('live.update',$live->id) }}">
              @csrf
              
               


              <div class="form-group">
                <label for="exampleTextarea1">Embed Code For Live</label>
               <textarea class="form-control" name="embed_code" id="zeronine">
                 {!! $live->embed_code !!}
            
               </textarea>
              </div>


              
            
              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection