@extends('frontEnd.front_layout')
@section('ed','active')
@section('title', 'CILT |Education Download')
@section('frntcontent')
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>Download Centre</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- membership-overview Area Start-->
    <section class="core-value-area membership-overview section-padding">
        <div class="container">
            <div class="row"><div class="col-sm-12"><h2 class="section-title">{{$download->title}}</h2></div></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="core-value-content">
                        {!!$download->description!!}
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- membership-overview Area End-->
    
    <!-- Download Center Area Start-->
    <section class="download-center-area section-padding">
        <div class="container">
            <div class="row">
                @foreach($alldownload as $download)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="download-box">
                        <h4>{{$download->title}}</h4>
                     <p>{!!$download->description!!}</p>
                        <a href="{{$download->image}}" target="blank" class="cilt-button">Download Now</a>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="download-box">
                        <h4>Download Title here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis debitis eaque facere libero magnam molestiae mollitia nisi voluptate voluptatum.</p>
                        <a href="#" class="cilt-button">Download Now</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="download-box">
                        <h4>Download Title here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis debitis eaque facere libero magnam molestiae mollitia nisi voluptate voluptatum.</p>
                        <a href="#" class="cilt-button">Download Now</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="download-box">
                        <h4>Download Title here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis debitis eaque facere libero magnam molestiae mollitia nisi voluptate voluptatum.</p>
                        <a href="#" class="cilt-button">Download Now</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    
@endsection