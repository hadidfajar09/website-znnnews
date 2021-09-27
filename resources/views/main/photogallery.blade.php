@extends('main.home_master')
@section('title')

@if (session()->get('lang') == 'en')
Photo Gallery
@else
Foto Galeri
@endif

@endsection


@section('content')

@php
$photosmall = DB::table('photos')->orderBy('id','desc')->get();
@endphp
<section class="single_section">           		
    <div class="container-fluid">						
         <div class="row">
            <div class="col-md-12 col-sm-12" >
                <header class="headline-header margin-bottom-10">
                    <h1 class="headline" >
                        @if (session()->get('lang') == 'en')
                        Photo Gallery
                @else
                Foto Galeri
                
                @endif
                    </h1>
                </header>
                <br>
            </div>
            @foreach($photos as $row)
            <div class="col-md-4 col-sm-4">
                
                <div class="photo" style="height: 300px;">
                    <a href="#"><img src="{{ asset($row->photo) }}" alt="" /></a>
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

