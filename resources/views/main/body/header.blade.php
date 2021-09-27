@php
 
    $category = DB::table('categories')->orderBy('id','asc')->get();
    $social = DB::table('socials')->first();
    $websiteset = DB::table('websettings')->first();
    $horizontal = DB::table('advertisements')->where('type',2)->first();

@endphp



<section class="hdr_section">
    <div class="container-fluid">			
        <div class="row">
            <div class="col-xs-6 col-md-2 col-sm-4">
                <div class="header_logo">
                    <a href="{{ URL::to('/')}}"><img src="{{ asset($websiteset->logo) }}"></a> 
                </div>
            </div>              
            <div class="col-xs-6 col-md-8 col-sm-8">
                <div id="menu-area" class="menu_area">
    <div class="menu_bottom">
        <nav role="navigation" class="navbar navbar-default mainmenu">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('/')}}">HOME </a></li>

                    @foreach($category as $row)


                    @php
                        $subcategory = DB::table('subcategories')->where('category_id',$row->id)->get();
                    @endphp

                        <li class="dropdown">
                            <a href="{{ URL::to('catpost/'.$row->id.'/'.$row->category_en) }}">
                                
                                @if (session()->get('lang') == 'en')
                                {{ $row->category_en }}

                                @else
                                {{ $row->category_ind }}
                                
                                @endif
                                
                                <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @foreach ($subcategory as $row)
                                
                            
                            <li><a href="{{ URL::to('subcatpost/'.$row->id.'/'.$row->subCategory_en) }}">
                                
                                @if (session()->get('lang') == 'en')
                                {{ $row->subCategory_en }}

                                @else
                                {{ $row->subCategory_ind }}
                                
                                @endif
                            </a></li>

                            @endforeach
                        </ul>
                        </li>

                    @endforeach    
                        
                        
            </div>
        </nav>											
    </div>
</div>					
</div> 
<div class="col-xs-12 col-md-2 col-sm-12">
<div class="header-icon">
    <ul>
        <!-- version-start --> 
        @if(session()->get('lang') == 'en')
        <li class="version"><a href="{{ route('lang.bahasa') }}"><B>IND</B></a></li>&nbsp;&nbsp;&nbsp;
        @else
        <li class="version"><a href="{{ route('lang.english') }}"><B>EN</B></a></li>&nbsp;&nbsp;&nbsp;
        @endif
        <!-- login-start -->
    
        <!-- search-start -->
        
        <li><div class="search-large-divice">
            <div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
                <div class="modal fade bd-example-modal-lg" action="#" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('search.posts') }}" method="get">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="custom-search-input">
                                            <form>
                                                <div class="input-group">
                                                    <input class="search form-control input-lg" placeholder="Cari Judul Berita" value="{{ Request::get('keyword') }}" id="keyword" name="keyword" type="text">
                                                    <span class="input-group-btn">
                                                    <button class="btn btn-lg" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                </span> </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div></li>
    
        <!-- social-start -->
        
        <li>
            <div class="dropdown">
                <button class="dropbtn-02"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                <div class="dropdown-content">
                <a href="{{ $social->facebook }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                <a href="{{ $social->twitter }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                <a href="{{ $social->youtube }}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
                <a href="{{ $social->instagram }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                <a href="{{ $social->whatsapp }}" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
                </div>
            </div>
        </li>
    </ul>
</div>
            </div>
        </div>
    </div>
</section><!-- /.header-close -->

<!-- top-add-start -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                <div class="top-add">
                        @if ($horizontal == NULL)

                        @else
                        <a href="{{ $horizontal->link }}" target="_blank"><img src=" {{ asset($horizontal->banner) }}" alt="" /></a> 
                        @endif
                    

                </div>
            </div>
        </div>
    </div>
</section> <!-- /.top-add-close -->

<!-- date-start -->
@php
    $posttime = DB::table('posts')->orderBy('id','desc')->first();
    $mytime = Carbon\Carbon::now();
    
@endphp
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="date">
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>  Makassar </li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>  {{$mytime->toDateTimeString()}} </li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> Update {{ Carbon\Carbon::parse($posttime->post_date)->diffForHumans() }}  </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</section><!-- /.date-close -->  