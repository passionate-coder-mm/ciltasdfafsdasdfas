@extends('frontEnd.front_layout')
@section('mm','active')
@section('title', 'CILT | Member Wilet ')
@section('frntcontent')
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>Membership - Women in Logistics and Transport</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- membership-overview Area Start-->
    <section class="core-value-area wilat-overview section-padding">
        <div class="container">
            <!--<div class="row"><div class="col-sm-12"><h2 class="section-title">WiLAT Overview</h2></div></div>-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="core-value-content">
                        <img src="{{$women->image}}" alt="wilat">
                    <p>{!!$women->description!!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- membership-overview Area End-->
    
    <!-- What We Do Area Start-->
    <section class="what-we-do-area wilat-all-widget section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 what-we-do-wrap wilat-do-wrap">
                    @foreach($missions as $mission)
                    <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="single-ww-do"><h4>{{$mission->title}}</h4><p>{!!$mission->description!!}</p></div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do Area End-->
    
    <!-- WILAT join now Area Start-->
    <section class="wilat-join-now-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wilat-join-box text-center">
                        {{$joinwilet->title}}
                    <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join WiLAT</a>
                </div>
            </div>
        </div>
    </section>
    <!-- WILAT join now Area End-->
    
    <!-- wilat-strength-quotearea Area Start-->
    <section class="who-we-are-area  wilat-strength-quote section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="who-img-wrap" style="background:url({{$joinwilet->image}})">
                        <div class="who-we-img">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="who-we-content">
                    <p><i class="fas fa-quote-left"></i>{!!strip_tags($joinwilet->description)!!}<i class="fas fa-quote-right"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wilat-strength-quote area Area End-->
    
    <!-- Why Join With Us Area Start-->
    <section class="wilat-regional-women-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">WiLAT Regional Forum</h2>
                    <p class=""><i class="fas fa-quote-left"></i>No country can truly develop if half its population is left behind” Justine Greening UK Development Secretary <i class="fas fa-quote-right"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="wilat-regional-wrap">
                        <div class="wilat-all-women-list text-center">
                            @foreach($rgfourums as $rgmember)
                            <div class="single-partner">
                                <img alt="partner-img" src="{{$rgmember->image}}">
                                <div class="team-contact">
                                    <h4>{{$rgmember->name}}</h4>
                                    <h5>{{$rgmember->designation}}</h5>
                                    <h6>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:wilat.global@ciltinternational.org">{{$rgmember->email}}</a>
                                    </h6>
                                    <h5>{{$rgmember->country}}</h5>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="single-partner">
                                <img alt="partner-img" src="img/membership-img/wilat-Dorothy-Chan-300x300.jpg">
                                <div class="team-contact">
                                    <h4>Dr. Dorothy T.F. Chan</h4>
                                    <h5>Global Advisor</h5>
                                    <h6>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:dorothy.chan@hkuspace.hku.hk">dorothy.chan@hkuspace.hku.hk</a>
                                    </h6>
                                    <h5>Hong Kong</h5>
                                </div>
                            </div>
                            <div class="single-partner">
                                <img alt="partner-img" src="img/membership-img/wilat-Alice.jpg">
                                <div class="team-contact">
                                    <h4>Alice Yip</h4>
                                    <h5>Regional Co-ordinator East Asia</h5>
                                    <h6>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:wilat.east-asia@ciltinternational.org">wilat.east-asia@ciltinternational.org</a>
                                    </h6>
                                    <h5>Hong Kong</h5>
                                </div>
                            </div>
                            <div class="single-partner">
                                <img alt="partner-img" src="img/membership-img/wilat-Namalie-300x300.jpg">
                                <div class="team-contact">
                                    <h4>Namalie Siyambalapitiya</h4>
                                    <h5>Regional Co-ordinator South Asia</h5>
                                    <h6>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:wilat.southasia@ciltinternational.org">wilat.southasia@ciltinternational.org</a>
                                    </h6>
                                    <h5>Sri Lanka</h5>
                                </div>
                            </div> --}}
                            {{-- <div class="single-partner">
                                <img alt="partner-img" src="img/membership-img/wilat-Dr-Doreen-300x300.jpg">
                                <div class="team-contact">
                                    <h4>Dr Doreen Owusu-Fianko</h4>
                                    <h5>Regional Co-ordinator Africa</h5>
                                    <h6>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:doreenaa15@gmail.com">doreenaa15@gmail.com</a>
                                    </h6>
                                    <h5>Ghana</h5>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Join With Us Area End-->
    
    <!-- Why Join With Us Area Start-->
    <section class="wilat-regional-women-area wilat-bangladeshi-forum section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">WiLAT Bangldeshi Forum</h2>
                    <p class=""><i class="fas fa-quote-left"></i>No country can truly develop if half its population is left behind” Justine Greening UK Development Secretary <i class="fas fa-quote-right"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="wilat-regional-wrap">
                        <div class="wilat-all-women-list text-center">
                            @foreach($bdfourums as $bdmem)
                            <div class="single-partner">
                                <img alt="partner-img" src="{{$bdmem->image}}">
                                <div class="team-contact">
                                    <h4>{{$bdmem->name}}</h4>
                                    <h5>{{$bdmem->designation}} </h5>
                                    <h6>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:wilat.global@ciltinternational.org">{{$bdmem->email}}</a>
                                    </h6>
                                    <h5>{{$bdmem->country}}</h5>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Join With Us Area End-->
    
    <!--Brouchure Area Start-->
    <section class="why-join-with-us brouchure-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <div class="who-img-wrap" style="background:
                        url({{$broucher->image}})">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="who-we-content">
                        <h3>{{$broucher->title}}</h3>
    
                    <div class="who-img-wrap visible-xs" style="background:url({{$broucher->image}})">
                        </div>
                        <div class="who-we-text">
                                @php
                                $description = json_decode($broucher->description);
                                  
                                @endphp
                                @foreach($description as $val)
                                <p><i class="fas fa-angle-right"></i>{{$val->description}}</p>
                            @endforeach 
                            <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brouchure Area End-->
    
    <!-- wilat-groups-lists-area Start-->
    <section class="wilat-groups-lists-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="who-we-content">
                        <h3>{{$group->title}}</h3>
    
                    <div class="who-img-wrap visible-xs" style="background:url({{$group->image}})">
                            <div class="who-we-img">
                            </div>
                        </div>
    
                        <div class="who-we-text">
                                @php
                                $allgroup = json_decode($group->description);
                              @endphp
                              @foreach($allgroup as $val)
                              <p><i class="fas fa-angle-right"></i>{{$val->title}}: <a href="{{$val->link}}">{!!$val->conduct!!}</a></p>
                            @endforeach
                            <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join WiLat Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                <div class="who-img-wrap"  style="background:url({{$group->image}})">
                        <div class="who-we-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wilat-groups-lists-area End-->
    
@endsection