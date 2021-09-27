@extends('main.home_master')
@section('title')

@if (session()->get('lang') == 'en')
Video Gallery
@else
Video Galeri
@endif

@endsection


@section('content')


<section class="single_section">           		
    <div class="container-fluid">						
         <div class="row">
            <div class="col-md-12 col-sm-12" >
                <header class="headline-header margin-bottom-10">
                    <h1 class="headline" >
                        @if (session()->get('lang') == 'en')
                        Video Gallery
                        @else
                        Video Galeri
                
                @endif
                    </h1>
                </header>
                <br>
            </div>
            @foreach($videos as $row)
            <div class="col-md-4 col-sm-4">
                
                <div class="photo" style="height: 330px;">
                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                        <iframe width="729" height="410" src="https://www.youtube.com/embed/{{ $row->embed_code }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
                    </div>
                    <div class="photo_title">
                        {{ $row->title }}
                    </div>
                </div>
            </div>

            @endforeach
            
            
        </div>			
        <div class="row"> 


             <div class="col-md-12 options">

                <!-- pagination here -->

            
            </div>
        </div>
        <!-- /.options -->  
    </div>
</section>
@endsection

