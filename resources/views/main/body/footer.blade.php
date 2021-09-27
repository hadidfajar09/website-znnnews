@php
    $social = DB::table('socials')->first();
@endphp
<section>
    <div class="container-fluid">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="foot-logo">
                        <img src="{{ asset('frontend/assets/img/web.PNG') }}" style="height: 50px;" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                     <div class="social">
                        <ul>
                            <li><a href="{{ $social->facebook }}" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $social->twitter }}" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $social->instagram }}" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $social->github }}" target="_blank" class="android"> <i class="fa fa-github"></i></a></li>
                            <li><a href="{{ $social->linkedin }}" target="_blank" class="linkedin"> <i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ $social->youtube }}" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="apps-img">
                        <ul>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/apps-01.png') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/apps-02.png') }}" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.top-footer-close -->


@php
    $websetting = DB::table('websettings')->first();
@endphp
<!-- middle-footer-start -->	
<section class="middle-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="editor-one">
                    Company Address: 
                    <br>
                    @if (session()->get('lang') == 'en')
                    {!! $websetting->address_en !!}

                    @else
                    {!! $websetting->address_ind !!}
                    
                    @endif
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="editor-two">
                    Company Phone: 
                    <br>
                    {{ $websetting->phone }}
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="editor-three">
                    Company Email: 
                    <br>
                    {{ $websetting->email }}
                </div>
            </div>
        </div>
    </div>
</section><!-- /.middle-footer-close -->

<!-- bottom-footer-start -->	
<section class="bottom-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="copyright">						
                    All rights reserved © 2021 ZeroNineNews
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="btm-foot-menu">
                    <ul>
                        <li><a href="#">About US</a></li>
                        <li><a href="#">Contact US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>