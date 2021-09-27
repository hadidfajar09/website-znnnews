<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ZNNews | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css')  }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.css')  }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css')  }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css')  }}">
    <!-- End layout styles -->


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


    <!-- summernote -->
    




    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png')  }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     

      <!-- partial -->
      
      @include('admin.body.sidebar')

      
      @include('admin.body.header')
        
        <!-- partial -->
        <div class="main-panel">

          @include('admin.body.banner')

          @yield('admin')

        </div>
        
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.body.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/assets/js/misc.js') }}"></script>
    <script src="{{ asset('backend/assets/js/settings.js') }}"></script>
    <script src="{{ asset('backend/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


<script type="text/javascript">
    $('#summernote').summernote({
        height: 150
    });
</script>

<script type="text/javascript">
  $('#summernote1').summernote({
      height: 150
  });
</script>

<script type="text/javascript">
  $('#summernote2').summernote({
      height: 150
  });
</script>

<script type="text/javascript">
  $('#zeronine').summernote({
      height: 400
  });
</script>

<script type="text/javascript">
  $('#summernote11').summernote({
      height: 150
  });
</script>

<script type="text/javascript">
  $('#summernote12').summernote({
      height: 150
  });
</script>





    <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type','info') }}"
      switch(type){
         case 'info':
         toastr.info(" {{ Session::get('message') }} ");
         break;
     
         case 'success':
         toastr.success(" {{ Session::get('message') }} ");
         break;
     
         case 'warning':
         toastr.warning(" {{ Session::get('message') }} ");
         break;
     
         case 'error':
         toastr.error(" {{ Session::get('message') }} ");
         break; 
      }
      @endif 





      //delete category

      $('.delete-category').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover Category "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
window.location = "/delete/category/"+id+"" 
swal("Done", {
icon: "success",
});
} else {
swal("Your item is safe!");
}

}); 
});


//delete subcategory

$('.delete-subcategory').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover Subcategory "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
  
window.location = "/delete/subcategory/"+id+"" 
swal("Done", {
icon: "success",

});
} else {
swal("Your item is safe!");
}

}); 
});

//delete province
      
$('.delete-province').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover Province "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
window.location = "/delete/province/"+id+"" 
swal("Done", {
icon: "success",
});
} else {
swal("Your item is safe!");
}

}); 
});

//delete province
      
$('.delete-city').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover City "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
window.location = "/delete/city/"+id+"" 
swal("Done", {
icon: "success",
});
} else {
swal("Your item is safe!");
}

}); 
});


//delete province
      
$('.delete-post').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover Berita ini "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
window.location = "/delete/post/"+id+"" 
swal("Done", {
icon: "success",
});
} else {
swal("Your item is safe!");
}

}); 
});





//delete website
      
$('.delete-website').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover Source "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
window.location = "/delete/website/"+id+"" 
swal("Done", {
icon: "success",
});
} else {
swal("Your item is safe!");
}

}); 
});


//delete photo
      
$('.delete-photo').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover Thumbnail "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
window.location = "/delete/photo/"+id+"" 
swal("Done", {
icon: "success",
});
} else {
swal("Your item is safe!");
}

}); 
});

//delete photo
      
$('.delete-video').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover Video "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
window.location = "/delete/video/"+id+"" 
swal("Done", {
icon: "success",
});
} else {
swal("Your item is safe!");
}

}); 
});
      

      //delete advertisement
      
$('.delete-ads').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover Ads "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
window.location = "/delete/advertisement/"+id+"" 
swal("Done", {
icon: "success",
});
} else {
swal("Your item is safe!");
}

}); 
});

     //delete kolumnis
      
     $('.delete-kolumnis').click(function(){

var id = $(this).attr('data-id')
var name = $(this).attr('data-name')


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover Kolumnis "+name+"!",
icon: "warning",

buttons: true,
dangerMode: true,
})
.then((willDelete) => {

if (willDelete) {
window.location = "/delete/kolumnis/"+id+"" 
swal("Done", {
icon: "success",
});
} else {
swal("Your item is safe!");
}

}); 
});


      

     </script>

  </body>

  
</html>