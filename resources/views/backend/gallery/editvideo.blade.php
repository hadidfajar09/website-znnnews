@extends('admin.admin_master')

@section('title')
    Edit VIdeo Embed
@endsection

@section('admin')


<div class="col-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Video Embed</h4>
        <p class="card-description"> Display on Frontend </p>
        <form class="forms-sample" action="{{ route('update.video',$video->id) }}" method="POST" enctype="multipart/form-data">
            @csrf



          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ $video->title }}">
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Embed Code</label>
            <input type="text" class="form-control" id="exampleInputName1" name="embed_code" value="{{ $video->embed_code }}">
            @error('embed_code')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>        

              
  
        <div class="form-group">
          <label for="exampleInputName1">Type</label>
          <br>
          <select class="js-example-basic-single select2-hidden-accessible" name="type" style="width:30%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="1" @if($video->type == 1) selected @endif>Big Video Dimention</option>
                                <option value="0" @if($video->type == 0) selected @endif>Small Video Dimention</option>
            

          </select>
            
        </div>
  
        <hr>

      <br>
        

          <button type="submit" class="btn btn-primary btn-rounded">Create</button>
        </form>
      </div>
    </div>
  </div>



    @endsection