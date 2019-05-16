@extends('frontEnd.front_layout')
@section('ed','active')
@section('title', 'CILT |Education Knowledge')
@section('frntcontent')
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>Knowledge Centre</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- membership-overview Area Start-->
    <section class="knowledge-centre-overview core-value-area membership-overview section-padding">
        <div class="container">
            <div class="row"><div class="col-sm-12"><h2 class="section-title">{{$konwledgeTop->title}}</h2></div></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="core-value-content">
                    <p style="font-style: normal;">{!!$konwledgeTop->description!!}</a>
                        </p>
                        <a href="/frontEnd/ApplicationForm.pdf" class="cilt-button">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- membership-overview Area End-->
    
    <!-- Knowledge centre Area Start-->
    <section class="cilt-knowledge-area section-padding">
        <div class="container">
            <div class="row">
    
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="who-we-content">
                            <h3>{{$logistic->title}}</h3>
                            <div class="who-we-text">
                            <p>{!!$logistic->description!!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="knowldege-video">
                            <iframe width="560" height="315" src="{{$logistic->videolink}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    
    
                            {{-- <div class="embed-video" data-source="youtube" data-video-url="https://www.youtube.com/watch?v=rX74LihpcnQ" data-cc-policy="1"></div> --}}
    
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <!-- Knowledge centre Area End-->
    
    <!--Brouchure Area Start-->
    <section class="why-join-with-us brouchure-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <div class="who-img-wrap" style="background:
                         url({{$broucher->image}}) no-repeat scroll 0 0;">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="who-we-content">
                        <h3>{{$broucher->title}}</h3>
    
                        <div class="who-img-wrap visible-xs" style="background:
                        url({{$broucher->image}}) no-repeat scroll 0 0;">
                        </div>
                        <div class="who-we-text">
                                @php
                                $description = json_decode($broucher->description);
                                 
                                @endphp
                             @foreach($description as $val)
                            <p><i class="fas fa-angle-right"></i>{!!$val->description!!}</p>
                            @endforeach
                            {{-- <p><i class="fas fa-angle-right"></i>Dummy content Act responsibly to secure the welfare,
                                health and safety of</p>
                            <p><i class="fas fa-angle-right"></i>Dummy Content Continue their professional development
                                throughout their careers</p> --}}
                            <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection