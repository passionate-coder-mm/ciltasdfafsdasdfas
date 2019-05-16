@extends('frontEnd.front_layout')
@section('ed','active')
@section('title', '{{$coursedetail->title}}')
@section('frntcontent')
@php
use Carbon\Carbon;
@endphp
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>Education - Courses</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- Single Cources Area Start-->
    <section class="single-course-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="courses-part">
                        <img src="{{url('/'.$coursedetail->image)}}" alt="Courses details img" />
                        <h3>{{$coursedetail->title}}</h3>
                        <div class="single-course-details-area">
                            <p>{!!$coursedetail->descriptiontop!!}</p>
                            <h4>Admission Fees: BDT {{$coursedetail->fees}}</h4>
                            <h4>Discount Fees: BDT {{$coursedetail->discount}}</h4>
                            <a class="cilt-button" href="/frontEnd/ApplicationForm.pdf">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-9 course-outline-area padding-zero">
                        <h4>Course Outline:</h4>
                        <div class="course-block">
                                {!!$coursedetail->description!!}
                        </div>
                    </div>
                    <div class="col-sm-3 instructor-area padding-zero">
                        <div class="course-block">
                            <p><strong>Class Will held at:</strong></p>
                            <ol>
                                    @php
                                    $dt = Carbon::parse($coursedetail->startdate);
                                    $date = $dt->toFormattedDateString();
                                    @endphp
                                <li>{{ $date}}</li>
                            </ol>
                        </div>
                        <div class="course-block">
                            <p><strong>Course Duration:</strong></p>
                            <ol>
                                <li>{{$coursedetail->duration}} Hours</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection