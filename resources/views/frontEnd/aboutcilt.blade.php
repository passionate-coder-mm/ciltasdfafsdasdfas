@extends('frontEnd.front_layout')
@section('ab','active')
@section('title', 'CILT | Aboutcilt ')
@section('frntcontent')
<section class="section-banner-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-banner-content">
                    <h3>About CILT</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="core-value-area section-padding">
    <div class="container">
        <div class="row"><div class="col-sm-12"><h2 class="section-title">{{$coreValues->title}}</h2></div></div>
        <div class="row">
            <div class="col-sm-12">
                <div class="core-value-content">
                    <p>{{$coreValues->description}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="who-we-are-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                <div class="who-img-wrap" style="background: url({{$abtWhoweare->image}})">
                        <!--<div class="who-we-img">-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="who-we-content">
                        <h3>{{$abtWhoweare->title}}</h3>
    
                        <div class="who-img-wrap visible-xs" style="background: url({{$abtWhoweare->image}})">
                            <!--<div class="who-we-img">-->
                            <!--</div>-->
                        </div>
    
                        <div class="who-we-text">
                            <p>{{$abtWhoweare->description}} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
            <div class="row"><div class="col-sm-12"><h2 class="section-title">What We Do?</h2></div></div>
            <div class="row">
                <div class="col-sm-12 what-we-do-wrap">
                    @foreach($Whatdo as $do)
                    <div class="single-ww-do"><i class="fas fa-link"></i>{{$do->title}}</div>
                    @endforeach
    
                </div>
            </div>
        </div>
    </section>
<section class="who-we-are-area why-join-with-us section-padding">
<div class="container">
<div class="row">
    <div class="col-sm-6">
        <div class="who-we-content">
            @php 
             $description = json_decode($whyJoin->description);
             $i = 0;
            @endphp
            <h3>{{$whyJoin->title}}</h3>

            <div class="who-img-wrap visible-xs" style="background: url({{$whyJoin->image}})">
                <div class="who-we-img">
                </div>
            </div>

            <div class="who-we-text">
                @foreach( $description as $val)
                <p><i class="fas fa-angle-right"></i>{{$val->description}}</p>
                @endforeach
                <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Now</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 hidden-xs">
        <div class="who-img-wrap" style="background: url({{$whyJoin->image}})">
            <div class="who-we-img">
            </div>
        </div>
    </div>
</div>
</div>
</section>
<section class="about-partner-area section-padding">
<div class="container">
    <div class="row"><div class="col-sm-12"><h2 class="section-title">Our Partners</h2></div></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="about-partner-box">
                @foreach($partners as $partner)
                <div class="single-partner"><img src="{{$partner->image}}" alt="partner-img"></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</section>
<section class="history-area section-padding">
    <div class="container">
        <div class="row"><div class="col-sm-12"><h2 class="section-title">Our History</h2></div></div>
        <div class="row">
            <div class="col-sm-12">
                @php
                    $history = json_decode($ourhistory->history);
                    $i = 0;
                  @endphp
                <div class="history-wrap text-center">
                    <img src="{{$ourhistory->image}}" alt="History">
                   
                    <div class="entries">
                     @foreach($history as $val)
                        <div class="entry">
                            <div class="title">{{$val->year}}</div>
                            <div class="body">
                            <p>{{$val->cltihistory}}</p>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                                            
    
    
@endsection