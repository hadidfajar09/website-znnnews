@extends('admin.admin_master')

@section('title')
    Dashboard Page
@endsection

@section('admin')
    


@php
    $category = DB::table('categories')->get();
    $subcategory = DB::table('subcategories')->get();
    $post = DB::table('posts')->get();
    $ads = DB::table('advertisements')->get();
@endphp

    <div class="row">


      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{ count($category) }}</h3>
                  <p class="text-primary ml-2 mb-0 font-weight-medium">Category</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-primary ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Categories</h6>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{ count($subcategory) }}</h3>
                  <p class="text-success ml-2 mb-0 font-weight-medium">Sub Category</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Sub Categories</h6>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{ count($post) }}</h3>
                  <p class="text-info ml-2 mb-0 font-weight-medium">Post</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-info">
                  <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Posts</h6>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{ count($ads) }}</h3>
                  <p class="text-danger ml-2 mb-0 font-weight-medium">Ads</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-danger ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Advertisements</h6>
          </div>
        </div>
      </div>


    </div>
    

  @endsection