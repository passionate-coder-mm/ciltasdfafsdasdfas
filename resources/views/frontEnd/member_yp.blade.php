@extends('frontEnd.front_layout')
@section('mm','active')
@section('title', 'CILT | Member YP ')
@section('frntcontent')
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>Membership - Young Professionals</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- membership-overview Area Start-->
    <section class="core-value-area wilat-overview section-padding">
        <div class="container">
            <!--<div class="row"><div class="col-sm-12"><h2 class="section-title">Young Professionals Overview</h2></div></div>-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="core-value-content">
                    <p><i class="fas fa-quote-left"></i>{!!$yptop->title!!}<i class="fas fa-quote-right"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- membership-overview Area End-->
    
    <!-- wilat-strength-quotearea Area Start-->
    <section class="young-professionals-strength-quote-area section-padding" >
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <div class="who-img-wrap" style="background: rgba(0, 0, 0, 0) url({{$yptop->image}}) no-repeat scroll 0 0;">
                        <div class="who-we-img">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="who-we-content" >
                        <p><i class="fas fa-quote-left"></i>{!!strip_tags($yptop->description)!!}<i class="fas fa-quote-right"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wilat-strength-quote area Area End-->
    
    <!-- WILAT join now Area Start-->
    <section class="wilat-join-now-area why-join-wp-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wilat-join-box text-center">
                    <h3>{{$ypwoverview->title}}</h3><br>
                    {!!$ypwoverview->description!!}<br>
                    <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Young Professionals</a>
                </div>
            </div>
        </div>
    </section>
    <!-- WILAT join now Area End-->
    
    <!-- young-professionals-benefits-area Start-->
    <section class="young-professionals-benefits-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="who-we-content">
                        <h3>{{$ypbenifits->title}}</h3>
                        {{-- visible-xs --}}
                       <div class="who-img-wrap visible-xs " style="background: rgba(0, 0, 0, 0) url({{$ypbenifits->image}}) no-repeat scroll 0 0; ">
                            <div class="who-we-img">
                            </div>
                        </div>
    
                        <div class="who-we-text">
                                @php
                                $allypbenifits = json_decode($ypbenifits->description);
                              @endphp
                          @foreach($allypbenifits as $val)
                        <p><i class="fas fa-angle-right"></i>{{$val->benifit}}</p>
                            @endforeach
                            <a href="frontEnd\ApplicationForm.pdf" class="cilt-button golden-button">Join Young Professionals Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="who-img-wrap" style="background: rgba(0, 0, 0, 0) url({{$ypbenifits->image}}) no-repeat scroll 0 0; ">
                        <div class="who-we-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- young-professionals-benefits-area End-->
    
    <!-- Young Professional Regional Man Area Start-->
    <section class="wilat-regional-women-area yp-regional-man-area yp-bangladeshi-forum section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Young Professionals Bangladeshi Forum</h2>
                    <p class=""><i class="fas fa-quote-left"></i>If We work Together<span>everything is possible.</span><i class="fas fa-quote-right"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="wilat-regional-wrap">
                        <div class="wilat-all-women-list text-center">
                            @foreach($ypbdfourums as $bdforum)
                            <div class="single-partner">
                                <img alt="partner-img" src="{{$bdforum->image}}">
                                <div class="team-contact">
                                    <h4>{{$bdforum->name}}</h4>
                                    <h5>{{$bdforum->designation}} </h5>
                                    <h6>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:YP@ciltinternational.org">{{$bdforum->email}}</a>
                                    </h6>
                                    <h5>{{$bdforum->country}}</h5>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Young Professional Regional Man Area End-->
    
    <!-- Young Professional Regional Man Area Start-->
    <section class="wilat-regional-women-area yp-regional-man-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Young Professionals Regional Forum</h2>
                    <p class=""><i class="fas fa-quote-left"></i>If We work Together<span>everything is possible.</span><i class="fas fa-quote-right"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="wilat-regional-wrap">
                        <div class="wilat-all-women-list text-center">
                            @foreach($yprgfourums as $rgforum)
                            <div class="single-partner">
                                <img alt="partner-img" src="{{ $rgforum->image}}">
                                <div class="team-contact">
                                    <h4>{{ $rgforum->name}}</h4>
                                    <h5>{{ $rgforum->designation}} </h5>
                                    <h6>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:YP@ciltinternational.org">{{ $rgforum->email}}</a>
                                    </h6>
                                    <h5> {{$rgforum->country}}</h5>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Young Professional Regional Man Area End-->
    
    <!--Brouchure Area Start-->
    <section class="why-join-with-us brouchure-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <div class="who-img-wrap" style="background:
                        url('{{$ypbroucher->image}}')">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="who-we-content">
                        <h3>{{$ypbroucher->title}}</h3>
    
                        <div class="who-img-wrap visible-xs" style="background:
                        url({{$ypbroucher->iamge}}) no-repeat scroll 0 0;">
                        </div>
                        <div class="who-we-text">
                            @php
                            $ypdescription = json_decode($ypbroucher->description);
                            
                            @endphp
                            @foreach($ypdescription as $val)
                            <p><i class="fas fa-angle-right"></i>{!!$val->description!!}</p>
                            @endforeach
                            <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brouchure Area End-->
    
    <!-- WILAT join now Area Start-->
    <section class="wilat-join-now-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wilat-join-box text-center">
                   {{$joinwilet->title}}
                    <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Young Professionals</a>
                </div>
            </div>
        </div>
    </section>
    <!-- WILAT join now Area End-->
    
    <!-- Young Professional -groups-lists-area Start-->
    <section class="wilat-groups-lists-area young-professionals-group-lists-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="who-we-content">
                        <h3>{{$ypgroup->title}}</h3>
    
                    <div class="who-img-wrap visible-xs" style="background: rgba(0, 0, 0, 0) url({{$ypgroup->image}}) no-repeat scroll 0 0;
                        ">
                            <div class="who-we-img">
                            </div>
                        </div>
                        @php
                        $allypgroup = json_decode($ypgroup->description);
                      @endphp
                        <div class="who-we-text">
                          @foreach($allypgroup as $val)
                          <p><i class="fas fa-angle-right"></i>{{$val->title}}: <a href="{{$val->link}}">{!!$val->conduct!!}</a></p>
                            {{-- <p><i class="fas fa-angle-right"></i>{!!strip_tags()!!}</p> --}}
                            @endforeach
                            {{-- <p><i class="fas fa-angle-right"></i>Ghana: <a href="mailto:nlaliban@gmail.com">nlaliban@gmail.com</a></p>
                            <p><i class="fas fa-angle-right"></i>Mauritius: <a href="mailto:sundeep.ruchchan@gmail.com">sundeep.ruchchan@gmail.com</a></p>
                            <p><i class="fas fa-angle-right"></i>Nigeria: <a href="mailto:usmanshuaib2000@yahoo.com">usmanshuaib2000@yahoo.com</a></p> --}}
                            <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Young Professionals Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="who-img-wrap" style="background: rgba(0, 0, 0, 0) url({{$ypgroup->image}}) no-repeat scroll 0 0;
                    ">
                        <div class="who-we-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Young Professional -groups-lists-area End-->
    
@endsection