@extends('frontEnd.front_layout')
@section('ed','active')
@section('title', 'CILT |Education Course ')
@section('frntcontent')
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>Courses</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- membership-overview Area Start-->
    <section class="core-value-area membership-overview section-padding">
        <div class="container">
            <div class="row"><div class="col-sm-12"><h2 class="section-title">{{$overview->title}}</h2></div></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="core-value-content">
                        <p>{!!$overview->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- membership-overview Area End-->
    
    <!-- Cources Area Start-->
    <section class="courses-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 courses-part padding-zero">
                    @foreach($courses as $course)
                    <div class="col-sm-4">
                        <div class="course-box">
                        <a href="{{url('/single-course/'.$course->id)}}">
                                <figure>
                                    <div class="image_box">
                                        <div class="overlay_port"></div>
                                        <img src="{{$course->image}}" alt="Courses details img" />
                                    </div>
                                    <figcaption>
                                        <h4 class="sub-cource-title">{!! str_limit($course->title, $limit =30, $end = '..')!!}</h4>
                                        <!--<div><span class="time"><i class="far fa-clock"></i>Time:</span>3 February 2018</div>-->
                                        <div><span class="total-hours"><i class="far fa-calendar-alt"></i>Estimated:</span> # {{$course->duration}} Hours</div>
                                        <div><span class="course-fees"><i class="far fa-money-bill-alt"></i>Fees:</span>{{$course->fees}} BDT</div>
                                        <div><span class="course-fees"><i class="fas fa-bookmark"></i>Discount Offer:</span>{{$course->discount}} BDT</div>
                                        <div class="apply-now">Apply Now</div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    @endforeach   
                </div>
            </div>
        </div>
    </section>
    <!-- Cources Area End-->
    
@endsection