@extends('frontEnd.front_layout')
@section('nw','active')
@section('title', 'CILT |News ')
@section('frntcontent')
@php
use Carbon\Carbon;
@endphp
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>News</h3>
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
                    <h3>News</h3>
                    <div class="all-news">
                        @foreach($newsList as $news)
                        <div class="col-sm-4">
                            <div class="single-news">
                                <div class="single-news-img"><a href="{{url('single-news/'.$news->id)}}"><img src="{{$news->image}}" alt="news"></a></div>
                                <div class="single-news-content">
                                    <a href="{{url('single-news/'.$news->id)}}"><h4>{!! str_limit($news->title, $limit =20, $end = '..')!!}</h4></a>
                                    <p>{!! str_limit($news->description, $limit =70, $end = '..')!!}</p>
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
                </div>
                {{$newsList->links()}}
            </div>
        </div>
    </section>
    
@endsection