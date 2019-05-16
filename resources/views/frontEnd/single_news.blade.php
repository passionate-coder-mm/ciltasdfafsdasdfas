@extends('frontEnd.front_layout')
@section('nw','active')
@section('title', '{{$news->title}}')
@section('frntcontent')
@php
use Carbon\Carbon;
@endphp
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>News - News Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- news-area Area Start-->
    <section class="news-details-area news-page-area news-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Lorem Ipsam is dummy</h3>
                    <aside class="news-sidebar">
                        <div class="news-list-box">
                            <h4><a href="news.html" class="active">News</a></h4>
                            <ul class="news-sidebar-2">
                                {{-- @php
                                dd($newstitle);
                                exit;
                                @endphp --}}
                                @foreach($newstitle as $ntitle)
                            <li class="active"><a href="{{url('single-news/'.$ntitle->newsid)}}"><i class="fas fa-angle-right"></i>{{$ntitle->title}}</a></li>
                                @endforeach
                                {{-- <li><a href="news-details.html"><i class="fas fa-angle-right"></i>News Two Title</a></li>
                                <li><a href="news-details.html"><i class="fas fa-angle-right"></i>News Three Title</a></li>
                                <li><a href="news-details.html"><i class="fas fa-angle-right"></i>News one Title</a></li>
                                <li><a href="news-details.html"><i class="fas fa-angle-right"></i>News one Title</a></li> --}}
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-sm-8">
                    <h3>News</h3>
                    <div class="all-news">
                        <div class="col-sm-12 padding-zero text-center">
                            <div class="single-news">
                                <div class="single-news-img"><img src="{{url('/'.$news->image)}}" alt="news"></div>
                                <div class="single-news-content">
                                    <h4>{{$news->title}}</h4>
                                <p>{!!$news->description!!}<br> <br> </p>
                                </div>
                            </div>
                            {{-- <ul class="pagination">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li class="active"><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                                <li><a href="javascript:void(0)">4</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection