@extends('frontEnd.front_layout')
@section('hm','active')
@section('title', 'CILT | Home ')
@section('frntcontent')
@php
use Carbon\Carbon;
@endphp
<section class="slider_area">
<div class="container-fluid">
    <div class="row slider_wrapper">
        <div class="main_slider">
            <!-- Wrapper for slides -->
            @foreach($allslider as $slider)
            <figure class="item">
                <figcaption class="caption">
                    <h1 class="fadeInDown_slide animated" style="animation-delay: .2s">{{$slider->title}}</h1>
                <h2 class="fadeInDown_slide animated" style="animation-delay: .2s">{{$slider->description}}</h2>
                    <!--<a href="about.html" class="slide-button">Know More</a>-->
                </figcaption>
                <img alt="slider" src="{{url('/'.$slider->image)}}">
            </figure>
            @endforeach
        </div>
        <div class="mainslider_nav">
            <i class="fa fa-angle-left testi_prev"></i>
            <i class="fa fa-angle-right testi_next"></i>
        </div>
    </div>
</div>
</section>
<section class="strength-area section-padding">
    <div class="container">
        <div class="row"><div class="col-sm-12"><h2 class="section-title">Stronger Together</h2></div></div>
        <div class="row">
            <div class="col-sm-12 home-strength-box">
                <div class="home-single-strength"><img src="{{asset('frontEnd/img/strength-img/activetravelhover.png')}}" alt="stronger"></div>
                <div class="home-single-strength"><img src="{{asset('frontEnd/img/strength-img/Aviation.png')}}" alt="stronger"></div>
                <div class="home-single-strength"><img src="{{asset('frontEnd/img/strength-img/bus.png')}}" alt="stronger"></div>
                <div class="home-single-strength"><img src="{{asset('frontEnd/img/strength-img/freight.png')}}" alt="stronger"></div>
                <div class="home-single-strength"><img src="{{asset('frontEnd/img/strength-img/logsupchain.png')}}" alt="stronger"></div>
                <div class="home-single-strength"><img src="{{asset('frontEnd/img/strength-img/opsman.png')}}" alt="stronger"></div>
                <div class="home-single-strength"><img src="{{asset('frontEnd/img/strength-img/ports.png')}}" alt="stronger"></div>
                <div class="home-single-strength"><img src="{{asset('frontEnd/img/strength-img/Rail.png')}}" alt="stronger"></div>
                <div class="home-single-strength"><img src="{{asset('frontEnd/img/strength-img/transplan.png')}}" alt="stronger"></div>
            </div>
        </div>
    </div>
</section>
<section class="home-about-area section-padding" style="background: #fff url({{$ciltbangladesh_info->image}}) no-repeat scroll 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-about-cilt-bd">
                        <h3>{{$ciltbangladesh_info->title}}</h3>
                        <p>{{$ciltbangladesh_info->description}} </p>
                        <a href="{{url('/about-cilt')}}" class="cilt-button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="single-every-part-area section-padding">
            <div class="container">
                <div class="row">
                    @foreach($allCltibdbottom as $cltibottom)
                    <div class="col-sm-3">
                        <div class="home-single-every-block">
                            <a href="{{url('/'.$cltibottom->link)}}">
                                <img src="{{url('/'.$cltibottom->image)}}" alt="knowledge">
                                <h4>{{$cltibottom->title}}</h4>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
<section class="home-young-wilat-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="home-young-part">
                        {{-- <img src="{{url($allprofessionalinfo1->image)}}" alt="wilat"> --}}
                        <h3>{{$allprofessionalinfo1->title}}</h3>
                        <p>{{$allprofessionalinfo1->description}} </p>
                        <a href="{{url('/member-yp')}}" class="button-hover-active">Know More</a>
                        <a href="frontEnd\ApplicationForm.pdf" class="button-hover-active">Join Today</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="home-young-part home-wilat-part">
                        <img src="{{url($allprofessionalinfo2->image)}}" alt="wilat">
                        <h3>{{$allprofessionalinfo2->title}}</h3>
                        <p>{{$allprofessionalinfo2->description}} </p>                        
                        <a href="{{url('/member-wilet')}}" class="cilt-button">Know More</a>
                        <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>News</h3>
                        <div class="news_carousel">
                            @foreach($newsList as $news)
                            <div class="item">
                                <div class="single-news">
                                    <div class="single-news-img"><a href="{{url('single-news/'.$news->id)}}"><img src="{{url($news->image)}}" alt="news"></a></div>
                                    <div class="single-news-content">
                                        <a href="{{url('single-news/'.$news->id)}}"><h4>{{$news->title}}</h4></a>
                                       <p>{!! str_limit($news->description, $limit =50, $end = '')!!}</p>
                                      @php
                                      $dt = Carbon::parse($news->date);
                                      $date = $dt->toFormattedDateString();
                                      @endphp
                                        <div class="news-time-part"><i class="far fa-clock"></i>{{$date}}</div>
                                        <a href="{{url('single-news/'.$news->id)}}" class="cilt-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="news_slider_nav">
                            <i class="fa fa-angle-left testi_prev"></i>
                            <i class="fa fa-angle-right testi_next"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>Events</h3>
                        <div class="event_carousel">
                            @foreach($eventList as $event)
                            <div class="item">
                                <div class="single-news">
                                    <div class="single-news-img"><a href="{{url('single-event/'.$event->id)}}"><img src="{{url($event->image)}}" alt="news"></a></div>
                                    <div class="single-news-content">
                                        <a href="{{url('single-event/'.$event->id)}}"><h4>{{$event->title}}</h4></a>
                                        <p>{!! str_limit($event->description, $limit =50, $end = '')!!}</p>
                                        @php
                                        $dt = Carbon::parse($event->date);
                                        $date = $dt->toFormattedDateString();
                                        @endphp
                                        <div class="news-time-part"><i class="far fa-calendar-alt"></i> {{$date}}</div>
                                        <a href="{{url('single-event/'.$event->id)}}" class="cilt-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="event_slider_nav">
                            <i class="fa fa-angle-left testi_prev"></i>
                            <i class="fa fa-angle-right testi_next"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>Facebook News Feed</h3>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCILTBangladeshCouncil%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </section>
<section class="home-membership-area section-padding">
    <div class="container">
        <div class="row"><div class="col-sm-12"><h2 class="section-title">Our Partners</h2></div></div>
        <div class="row">
            <div class="col-sm-12">
                <div class="home-membership-box">
                    @foreach($partners as $partner)
                    <div class="item"><img src="{{url($partner->image)}}" alt="partner-img"></div>
                    @endforeach
                </div>
                <div class="partner-slider_nav">
                    <i class="fa fa-angle-left testi_prev"></i>
                    <i class="fa fa-angle-right testi_next"></i>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection