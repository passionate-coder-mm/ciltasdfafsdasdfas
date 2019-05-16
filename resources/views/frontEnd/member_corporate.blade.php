@extends('frontEnd.front_layout')
@section('mm','active')
@section('title', 'CILT | Member Corporate ')
@section('frntcontent')
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>Membership - Corporate Membership</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- membership-overview Area Start-->
    <section class="core-value-area wilat-overview corporate-overview-area section-padding">
        <div class="container">
            <div class="row"><div class="col-sm-12"><h2 class="section-title">{{$corporateover->title}}</h2></div></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="core-value-content">
                        <p>{!!$corporateover->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- membership-overview Area End-->
    
    <!-- wilat-strength-quotearea Area Start-->
    <section class="wilat-strength-quote corporate-strength-quote-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="who-img-wrap" style="background: rgba(0, 0, 0, 0) url({{$corporatemid->image}}) no-repeat scroll 0 0;">
                        <div class="who-we-img">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="who-we-content">
                    <p><i class="fas fa-quote-left"></i>{!!strip_tags($corporatemid->description)!!}</span><i class="fas fa-quote-right"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wilat-strength-quote area Area End-->
    
    <!-- WILAT join now Area Start-->
    <section class="wilat-join-now-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wilat-join-box text-center">
                        {!!$corporatemid->title!!}
                    <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Corporate Membership</a>
                </div>
            </div>
        </div>
    </section>
    <!-- WILAT join now Area End-->
    
    <!-- membership-corporate-advantage Start-->
    <section class="membership-corporate-advantage section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="who-we-content">
                        <h3>{{$cpmembers->title}}</h3>
                        <div class="who-we-text">
                                @php
                                $alladvantage = json_decode($cpmembers->description);
                              @endphp
                            @foreach($alladvantage as $val)
                            <p><i class="fas fa-angle-right"></i>{!!$val->advantage!!} </p>
                            @endforeach
                            {{-- <p><i class="fas fa-angle-right"></i>Networking: Great way for keeping your business networking opportunities open for new partnership. </p>
                            <p><i class="fas fa-angle-right"></i>Aspire: Smart employees make for a smarter organization. We can assist in developing your employee’s skill set through continuous professional development.</p>
                            <p><i class="fas fa-angle-right"></i>Innovate: With all updated information on global/local trends, market insight, research data, your organization or business will be at the front of innovative breakthrough opportunities. </p> --}}
                            <a href="frontEnd\ApplicationForm.pdf" class="cilt-button golden-button">Join corporate Membership</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="who-img-wrap" style="background: url({{$cpmembers->image}})">
                        <div class="who-we-img">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="corporate-advantage-extra-text">
                        <!--<p><img src="img/arrow-down.png" alt="arrow-down">These advantages are all cost-effective ways of increasing productivity and profit.<br>-->
                        <p>{!!$cpmembers->bottomdescription!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection