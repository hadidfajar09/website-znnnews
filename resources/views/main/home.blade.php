@extends('main.home_master')

@section('title')
    Home
@endsection

@section('content')
    
@php
    $headline = DB::table('posts')->where('posts.headline',1)->orderBy('id','desc')->limit(3)->get();
    $notice = DB::table('notices')->first();
@endphp

<section>
    <div class="container-fluid">
        <div class="row scroll">
            <div class="col-md-2 col-sm-3 scroll_01 ">
                @if (session()->get('lang') == 'en')
                    Breaking News
                @else
                    Berita Utama
                
                @endif
            </div>
            <div class="col-md-10 col-sm-9 scroll_02">
                <marquee>
                    @foreach ($headline as $row)
                    @if (session()->get('lang') == 'en')
                    *{{ $row->title_en }}
                @else
                    *{{ $row->title_ind }}
                
                @endif
                    @endforeach
                </marquee>
                
            </div>
        </div>
    </div>
</section>     


@if($notice->status == 1)
<section>
    <div class="container-fluid">
        <div class="row scroll">
            <div class="col-md-2 col-sm-3 scroll_01 " style="background-color: green">
                @if (session()->get('lang') == 'en')
                    Catatan :
                @else
                    Notice :
                
                @endif
            </div>
            <div class="col-md-10 col-sm-9 scroll_02 " style="background-color: red">
                <marquee>
                    {{ $notice->notice }}                    
                </marquee>
                
            </div>
        </div>
    </div>
</section>     
@endif

@php
    $firstsectionbig = DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','desc')->first();
    $firstsection = DB::table('posts')->where('first_section',1)->orderBy('id','desc')->limit(8)->get();
@endphp


<!-- 1st-news-section-start -->	
<section class="news-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-md-1 col-sm-1 col-lg-1"></div>
                    <div class="col-md-10 col-sm-10">
                        <div class="lead-news">
 <div class="service-img"><a href="{{ URL::to('view/post/'.$firstsectionbig->id) }}"><img src="{{ asset($firstsectionbig->image) }}" width="800px" alt="Notebook"></a></div>
                            <div class="content">
     <h4 class="lead-heading-01"><a href="{{ URL::to('view/post/'.$firstsectionbig->id) }}">
         
        @if (session()->get('lang') == 'en')
        {{ $firstsectionbig->title_en }}
    @else
    {{ $firstsectionbig->title_ind }}
    
    @endif
    </a> </h4>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
                    <div class="row">
                        @foreach($firstsection as $row)
                            <div class="col-md-3 col-sm-3" style="height: 250px">
                                <div class="top-news">
                                    <a href="{{ URL::to('view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-02"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                        @if (session()->get('lang') == 'en')
                                        {{ $row->title_en }}
                                    @else
                                    {{ $row->title_ind }}
                                    
                                    @endif    
                                    </a> </h4>
                                </div>
                            </div>
                        @endforeach
                        </div>
                
                <!-- add-start -->	
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                       @php
                           $horizontal = DB::table('advertisements')->where('type',2)->skip(1)->first();
                       @endphp
                        <div class="add">
                            @if ($horizontal == NULL)

                            @else
                            <a href="{{ $horizontal->link }}" target="_blank"><img src=" {{ asset($horizontal->banner) }}" alt="" /></a> 
                            @endif
                            
                        </div>
                    </div>
                </div><!-- /.add-close -->	
                
                <!-- news-start -->
                @php
                $firstcategory = DB::table('categories')->first();

                $firstcatpostbig = DB::table('posts')->where('category_id',$firstcategory->id)->where('big_thumbnail',1)->first();

                $firstcatpostsmall = DB::table('posts')->where('category_id',$firstcategory->id)->where('big_thumbnail',NULL)->limit(3)->get();
            @endphp
                <div class="row">
                   
                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title"><a href="{{ URL::to('catpost/'.$firstcategory->id.'/'.$firstcategory->category_en) }}">
                                @if (session()->get('lang') == 'en')
                                {{ $firstcategory->category_en }}
                            @else
                            {{ $firstcategory->category_ind }}
                            
                            @endif   
                                
                                <span>
                                    @if (session()->get('lang') == 'en')
                                More
                            @else
                            Lainnya
                            
                            @endif  
                                    
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="{{ URL::to('view/post/'.$firstcatpostbig->id) }}"><img src="{{ asset( $firstcatpostbig->image) }}" alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="{{ URL::to('view/post/'.$firstcatpostbig->id) }}">
                                            @if (session()->get('lang') == 'en')
                                            {{ $firstcatpostbig->title_en }}
                                        @else
                                        {{ $firstcatpostbig->title_ind }}
                                        @endif       
                                        </a> </h4>
                                    </div>
                                </div>


                                <div class="col-md-6 col-sm-6">
                                    @foreach($firstcatpostsmall as $row)
                                    <div class="image-title">
                                        <a href="{{ URL::to('view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                        <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                        
                                            @if (session()->get('lang') == 'en')
                                            {{ $row->title_en }}
                                        @else
                                        {{ $row->title_ind }}
                                        @endif   
                                        
                                        </a> </h4>
                                    </div>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                    </div>





                    @php
                $secondcategory = DB::table('categories')->skip(1)->first();

                $secondcatpostbig = DB::table('posts')->where('category_id',$secondcategory->id)->where('big_thumbnail',1)->first();

                $secondcatpostsmall = DB::table('posts')->where('category_id',$secondcategory->id)->where('big_thumbnail',NULL)->limit(3)->get();
            @endphp
                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title"><a href="{{ URL::to('catpost/'.$secondcategory->id.'/'.$secondcategory->category_en) }}">
                                @if (session()->get('lang') == 'en')
                                {{ $secondcategory->category_en }}
                            @else
                            {{ $secondcategory->category_ind }}
                            
                            @endif   
                                    
                                    <span>
                                        @if (session()->get('lang') == 'en')
                                    More
                                @else
                                Lainnya
                                
                                @endif  
                                    
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="{{ URL::to('view/post/'.$secondcatpostbig->id) }}"><img src="{{ asset($secondcatpostbig->image) }}" alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="{{ URL::to('view/post/'.$secondcatpostbig->id) }}">
                                            @if (session()->get('lang') == 'en')
                                            {{ $secondcatpostbig->title_en }}
                                        @else
                                        {{ $secondcatpostbig->title_ind }}
                                        @endif     
                                        </a> </h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @foreach($secondcatpostsmall as $row)

                                    <div class="image-title">
                                        <a href="{{ URL::to('view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                        <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                            @if (session()->get('lang') == 'en')
                                            {{ $row->title_en }}
                                        @else
                                        {{ $row->title_ind }}
                                        @endif  
                                        </a> </h4>
                                    </div>

                                    @endforeach
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>					
            </div>
            <div class="col-md-3 col-sm-3">
                <!-- add-start -->	
                @php
                    $vertical = DB::table('advertisements')->where('type',1)->first();
                    $vertical2 = DB::table('advertisements')->where('type',1)->skip(1)->first();
                @endphp
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add">
                            @if ($vertical == NULL)

                            @else
                            <a href="{{ $vertical->link }}" target="_blank"><img src=" {{ asset($vertical->banner) }}" alt="" /></a> 
                            @endif
                        </div>
                    </div>
                </div><!-- /.add-close -->	
                
                <!-- youtube-live-start -->	
                @php
                    $live = DB::table('lives')->first()
                @endphp

                @if ($live->status == 1)
                    
                <div class="cetagory-title-03">Live Streaming</div>
                <div class="photo">
                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
         
                        
                        {!! $live->embed_code !!}
                    </div>
                </div><!-- /.youtube-live-close -->	
                @endif
                
                <!-- facebook-page-start -->
                <div class="cetagory-title-03">Facebook </div>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v12.0" nonce="r90smoHl"></script>


                <div class="fb-page" data-href="https://www.facebook.com/ZNNews-265218935338325" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ZNNews-265218935338325" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ZNNews-265218935338325">ZNNews</a></blockquote></div>
                
                <!-- add-start -->	
                
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <br><br>
                        <div class="sidebar-add">
                            @if ($vertical2 == NULL)

                            @else
                            <a href="{{ $vertical2->link }}" target="_blank"><img src=" {{ asset($vertical2->banner) }}" alt="" /></a> 
                            @endif
                        </div>
                    </div>
                </div><!-- /.add-close -->	
            </div>
        </div>
    </div>
</section><!-- /.1st-news-section-close -->

<!-- 2nd-news-section-start -->	
<section class="news-section">
    <div class="container-fluid">
        <div class="row">

@php
       $threecategory = DB::table('categories')->skip(2)->first();

$threecatpostbig = DB::table('posts')->where('category_id',$threecategory->id)->where('big_thumbnail',1)->first();

$threecatpostsmall = DB::table('posts')->where('category_id',$threecategory->id)->where('big_thumbnail',NULL)->limit(3)->get();
@endphp

            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="{{ URL::to('catpost/'.$threecategory->id.'/'.$threecategory->category_en) }}">
                        @if (session()->get('lang') == 'en')
                        {{ $threecategory->category_en }}
                    @else
                    {{ $threecategory->category_ind }}
                    
                    @endif   
                        <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
                            @if (session()->get('lang') == 'en')
                            All News
                        @else
                        Semua Berita

                        @endif
                        </span></a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="{{ URL::to('view/post/'.$threecatpostbig->id) }}"><img src="{{ asset($threecatpostbig->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{ URL::to('view/post/'.$threecatpostbig->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $threecatpostbig->title_en }}
                                @else
                                {{ $threecatpostbig->title_ind }}
                                @endif     
                                </a> </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach($threecatpostsmall as $row)
                            <div class="image-title">
                                <a href="{{ URL::to('view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $row->title_en }}
                                @else
                                {{ $row->title_ind }}
                                @endif  
                                
                                </a> </h4>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>



            @php
       $fourcategory = DB::table('categories')->skip(3)->first();

$fourcatpostbig = DB::table('posts')->where('category_id',$fourcategory->id)->where('big_thumbnail',1)->first();

$fourcatpostsmall = DB::table('posts')->where('category_id',$fourcategory->id)->where('big_thumbnail',NULL)->limit(3)->get();
@endphp

            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="{{ URL::to('catpost/'.$fourcategory->id.'/'.$fourcategory->category_en) }}">
                        
                        @if (session()->get('lang') == 'en')
                        {{ $fourcategory->category_en }}
                    @else
                    {{ $fourcategory->category_ind }}
                    
                    @endif  
                        
                        
                        <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
                              
                        @if (session()->get('lang') == 'en')
                        All News
                    @else
                    Semua Berita
                    
                    @endif  
                        </span></a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="{{ URL::to('view/post/'.$fourcatpostbig->id) }}"><img src="{{ asset($fourcatpostbig->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{ URL::to('view/post/'.$fourcatpostbig->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $fourcatpostbig->title_en }}
                                @else
                                {{ $fourcatpostbig->title_ind }}
                                @endif   
                                
                                </a> </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach($fourcatpostsmall as $row)
                            <div class="image-title">
                                <a href="{{ URL::to('view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $row->title_en }}
                                @else
                                {{ $row->title_ind }}
                                @endif  
                                </a> </h4>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ******* -->
        <div class="row">

            @php
            $fivecategory = DB::table('categories')->skip(4)->first();
     
     $fivecatpostbig = DB::table('posts')->where('category_id',$fivecategory->id)->where('big_thumbnail',1)->first();
     
     $fivecatpostsmall = DB::table('posts')->where('category_id',$fivecategory->id)->where('big_thumbnail',NULL)->limit(3)->get();
     @endphp


            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="{{ URL::to('catpost/'.$fivecategory->id.'/'.$fivecategory->category_en) }}">
                        @if (session()->get('lang') == 'en')
                        {{ $fivecategory->category_en }}
                    @else
                    {{ $fivecategory->category_ind }}
                    
                    @endif  
                        
                        <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> @if (session()->get('lang') == 'en')
                            All News
                        @else
                            Semua Berita
                        
                        @endif  
                        
                        </span></a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="{{ URL::to('view/post/'.$fivecatpostbig->id) }}"><img src="{{ asset($fivecatpostbig->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{ URL::to('view/post/'.$fivecatpostbig->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $fivecatpostbig->title_en }}
                                @else
                                {{ $fivecatpostbig->title_ind }}
                                @endif   
                                </a> </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">

                            @foreach($fivecatpostsmall as $row)
                            <div class="image-title">
                                <a href="{{ URL::to('view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $row->title_en }}
                                @else
                                {{ $row->title_ind }}
                                @endif 
                                </a> </h4>
                            </div>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>



            @php
            $sixcategory = DB::table('categories')->skip(5)->first();
     
     $sixcatpostbig = DB::table('posts')->where('category_id',$sixcategory->id)->where('big_thumbnail',1)->first();
     
     $sixcatpostsmall = DB::table('posts')->where('category_id',$sixcategory->id)->where('big_thumbnail',NULL)->limit(3)->get();
     @endphp
            <div class="col-md-6 col-sm-6">
                <div class="bg-one">
                    <div class="cetagory-title-02"><a href="{{ URL::to('catpost/'.$sixcategory->id.'/'.$sixcategory->category_en) }}">
                        @if (session()->get('lang') == 'en')
                        {{ $sixcategory->category_en }}
                    @else
                    {{ $sixcategory->category_ind }}
                    
                    @endif  
                        <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> 
                            @if (session()->get('lang') == 'en')
                            All News
                        @else
                            Semua Berita
                        
                        @endif  
                         </span></a></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-news">
                                <a href="{{ URL::to('view/post/'.$sixcatpostbig->id) }}"><img src="{{ asset($sixcatpostbig->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{ URL::to('view/post/'.$sixcatpostbig->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $sixcatpostbig->title_en }}
                                @else
                                {{ $sixcatpostbig->title_ind }}
                                @endif   
                                </a> </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            @foreach($sixcatpostsmall as $row)
                            <div class="image-title">
                                <a href="{{ URL::to('view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $row->title_en }}
                                @else
                                {{ $row->title_ind }}
                                @endif   
                                </a> </h4>
                            </div>

                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- add-start -->	
        @php
            $horizontal = DB::table('advertisements')->where('type',2)->skip(2)->first();
            $horizontal2 = DB::table('advertisements')->where('type',2)->skip(3)->first();
            $horizontal3 = DB::table('advertisements')->where('type',2)->skip(4)->first();
        @endphp
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="add">
                    @if ($horizontal == NULL)

                    @else
                    <a href="{{ $horizontal->link }}" target="_blank"><img src=" {{ asset($horizontal->banner) }}" alt="" /></a> 
                    @endif
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="add">
                    @if ($horizontal2 == NULL)

                    @else
                    <a href="{{ $horizontal2->link }}" target="_blank"><img src=" {{ asset($horizontal2->banner) }}" alt="" /></a> 
                    @endif
                </div>
            </div>
        </div><!-- /.add-close -->	
        
    </div>
</section><!-- /.2nd-news-section-close -->

<!-- 3rd-news-section-start -->	
<section class="news-section">
    <div class="container-fluid">
        <div class="row">
            @php
            $sevencategory = DB::table('categories')->skip(7)->first();
     
     $sevencatpostbig = DB::table('posts')->where('category_id',$sevencategory->id)->where('big_thumbnail',1)->first();
     
     $sevencatpostsmall = DB::table('posts')->where('category_id',$sevencategory->id)->where('big_thumbnail',NULL)->orderBy('id','desc')->limit(3)->get();
     $sevencatpostsmall2 = DB::table('posts')->where('category_id',$sevencategory->id)->where('big_thumbnail',NULL)->skip(3)->orderBy('id','desc')->limit(3)->get();
     @endphp
            <div class="col-md-9 col-sm-9">
                <div class="cetagory-title-02"><a href="{{ URL::to('catpost/'.$sevencategory->id.'/'.$sevencategory->category_en) }}">
                    @if (session()->get('lang') == 'en')
                    {{ $sevencategory->category_en }}
                @else
                {{ $sevencategory->category_ind }}
                
                @endif  
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                     
                     <span><i class="fa fa-plus" aria-hidden="true"></i> 
                        @if (session()->get('lang') == 'en')
                        All News
                    @else
                        Semua Berita
                    
                    @endif  
                    </span></a></div>
                
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="top-news">
                            <a href="{{ URL::to('view/post/'.$sevencatpostbig->id) }}"><img src="{{ asset($sevencatpostbig->image) }}" alt="Notebook"></a>
                            <h4 class="heading-02"><a href="{{ URL::to('view/post/'.$sevencatpostbig->id) }}">
                                @if (session()->get('lang') == 'en')
                                    {{ $sevencatpostbig->title_en }}
                                @else
                                {{ $sevencatpostbig->title_ind }}
                                @endif  
                            </a> </h4>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4">

                        @foreach ($sevencatpostsmall as $row)
                            
                        <div class="image-title">
                            <a href="{{ URL::to('view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                @if (session()->get('lang') == 'en')
                                    {{ $row->title_en }}
                                @else
                                {{ $row->title_ind }}
                                @endif   
                            </a> </h4>
                        </div>

                        @endforeach
                        
                    </div>
                    <div class="col-md-4 col-sm-4">
                        @foreach ($sevencatpostsmall2 as $row)

                        <div class="image-title">
                            <a href="{{ URL::to('view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                            <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                @if (session()->get('lang') == 'en')
                                    {{ $row->title_en }}
                                @else
                                {{ $row->title_ind }}
                                @endif  
                            </a> </h4>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- ******* -->
                <br />

                @php
                $eightcategory = DB::table('categories')->skip(6)->first();
         
         $eightcatpostbig = DB::table('posts')->where('category_id',$eightcategory->id)->where('big_thumbnail',1)->orderBy('id','desc')->first();
         
         $eightcatpostsmall = DB::table('posts')->where('category_id',$eightcategory->id)->where('big_thumbnail',NULL)->orderBy('id','desc')->limit(3)->get();
         $eightcatpostsmall2 = DB::table('posts')->where('category_id',$eightcategory->id)->where('big_thumbnail',NULL)->skip(3)->orderBy('id','desc')->limit(3)->get();
         @endphp
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="cetagory-title-02"><a href="{{ URL::to('catpost/'.$eightcategory->id.'/'.$eightcategory->category_en) }}">
                            @if (session()->get('lang') == 'en')
                            {{ $eightcategory->category_en }}
                        @else
                        {{ $eightcategory->category_ind }}
                        
                        @endif  
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
                                @if (session()->get('lang') == 'en')
                                All Faedah
                            @else
                                Semua Faedah
                            
                            @endif  
                                </span></a></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="bg-gray">
                            <div class="top-news">
                                <a href="{{ URL::to('view/post/'.$eightcatpostbig->id) }}"><img src="{{ asset($eightcatpostbig->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{ URL::to('view/post/'.$eightcatpostbig->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $eightcatpostbig->title_en }}
                                @else
                                {{ $eightcatpostbig->title_ind }}
                                @endif  
                                </a> </h4>
                            </div>
                        </div>
                    </div>
                    
                                            
                    <div class="col-md-4 col-sm-4">
                        @foreach ($eightcatpostsmall as $row)
                        <div class="news-title">
                            <a href="{{ URL::to('view/post/'.$row->id) }}">
                                @if (session()->get('lang') == 'en')
                                {{ $row->title_en }}
                            @else
                            {{ $row->title_ind }}
                            @endif  
                            </a>
                        </div>
                        
                      
                        @endforeach
                    </div>
                    <div class="col-md-4 col-sm-4">
                        @foreach ($eightcatpostsmall2 as $row)
                        <div class="news-title">
                            <a href="#">
                                <a href="{{ URL::to('view/post/'.$row->id) }}">
                                    @if (session()->get('lang') == 'en')
                                    {{ $row->title_en }}
                                @else
                                {{ $row->title_ind }}
                                @endif  
                             </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                

                <br><br>

                <div class="row">

                    @php
                        $prov = DB::table('provinces')->get();
                    @endphp

                    <div class="col-md-12 col-sm-12">
                        <div class="cetagory-title-02"><a href="#">
                            @if (session()->get('lang') == 'en')
                            Search By District
                        @else
                            Cari Berdasarkan Wilayah
                        @endif   
                            <i class="fa fa-angle-right" aria-hidden="true"></i> </a></div>
                            <br>
                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                    

                    <form action="{{ route('search.provinces') }}" method="get">
                        @csrf
                            <div class="row col-md-12 col-sm-12">
                                    <div class="col-lg-4">

                                        <select class="form-control" name="province_id" id="province_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option disabled="" selected=""> --Select Province--  </option>
                              
                                            @foreach ($prov as $row)
                                              <option value="{{ $row->id }}">{{ $row->province_ind }}</option>
                              
                                            @endforeach
                              
                                            @error('province_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                              
                                          </select>
                                        
                                    </div>

                                    <div class="col-lg-4">

                                        <select class="form-control" name="city_id" id="city_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option disabled="" selected=""> --Select City--  </option>
                                          </select>
                                        
                                    </div>

                                    <div class="col-lg-4">

                                        <button class="btn btn-success btn-block">Search</button>
                                        
                                    </div>
                            </div>

                    </form>
                </div>
                
                <br><br>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add">
                            @if ($horizontal3 == NULL)

                    @else
                    <a href="{{ $horizontal3->link }}" target="_blank"><img src=" {{ asset($horizontal3->banner) }}" alt="" /></a> 
                    @endif
                        </div>
                    </div>
                </div><!-- /.add-close -->	


            </div>


            @php
                $latest = DB::table('posts')->orderBy('id','desc')->limit(5)->get();
                $favorite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
                $highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();
            @endphp

            <div class="col-md-3 col-sm-3">
                <div class="tab-header">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">
                            @if (session()->get('lang') == 'ind')
                                Terbaru

                                @else
                                Latest
                                
                                @endif
                        </a></li>
                        <li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">
                            @if (session()->get('lang') == 'ind')
                                Terpopuler

                                @else
                                Popular
                                
                                @endif
                        </a></li>
                        <li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">
                            @if (session()->get('lang') == 'ind')
                                Tertinggi

                                @else
                                Highest
                                
                                @endif
                        </a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content ">
                        <div role="tabpanel" class="tab-pane in active" id="tab21">
                            <div class="news-titletab">

                                @foreach($latest as $row)
                                <div class="news-title-02">
                                    <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                        @if (session()->get('lang') == 'ind')
                                        {{ $row->title_ind }}
        
                                        @else
                                        {{ $row->title_en }}
                                        
                                        @endif
                                    </a> </h4>
                                </div>

                                @endforeach
                                
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab22">
                            <div class="news-titletab">
                                <div class="news-title-02">
                                    <h4 class="heading-03"><a href="#">
                                        @foreach($favorite as $row)
                                        <div class="news-title-02">
                                            <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                                @if (session()->get('lang') == 'ind')
                                                {{ $row->title_ind }}
                
                                                @else
                                                {{ $row->title_en }}
                                                
                                                @endif
                                            </a> </h4>
                                        </div>
        
                                        @endforeach    
                                    </a> </h4>
                                </div>
                                
                            </div>                                          
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab23">	
                            <div class="news-titletab">
                                <div class="news-title-02">
                                    <h4 class="heading-03"><a href="#">
                                        @foreach($highest as $row)
                                        <div class="news-title-02">
                                            <h4 class="heading-03"><a href="{{ URL::to('view/post/'.$row->id) }}">
                                                @if (session()->get('lang') == 'ind')
                                                {{ $row->title_ind }}
                
                                                @else
                                                {{ $row->title_en }}
                                                
                                                @endif
                                            </a> </h4>
                                        </div>
        
                                        @endforeach    
                                    </a> </h4>
                                </div>
                                
                            </div>						                                          
                        </div>
                    </div>
                </div>
                <!-- Namaj Times -->

                @php
                    $prayer = DB::table('prayers')->first();
                @endphp

                <div class="cetagory-title-03">
                    @if (session()->get('lang') == 'ind')
                                Waktu Shalat

                                @else
                                Prayer Time
                                
                                @endif
                    
                
                </div>
                <table class="table">
                    <tr>
                        <th>
                            @if (session()->get('lang') == 'ind')
                            Subuh

                            @else
                            Fajr
                            
                            @endif    
                        </th>
                        <th> {{ $prayer->subuh }}</th>

                    </tr>

                    <tr>
                        <th>
                            @if (session()->get('lang') == 'ind')
                            Dhuhur

                            @else
                            Johor
                            
                            @endif    
                        </th>
                        <th> {{ $prayer->dhuhur }}</th>

                    </tr>

                    <tr>
                        <th>
                            @if (session()->get('lang') == 'ind')
                            Ashar

                            @else
                            Ashor
                            
                            @endif    
                        </th>
                        <th> {{ $prayer->ashar }}</th>

                    </tr>


                    <tr>
                        <th>
                            @if (session()->get('lang') == 'ind')
                            Ashar

                            @else
                            Ashor
                            
                            @endif    
                        </th>
                        <th> {{ $prayer->ashar }}</th>

                    </tr>

                    
                    <tr>
                        <th>
                            @if (session()->get('lang') == 'ind')
                            Maghrib

                            @else
                            Magrib
                            
                            @endif    
                        </th>
                        <th> {{ $prayer->maghrib }}</th>

                    </tr>

                    
                    <tr>
                        <th>
                            @if (session()->get('lang') == 'ind')
                            Isya

                            @else
                            Eaha
                            
                            @endif    
                        </th>
                        <th> {{ $prayer->isya }}</th>

                    </tr>

                    <tr>
                        <th>
                            @if (session()->get('lang') == 'ind')
                            Jum'at

                            @else
                            Jummah
                            
                            @endif    
                        </th>
                        <th> {{ $prayer->jumat }}</th>

                    </tr>
                </table>

                <!-- Namaj Times -->
                <div class="cetagory-title-03">Old News  </div>
                <form action="" method="post">
                    <div class="old-news-date">
                       <input type="text" name="from" placeholder="From Date" required="">
                       <input type="text" name="" placeholder="To Date">			
                    </div>
                    <div class="old-date-button">
                        <input type="submit" value="Search">
                    </div>
               </form>
               <!-- news -->
               <br><br><br><br><br>
               <div class="cetagory-title-04">
                @if (session()->get('lang') == 'ind')
                Sumber Berita

                @else
                Source News
                
                @endif    
                </div>
               <div class="">
                   @php
                       $website = DB::table('websites')->get();
                   @endphp

                   @foreach($website as $row)
                   <div class="news-title-02">
                       <h4 class="heading-03"><a href="{{ $row->website_link }}" target="_blank"><i class="fa fa-link" aria-hidden="true"></i> {{ $row->website_name }}  </a> </h4>
                  
                       @endforeach
               </div>

            </div>
        </div>
    </div>
</section><!-- /.3rd-news-section-close -->









<!-- gallery-section-start -->	
<section class="news-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="gallery_cetagory-title">  
                    <a href="{{ URL::to('poto/gallery') }}" style="color: white;">
                        @if (session()->get('lang') == 'ind')
                        Foto Galeri

                        @else
                        Photo Gallery
                        
                        @endif
                    </a>
                   
                </div>

                @php
                    $photobig = DB::table('photos')->where('type',1)->orderBy('id','desc')->first();
                    $photosmall = DB::table('photos')->where('type',0)->orderBy('id','desc')->limit(5)->get();
                @endphp

                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="photo_screen">
                            <div class="myPhotos" style="width:100%">
                                  <img src="{{ asset($photobig->photo) }}"  alt="Avatar">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        

                        <div class="photo_list_bg">
                            @foreach($photosmall as $row)    
                            <div class="photo_img photo_border active">
                                <img src="{{ asset($row->photo) }}" alt="image" onclick="currentDiv(1)">
                                <div class="heading-03">
                                    {{$row->title}}
                                </div>
                            </div>

                        @endforeach    

                        </div>
                    </div>
                </div>

                <!--=======================================
                Video Gallery clickable jquary  start
            ========================================-->

                        <script>
                                var slideIndex = 1;
                                showDivs(slideIndex);

                                function plusDivs(n) {
                                  showDivs(slideIndex += n);
                                }

                                function currentDiv(n) {
                                  showDivs(slideIndex = n);
                                }

                                function showDivs(n) {
                                  var i;
                                  var x = document.getElementsByClassName("myPhotos");
                                  var dots = document.getElementsByClassName("demo");
                                  if (n > x.length) {slideIndex = 1}
                                  if (n < 1) {slideIndex = x.length}
                                  for (i = 0; i < x.length; i++) {
                                     x[i].style.display = "none";
                                  }
                                  for (i = 0; i < dots.length; i++) {
                                     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                                  }
                                  x[slideIndex-1].style.display = "block";
                                  dots[slideIndex-1].className += " w3-opacity-off";
                                }
                            </script>

            <!--=======================================
                Video Gallery clickable  jquary  close
            =========================================-->

            </div>
            <div class="col-md-4 col-sm-5">
                <div class="gallery_cetagory-title"> 
                    <a href="{{ URL::to('pidio/gallery') }}" style="color: white;">
                    @if (session()->get('lang') == 'ind')
                    Video Galeri

                    @else
                    VIdeo Gallery
                    
                    @endif
                    </a>
                </div>


                @php
                    $videobig = DB::table('videos')->where('type',1)->orderBy('id','desc')->first();
                    $videosmall = DB::table('videos')->where('type',0)->orderBy('id','desc')->limit(4)->get();
                @endphp

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="video_screen">
                            <div class="myVideos" style="width:100%">
                                <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                <iframe width="853" height="480" src="https://www.youtube.com/embed/{{ $videobig->embed_code }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    
                        <div class="gallery_sec owl-carousel">
                                @foreach($videosmall as $row)
                                    
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                    <iframe width="853" height="480" src="https://www.youtube.com/embed/{{ $row->embed_code }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                            </div>

                            @endforeach

                            

                        </div>
                    </div>
                </div>


                <script>
                    var slideIndex = 1;
                    showDivss(slideIndex);

                    function plusDivs(n) {
                      showDivss(slideIndex += n);
                    }

                    function currentDivs(n) {
                      showDivss(slideIndex = n);
                    }

                    function showDivss(n) {
                      var i;
                      var x = document.getElementsByClassName("myVideos");
                      var dots = document.getElementsByClassName("demo");
                      if (n > x.length) {slideIndex = 1}
                      if (n < 1) {slideIndex = x.length}
                      for (i = 0; i < x.length; i++) {
                         x[i].style.display = "none";
                      }
                      for (i = 0; i < dots.length; i++) {
                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                      }
                      x[slideIndex-1].style.display = "block";
                      dots[slideIndex-1].className += " w3-opacity-off";
                    }
                </script>

            </div>
        </div>
    </div>
</section><!-- /.gallery-section-close -->



<script type="text/javascript">
    $(document).ready(function() {
          $('select[name="province_id"]').on('change', function(){
              var province_id = $(this).val();
              if(province_id) {
                  $.ajax({
                      url: "{{  url('/get/city/frontend') }}/"+province_id,
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