@extends('frontEnd.front_layout')
@section('ev','active')
@section('title', 'CILT |Event ')
@section('frntcontent')
@php
use Carbon\Carbon;
@endphp
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>Events</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- news-area Area Start-->
    <section class="news-page-area news-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Events</h3>
                    <div class="all-news">
                        @foreach($eventList as $event)
                        <div class="col-sm-4">
                            <div class="single-news">
                                <div class="single-news-img"><a href="{{url('single-event/'.$event->id)}}"><img src="{{$event->image}}" alt="news"></a></div>
                                <div class="single-news-content">
                                    <a href="{{url('single-event/'.$event->id)}}"><h4>{!! str_limit($event->title, $limit =20, $end = '..')!!}</h4></a>
                                    <p>{!! str_limit($event->description, $limit =70, $end = '..')!!}</p>
                                    @php
                                    $dt = Carbon::parse($event->date);
                                    $date = $dt->toFormattedDateString();
                                    @endphp
                                    <div class="news-time-part"><i class="far fa-clock"></i>{{$date}}</div>
                                    <a href="{{url('single-event/'.$event->id)}}" class="cilt-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                </div>
                {{$eventList->links()}}
            </div>
        </div>
    </section>
    
@endsection