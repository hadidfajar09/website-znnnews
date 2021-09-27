@extends('main.home_master')

@section('title')
@if (session()->get('lang') == 'en')
{{ $post->title_en }}
@else
{{ $post->title_ind }}
@endif
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


<section class="single-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">   
                   <li><a href="{{ URL::to('/')}}"><i class="fa fa-home"></i></a></li>					   
                    <li><a href="#">
                        @if (session()->get('lang') == 'en')
                    {{ $post->category_en }}
                @else
                {{ $post->category_ind }}
                
                @endif
                    </a></li>
                    <li><a href="#">
                        @if (session()->get('lang') == 'en')
                        {{ $post->subCategory_en }}
                @else
                {{ $post->subCategory_ind }}
                
                @endif
                    </a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12"> 											
                <header class="headline-header margin-bottom-10">
                    <h1 class="headline">
                        @if (session()->get('lang') == 'en')
                        {{ $post->title_en }}
                @else
                {{ $post->title_ind }}
                
                @endif
                    </h1>
                </header>
     
     
             <div class="article-info margin-bottom-20">
              <div class="row">
                    <div class="col-md-6 col-sm-6"> 
                     <ul class="list-inline">
                     
                     
                     <li>
                        {{ $post->name }}     
                    </li>     <li><i class="fa fa-clock-o"></i> {{ $post->post_date }} </li>
                     </ul>
                    
                    </div>
                    <div class="col-md-6 col-sm-6 pull-right"> 						
                    </div>						
                </div>				 
             </div>				
        </div>
      </div>
      <!-- ******** -->
      <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="single-news">
                <img src="{{ asset($post->image) }}" alt="" />
                
                <h4 class="caption"> 
                    @if (session()->get('lang') == 'en')
                    {{ $post->title_en }}
            @else
            {{ $post->title_ind }}
            
            @endif    
                </h4>
                <div class="sharethis-inline-share-buttons" style="float: right;"></div>
                <br><br>
                <p> 

                    @if (session()->get('lang') == 'en')
            {!! $post->details_en !!}
            @else
            {!! $post->details_ind !!}
            
            @endif    
                </p>
            </div>
            <br><br>
            <!-- ********* -->

            <div class="sharethis-inline-share-buttons"></div>
            <br>

            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v12.0" nonce="2dyFZzMC"></script>

<div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>



            @php
                $more = DB::table('posts')->where('category_id',$post->category_id)->orderBy('id','desc')->limit(6)->get();
            @endphp
<br>

            <div class="row">
                <div class="col-md-12"><h2 class="heading">
                    @if (session()->get('lang') == 'en')
                        Related News
                    @else
                    Berita Terkait
                    
                    @endif    
                </h2>
            <br>
            </div>


                @foreach($more as $row)
                <div class="col-md-4 col-sm-4" style="height: 300px;">
                    <div class="top-news sng-border-btm">
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


            
        </div>

        <div class="col-md-4 col-sm-4">
            @php
                  $vertical = DB::table('advertisements')->where('type',1)->skip(2)->first();
                  $vertical2 = DB::table('advertisements')->where('type',1)->skip(3)->first();
            @endphp
            <!-- add-start -->	
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
            <div class="tab-header">
                <!-- Nav tabs -->
                @php
                $latest = DB::table('posts')->orderBy('id','desc')->limit(8)->get();
                $favorite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(8)->get();
                $highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(8)->get();
            @endphp
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
            <!-- add-start -->	
            
                <div class="row">
                    <div class="col-md-12 col-sm-12">
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
</section>
@endsection