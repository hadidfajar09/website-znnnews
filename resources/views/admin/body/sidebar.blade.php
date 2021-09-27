@php
    $logo = DB::table('websettings')->first();
    $editData = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{ route('dashboard') }}"><img src="{{ asset('backend/assets/images/baruku.png') }}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img src="{{ asset('backend/assets/images/dua.png') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{ (!empty($editData->image))?url('upload/user_images/'.$editData->image):url('upload/no_image.PNG') }}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
              <span>{{ Auth::user()->email }}</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="{{ route('account.setting') }}" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('show.password') }}" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Menus</span>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <span class="menu-icon">
            <i class="mdi mdi-view-dashboard"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>




      @if (Auth::user()->category == 1)
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Categories</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="categories">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('categories') }}">Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('subcategories') }}">SubCategory</a></li>
            
          </ul>
        </div>
      </li>

      @else

      @endif


      @if (Auth::user()->district == 1)
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#district" aria-expanded="false" aria-controls="district">
          <span class="menu-icon">
            <i class="mdi mdi-city"></i>
          </span>
          <span class="menu-title">Districts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="district">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('provinces') }}"> Province </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('citys') }}"> City </a></li>
            
          </ul>
        </div>
      </li>
      @else

      @endif



      @if (Auth::user()->post == 1)
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
          <span class="menu-icon">
            <i class="mdi mdi-book-open-page-variant"></i>
          </span>
          <span class="menu-title">Posts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="post">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('create.post') }}"> Add Post </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.post') }}"> All Post </a></li>
            
          </ul>
        </div>
      </li>
      @else

      @endif






      @if (Auth::user()->setting == 1)
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
          <span class="menu-icon">
            <i class="mdi mdi-settings"></i>
          </span>
          <span class="menu-title">Settings</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="setting">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('social.setting') }}"> Social Media </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('seo.setting') }}"> SEO  </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('prayer.setting') }}"> Prayer </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('live.setting') }}"> Live </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('notice.setting') }}"> Notice </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('component.setting') }}"> Component </a></li>
            
          </ul>
        </div>
      </li>
      @else

      @endif




      @if (Auth::user()->website == 1)
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#website" aria-expanded="false" aria-controls="website">
          <span class="menu-icon">
            <i class="mdi mdi-link-variant"></i>
          </span>
          <span class="menu-title">Sources</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="website">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('add.website') }}"> Add Website Link </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.website') }}"> All Website Link </a></li>
            
          </ul>
        </div>
      </li>
      @else

      @endif
      


      @if (Auth::user()->gallery == 1)
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false" aria-controls="gallery">
          <span class="menu-icon">
            <i class="mdi mdi-file-image"></i>
          </span>
          <span class="menu-title">Gallerys</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="gallery">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('photo.gallery') }}"> Photo Gallery </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('video.gallery') }}"> Video Gallery </a></li>
            
          </ul>
        </div>
      </li>
      @else

      @endif


      @if (Auth::user()->role == 1)
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#role" aria-expanded="false" aria-controls="role">
          <span class="menu-icon">
            <i class="mdi mdi-account-settings"></i>
          </span>
          <span class="menu-title">User Role</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="role">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('add.kolumnis') }}"> Add Kolumnis </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.kolumnis') }}"> All Kolumnis </a></li>
            
          </ul>
        </div>
      </li>
      @else

      @endif



      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#advertisement" aria-expanded="false" aria-controls="advertisement">
          <span class="menu-icon">
            <i class="mdi mdi-cards"></i>
          </span>
          <span class="menu-title">Advertisement</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="advertisement">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('list.advertisement') }}"> List Reclame </a></li>
            
            
          </ul>
        </div>
      </li>

      
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>