@extends('admin.admin_master')

@section('title')
    SEO Setting
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Search Engine Optimize</h4>
            <p class="card-description"> Social Media about ZeroNineNews </p>
            <form class="forms-sample" method="POST" action="{{ route('seo.update',$seo->id) }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Meta Author</label>
                <input type="text" class="form-control" name="meta_author" value="{{ $seo->meta_author }}">
                @error('meta_author')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Meta Title</label>
                <input type="text" class="form-control" name="meta_title" value="{{ $seo->meta_title }}">
                @error('meta_title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Meta Keyword</label>
                <input type="text" class="form-control" name="meta_keyword" value="{{ $seo->meta_keyword }}">
                @error('meta_keyword')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleTextarea1">Meta Description</label>
               <textarea class="form-control" name="meta_description" id="summernote">
                 {{ $seo->meta_description }}
            
               </textarea>
              </div>


              <div class="form-group">
                <label for="exampleTextarea1">Google Analytics</label>
               <textarea class="form-control" name="google_analytics" id="summernote1">
                 {{ $seo->google_analytics }}
            
               </textarea>
              </div>


             
              <div class="form-group">
                <label for="exampleInputEmail1">Google Verification</label>
                <input type="text" class="form-control" name="google_verification" value="{{ $seo->google_verification }}">
                @error('google_verification')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              
              <div class="form-group">
                <label for="exampleTextarea1">Alexa Analytics</label>
               <textarea class="form-control" name="alexa_analytics" id="summernote2">
                 {{ $seo->alexa_analytics }}
            
               </textarea>
              </div>

              
            
              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection