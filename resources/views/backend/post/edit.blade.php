@extends('admin.admin_master')

@section('title')
    Edit a Post
@endsection

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@php
    $sub = DB::table('subcategories')->where('category_id',$post->category_id)->get();

    $subdist = DB::table('citys')->where('province_id',$post->province_id)->get();
@endphp


<div class="col-13 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Post</h4>

                    <p class="card-description"> Edit News Article </p>
                    
 <form class="forms-sample" action="{{ route('update.post',$post->id) }}" method="post" enctype="multipart/form-data">
  @csrf

    <div class="row">

    <div class="form-group col-md-6">
      <label for="exampleInputName1">Judul Indonesia</label>
      <input type="text" class="form-control" id="exampleInputName1" name="title_ind" value="{{ $post->title_ind }}">
    </div>

     <div class="form-group col-md-6">
      <label for="exampleInputName1">Title English</label>
      <input type="text" class="form-control" id="exampleInputName1" name="title_en" value="{{ $post->title_en }}">
    </div>

  </div> <!-- End Row  --> 




 <div class="row">

    <div class="form-group col-md-6">
      <label for="exampleInputName1">Category</label>
       <select class="js-example-basic-single select2-hidden-accessible" id="exampleSelectGender" name="category_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
   <option disabled="" selected="">--Select Category--</option>
                @foreach($category as $row)
  <option value="{{ $row->id }}"
  <?php if ($row->id == $post->category_id) {
    echo "selected"; } ?> >{{ $row->category_en  }} </option>
                @endforeach
                        </select>
    </div>

     <div class="form-group col-md-6">
      <label for="exampleInputName1">Sub Category</label>
      <select class="js-example-basic-single select2-hidden-accessible" name="subcategory_id" id="subcategory_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
      <option disabled="" selected="">--Select SubCategory--</option>
        
         @foreach($sub as $row)
  <option value="{{ $row->id }}"
  <?php if ($row->id == $post->subcategory_id) {
    echo "selected"; } ?> >{{ $row->subCategory_ind  }} </option>
                @endforeach

                        </select>
    </div>

  </div> <!-- End Row  --> 





 <div class="row">

    <div class="form-group col-md-6">
      <label for="exampleInputName1">Province</label>
       <select class="js-example-basic-single select2-hidden-accessible" id="exampleSelectGender" name="province_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
   <option disabled="" selected="">--Select Province--</option>
                @foreach($province as $row)
 <option value="{{ $row->id }}"
  <?php if ($row->id == $post->province_id) {
    echo "selected"; } ?> >{{ $row->province_ind  }} </option>
                @endforeach
                        </select>
    </div>

     <div class="form-group col-md-6">
      <label for="exampleInputName1">City</label>
      <select class="js-example-basic-single select2-hidden-accessible" id="city_id" name="city_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
    <option disabled="" selected="">--Select City--</option>

       @foreach($subdist as $row)
  <option value="{{ $row->id }}"
  <?php if ($row->id == $post->city_id) {
    echo "selected"; } ?> >{{ $row->city_ind  }} </option>
                @endforeach
                        </select>
    </div>

  </div> <!-- End Row  --> 
 
<br>
 

<div class="row">

    <div class="form-group col-md-6">
      <label for="exampleInputName1">Upload New Thumbnail</label>
      <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>

     <div class="form-group col-md-6">
      
      <label for="exampleInputName1">Old Image</label>
      
      <br>
      
        <img src="{{ URL::to($post->image)  }}" class="rounded" style="width: 500px; height: 300px;">
        <input type="hidden" name="oldimage" value="{{ $post->image }}">
      
      
    </div>

  </div> <!-- End Row  --> 


<br><br>







<div class="row">

    <div class="form-group col-md-6">
      <label for="exampleInputName1">Tags Indonesia</label>
      <input type="text" class="form-control" id="exampleInputName1" name="tags_ind" value="{{ $post->tags_ind }}">
    </div>

     <div class="form-group col-md-6">
      <label for="exampleInputName1">Tags English</label>
      <input type="text" class="form-control" id="exampleInputName1" name="tags_en" value="{{ $post->tags_en }}">
    </div>

  </div> <!-- End Row  --> 


<div class="form-group">
    <label for="exampleTextarea1">Details Indoensia</label>
   <textarea class="form-control" name="details_ind" id="summernote">
     {{ $post->details_ind }}

   </textarea>
                      </div>
  


 <div class="form-group">
    <label for="exampleTextarea1">Details English</label>
    <textarea class="form-control" name="details_en" id="summernote1">
       {{ $post->details_en }}
    </textarea>
                      </div>



<hr>
<h4 class="text-center">Extra Options </h4>
<br>

<div class="container">
  <div class="row">
   
    <label class="form-check-label col-md-3">
    <input type="checkbox" name="headline" class="form-check-input" value="1"  @if($post->headline == 1) checked @endif> Headline <i class="input-helper"></i></label>
 
     <label class="form-check-label col-md-3">
    <input type="checkbox" name="big_thumbnail" class="form-check-input" value="1" @if($post->big_thumbnail == 1) checked @endif> Big Thumbnail <i class="input-helper"></i></label>
 
     <label class="form-check-label col-md-3">
    <input type="checkbox" name="first_section" class="form-check-input" value="1"@if($post->first_section == 1) checked @endif> First Section <i class="input-helper"></i></label>
 
     <label class="form-check-label col-md-3">
    <input type="checkbox" name="first_section_thumbnail" class="form-check-input" value="1" @if($post->first_section_thumbnail == 1) checked @endif> FS Thumbnail <i class="input-helper"></i></label>
       
  
 </div> <!-- End Row  -->
</div>


<br><br>
 
<button type="submit" class="btn btn-primary btn-rounded">Update</button>
                     
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