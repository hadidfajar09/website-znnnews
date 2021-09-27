@extends('admin.admin_master')

@section('title')
    Create a Post
@endsection

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="col-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add a new Post</h4>
        <p class="card-description"> News Article </p>
        <form class="forms-sample" action="{{ route('store.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="row">

          <div class="form-group col-md-6">
            <label for="exampleInputName1">Judul Indonesia</label>
            <input type="text" class="form-control" id="exampleInputName1" name="title_ind" value="{{ old('title_ind') }}">
            @error('title_ind')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group col-md-6">
            <label for="exampleInputName1">Title English</label>
            <input type="text" class="form-control" id="exampleInputName1" name="title_en" value="{{ old('title_en') }}">
            @error('title_en')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

        </div>



        <div class="row">

          <div class="form-group col-md-6">
            <label for="exampleInputName1">Category</label>
            <select class="js-example-basic-single select2-hidden-accessible" name="category_id" id="category_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
              <option disabled="" selected=""> --Select Category--  </option>

              @foreach ($category as $row)
                <option value="{{ $row->id }}">{{ $row->category_ind }} | {{ $row->category_en }}</option>

              @endforeach
              @error('category_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="exampleInputName1">Sub Category</label>
            <select class="js-example-basic-single select2-hidden-accessible" name="subcategory_id" id="subcategory_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
              <option disabled="" selected=""> --Select SubCategory--  </option>
            </select>
              
          </div>

        </div>



        <div class="row">

          <div class="form-group col-md-6">
            <label for="exampleInputName1">Province</label>
            <select class="js-example-basic-single select2-hidden-accessible" name="province_id" id="province_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
              <option disabled="" selected=""> --Select Province--  </option>

              @foreach ($province as $row)
                <option value="{{ $row->id }}">{{ $row->province_ind }} | {{ $row->province_en }}</option>

              @endforeach

              @error('province_id')
              <span class="text-danger">{{ $message }}</span>
              @enderror

            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="exampleInputName1">City</label>
            <select class="js-example-basic-single select2-hidden-accessible" name="city_id" id="city_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
              <option disabled="" selected=""> --Select City--  </option>
            </select>
              
          </div>

        </div>

        <br>
        <div class="file-group">
          <label for="image">Upload Thumbnail</label>
          <input type="file" class="form-control-file" name="image" id="image" >
          @error('image')
          <span class="text-danger">{{ $message }}</span>
          @enderror
          
          
      </div>
        <br><br>


        <div class="row">

          <div class="form-group col-md-6">
            <label for="exampleInputName1">Tags Indonesia</label>
            <input type="text" class="form-control" id="exampleInputName1" name="tags_ind" value="{{ old('tags_ind') }}">
         
          </div>

          <div class="form-group col-md-6">
            <label for="exampleInputName1">Tags English</label>
            <input type="text" class="form-control" id="exampleInputName1" name="tags_en" value="{{ old('tags_en') }}">
           
          </div>

        </div>



        <div class="form-group">
          <label for="exampleTextarea1">Details Indonesia</label>
          <textarea class="form-control" name="details_ind" id="summernote">{{ old('details_ind') }}</textarea>
          @error('details_ind')
          <span class="text-danger">{{ $message }}</span>
          @enderror
          
        </div>


        <div class="form-group">
          <label for="exampleTextarea1">Details English</label>
          <textarea class="form-control" name="details_en" id="summernote1">{{ old('details_en') }}</textarea>
          @error('details_en')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>


        <hr>

        <h4 class="text-center">Extra Options</h4>


        <br>

        <div class="container">

          <div class="row justify-content-center">
              
            <label class="form-check-label col-md-3">
              <input type="checkbox" name="headline" class="form-check-input" value="1"> Headline <i class="input-helper"></i></label>

              <label class="form-check-label col-md-3">
                <input type="checkbox" name="big_thumbnail" class="form-check-input" value="1"> Big Thumbnail <i class="input-helper"></i></label>

                <label class="form-check-label col-md-3">
                  <input type="checkbox" name="first_section" class="form-check-input" value="1"> First Section <i class="input-helper"></i></label>

                  <label class="form-check-label col-md-3">
                    <input type="checkbox" name="first_section_thumbnail" class="form-check-input" value="1"> FS Thumbnail <i class="input-helper"></i></label>

        </div>
        </div>

       

        <hr>
        <br>





          
          <button type="submit" class="btn btn-primary btn-rounded">Create</button>
        </form>
      </div>
    </div>
  </div>

    
  {{-- Untuk Category --}}
  <script type="text/javascript">
    $(document).ready(function() {
          $('select[name="category_id"]').on('change', function(){
              var category_id = $(this).val();
              if(category_id) {
                  $.ajax({
                      url: "{{  url('/get/subcategory/') }}/"+category_id,
                      type:"GET",
                      dataType:"json",
                      success:function(data) {
                         $("#subcategory_id").empty();
                               $.each(data,function(key,value){
                                   $("#subcategory_id").append('<option value="'+value.id+'">'+value.subCategory_ind+'</option>');
                               });


                      },
                     
                  });
              } else {
                  alert('danger');
              }
          });
      });
 </script>


{{-- Untuk Category --}}
<script type="text/javascript">
  $(document).ready(function() {
        $('select[name="province_id"]').on('change', function(){
            var province_id = $(this).val();
            if(province_id) {
                $.ajax({
                    url: "{{  url('/get/city/') }}/"+province_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       $("#city_id").empty();
                             $.each(data,function(key,value){
                                 $("#city_id").append('<option value="'+value.id+'">'+value.city_ind+'</option>');
                             });


                    },
                   
                });
            } else {
                alert('danger');
            }
        });
    });
</script>

    @endsection