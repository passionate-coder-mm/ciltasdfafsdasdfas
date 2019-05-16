<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>CILT</title>

    <!--===================================
    All CSS Style Link Start
    =======================================-->
    <!-- ====Arial Font==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="{{asset('frontEnd/fonts/arial/stylesheet.css')}}">

    <!-- ====Bootstrap css==== -->
    <link rel="stylesheet" href="{{asset('frontEnd/css/bootstrap.min.css')}}">

    <!-- ====Font awesome css==== -->
    <link rel="stylesheet" href="{{asset('frontEnd/css/font-awesome.min.css')}}">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <link href="{{asset('frontEnd/css/fontawesome-all.min.css')}}" rel="stylesheet">

    <!-- ====Animate css==== -->
    <link rel="stylesheet" href="{{asset('frontEnd/css/animate.css')}}">

    <!-- ====Owl carousel 2 css==== -->
    <link rel="stylesheet" href="{{asset('frontEnd/css/owl.carousel.css')}}">

    <!-- ====Mobile css==== -->
    <link rel="stylesheet" href="{{asset('frontEnd/css/meanmenu.min.css')}}">

    <!-- ====Custom css==== -->
    <link rel="stylesheet" href="{{asset('frontEnd/style.css')}}">

    <!--All CSS Style Link End-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- FAVICONS -->
    <link rel="icon" href="{{asset('frontEnd/img/favicon.png')}}" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="{{asset('frontEnd/img/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('frontEnd/img/favicon.png')}}">

</head>
<body>

<!--Header Area Start-->
<header class="header_section">
@php 
use App\Footerlogo;
use App\Mymodel\Social;
 $footerlogo = Footerlogo::find(1);
 $sm = Social::find(1);
@endphp
    <!--Header Top area Start-->
    <div class="header-top-area hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="top-header-country-list">
                        <nav>
                            <ul>
                                <li><a href="javascript:void(0)"><img class="bd-flag" src="{{asset('frontEnd/img/bangladesh-flag.jpg')}}" alt="National Flag">Bangladesh | Find Your Local Branch<img src="{{asset('frontEnd/img/arrow-down.png')}}" alt="arrow down"></a>
                                    <div class="sub-menu text-center">
                                        <div class="col-sm-2 under-menu">
                                            <h5><a href="javascript:void(0)">Africa</a></h5>
                                            <ul class="sub-menu1">
                                                <li><a href="http://www.ciltegypt.org">Egypt</a></li>
                                                <li><a href="javascript:void(0)">Ethiopia</a></li>
                                                <li><a href="http://www.ciltgh.org">Ghana</a></li>
                                                <li><a href="http://www.ciltmalawi.com">Malawi</a></li>
                                                <li><a href="http://www.ciltmauritius.com">Mauritius</a></li>
                                                <li><a href="http://www.ciltnigeria.org">Nigeria</a></li>
                                                <li><a href="http://www.ciltgh.org">South Africa</a></li>
                                                <li><a href="http://www.ciltmalawi.com">Tanzania</a></li>
                                                <li><a href="http://www.ciltmauritius.com">Uganda</a></li>
                                                <li><a href="http://www.ciltnigeria.org">Zambia</a></li>
                                                <li><a href="http://www.ciltnigeria.org">Zimbabwe</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-2 under-menu">
                                            <h5><a href="javascript:void(0)">Americas</a></h5>
                                            <ul class="sub-menu1">
                                                <li><a href="http://www.ciltegypt.org">North America</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2 under-menu">
                                            <h5><a href="javascript:void(0)">Australasia</a></h5>
                                            <ul class="sub-menu1">
                                                <li><a href="http://www.ciltegypt.org">Australia</a></li>
                                                <li><a href="javascript:void(0)">New Zealand</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2 under-menu">
                                            <h5><a href="javascript:void(0)">East Asia</a></h5>
                                            <ul class="sub-menu1">
                                                <li><a href="http://www.ciltegypt.org">China</a></li>
                                                <li><a href="javascript:void(0)">Hong Kong</a></li>
                                                <li><a href="http://www.ciltgh.org">Macao</a></li>
                                                <li><a href="http://www.ciltmalawi.com">Taiwan</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2 under-menu">
                                            <h5><a href="javascript:void(0)">South Asia</a></h5>
                                            <ul class="sub-menu1">
                                                <li><a href="http://www.ciltegypt.org">Bangladesh</a></li>
                                                <li><a href="javascript:void(0)">India</a></li>
                                                <li><a href="http://www.ciltgh.org">Pakistan</a></li>
                                                <li><a href="http://www.ciltmalawi.com">Sri Lanka</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2 under-menu">
                                            <h5><a href="javascript:void(0)">South East Asia</a></h5>
                                            <ul class="sub-menu1">
                                                <li><a href="http://www.ciltegypt.org">Indonesia</a></li>
                                                <li><a href="javascript:void(0)">Malaysia</a></li>
                                                <li><a href="http://www.ciltgh.org">Singapore</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2 under-menu">
                                            <h5><a href="javascript:void(0)">Europe & Middle East</a></h5>
                                            <ul class="sub-menu1">
                                                <li><a href="http://www.ciltegypt.org">Ireland</a></li>
                                                <li><a href="javascript:void(0)">Kazakhstan</a></li>
                                                <li><a href="http://www.ciltgh.org">Malta</a></li>
                                                <li><a href="http://www.ciltmalawi.com">Oman</a></li>
                                                <li><a href="http://www.ciltgh.org">Poland</a></li>
                                                <li><a href="http://www.ciltmalawi.com">UAE</a></li>
                                                <li><a href="http://www.ciltgh.org">Ukraine</a></li>
                                                <li><a href="http://www.ciltmalawi.com">United Kingdom</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2 under-menu">
                                            <h5><a href="javascript:void(0)">International</a></h5>
                                            <ul class="sub-menu1">
                                                <li><a href="http://www.ciltegypt.org">International Registered Office</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="top-right-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                            <li><a href="frontEnd\ApplicationForm.pdf">Download Application Form</a></li>
                            {{-- <li><a href="">Members Area</a></li> --}}
                            <li><a href="frontEnd\ApplicationForm.pdf">Join CILT</a></li>
                        </ul>
                        <form class="navbar-form" action="#" method="post" autocomplete="on">
                            <div class="input-group">
                                <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" id="search_submit" type="button" name="submit-search">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header Top area End-->

    <!--Main Menu Area Start-->
    <div class="main-menu-area ">
        <nav class="hidden-xs navbar navbar-inverse" data-spy="affix" data-offset-top="40">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-left visible-xs" href="{{url('/')}}"><img src="{{asset('frontEnd/img/logo-cilt.png')}}" alt="Logo Here" class="img-responsive"></a>
            </div>

            <div class="container">

                <div class="navbar-collapse collapse text-uppercase">

                    <a class="navbar-brand navbar-left hidden-xs" href="{{url('/')}}"><img src="{{asset('frontEnd/img/logo-cilt.png')}}" alt="Logo Here" class="img-responsive"></a>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="@yield('hm')"><a href="{{url('/')}}">Home</a></li>
                        <li class="@yield('ab')"><a href="javascript:void(0)">About Us <span><img src="{{asset('frontEnd/img/arrow-down-white.png')}}" alt="arrow"></span></a>
                            <div class="sub-menu text-center">
                                <div class="under-menu">
                                    <ul class="sub-menu1">
                                        <li><a href="{{url('/about-cilt')}}">About CILT</a></li>
                                        <li><a href="{{url('/cilt-board')}}">Our Board</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="@yield('mm')"><a href="javascript:void(0)">Membership <span><img src="{{asset('frontEnd/img/arrow-down-white.png')}}" alt="arrow"></span></a>
                            <div class="sub-menu text-center">
                                <div class="under-menu">
                                    <ul class="sub-menu1">
                                        <li><a href="{{url('/member-overview')}}">Membership Overview</a></li>
                                         <li><a href="{{url('/member-wilet')}}">Women in Logistics & Transport</a></li>
                                        <li><a href="{{url('/member-yp')}}">Young Professionals</a></li>
                                        <li><a href="{{url('/member-corporate')}}">Corporate Membership</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="@yield('ed')"><a href="javascript:void(0)">Education <span><img src="{{asset('frontEnd/img/arrow-down-white.png')}}" alt="arrow"></span></a>
                            <div class="sub-menu text-center">
                                <div class="under-menu">
                                    <ul class="sub-menu1">
                                        <li><a href="{{url('/education-course')}}">Courses</a></li>
                                        <li><a href="{{url('/education-knowledge')}}">Knowledge Centre</a></li>
                                        <li><a href="{{url('/education-download')}}">Download Centre</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="@yield('nw')"><a href="{{url('/news')}}">News</a></li>
                        <li class="@yield('ev')"><a href="{{url('/event')}}">Events</a></li>
                        <li class="@yield('co')"><a href="{{url('/contact-us')}}">Contact Us</a></li>
                    </ul>

                </div>
                <!--/.navbar-collapse -->
            </div>
        </nav>
    </div>

    <!-- Mobile Menu Start -->
    <nav class="mobile_menu hidden">
        <a href="index.html"><img class="mobile-logo" src="{{asset('frontEnd/img/logo-cilt.png')}}" alt="CILT"></a>
        <ul class="nav navbar-nav navbar-right menu">
            <li class="@yield('hm')"><a href="{{url('/')}}">Home</a></li>
            <li><a href="#">About</a>
                <ul class="sub_menu">
                    <li><a href="{{url('/about-cilt')}}">About CILT</a></li>
                    <li><a href="{{url('/cilt-board')}}">Our Board</a></li>
                </ul>
            </li>
            <li class="@yield('mm')"><a href="#">Membership</a>
                <ul class="sub_menu">
                    <li><a href="{{url('/member-overview')}}">Membership Overview</a></li>
                    <li><a href="{{url('/member-wilet')}}">Women in Logistics & Transport</a></li>
                    <li><a href="{{url('/member-yp')}}">Young Professionals</a></li>
                    <li><a href="{{url('/member-corporate')}}">Corporate Membership</a></li>
                </ul>
            </li>
            <li class="@yield('ed')"><a href="#">Education</a>
                <ul class="sub_menu">
                    <li><a href="{{url('/education-course')}}">Courses</a></li>
                    <li><a href="{{url('/education-knowledge')}}">Knowledge Centre</a></li>
                    <li><a href="{{url('/education-download')}}">Download Centre</a></li>
                </ul>
            </li>
            <li class="@yield('nw')"><a href="{{url('/news')}}">News</a></li>
            <li class="@yield('ev')"><a href="{{url('/event')}}">Events</a></li>
            <li class="@yield('co')"><a href="{{url('/contact-us')}}">Contact Us</a></li>
            {{-- <li><a href="">Members Area</a></li> --}}
            <li><a href="frontEnd\ApplicationForm.pdf">Download Application Form</a></li>
            <li><a href="#">Find Your Local Branch</a>
                <ul class="sub_menu">
                    <li><a href="#">Africa</a>
                        <ul class="sub_menu">
                            <li><a href="http://www.ciltegypt.org">Egypt</a></li>
                            <li><a href="javascript:void(0)">Ethiopia</a></li>
                            <li><a href="http://www.ciltgh.org">Ghana</a></li>
                            <li><a href="http://www.ciltmalawi.com">Malawi</a></li>
                            <li><a href="http://www.ciltmauritius.com">Mauritius</a></li>
                            <li><a href="http://www.ciltnigeria.org">Nigeria</a></li>
                            <li><a href="http://www.ciltgh.org">South Africa</a></li>
                            <li><a href="http://www.ciltmalawi.com">Tanzania</a></li>
                            <li><a href="http://www.ciltmauritius.com">Uganda</a></li>
                            <li><a href="http://www.ciltnigeria.org">Zambia</a></li>
                            <li><a href="http://www.ciltnigeria.org">Zimbabwe</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Americas</a>
                        <ul class="sub_menu">
                            <li><a href="http://www.ciltegypt.org">North America</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Australasia</a>
                        <ul class="sub_menu">
                            <li><a href="http://www.ciltegypt.org">Australia</a></li>
                            <li><a href="javascript:void(0)">New Zealand</a></li>
                        </ul>
                    </li>
                    <li><a href="#">East Asia</a>
                        <ul class="sub_menu">
                            <li><a href="http://www.ciltegypt.org">China</a></li>
                            <li><a href="javascript:void(0)">Hong Kong</a></li>
                            <li><a href="http://www.ciltgh.org">Macao</a></li>
                            <li><a href="http://www.ciltmalawi.com">Taiwan</a></li>
                        </ul>
                    </li>
                    <li><a href="#">South Asia</a>
                        <ul class="sub_menu">
                            <li><a href="http://www.ciltegypt.org">Bangladesh</a></li>
                            <li><a href="javascript:void(0)">India</a></li>
                            <li><a href="http://www.ciltgh.org">Pakistan</a></li>
                            <li><a href="http://www.ciltmalawi.com">Sri Lanka</a></li>
                        </ul>
                    </li>
                    <li><a href="#">South East Asia</a>
                        <ul class="sub_menu">
                            <li><a href="http://www.ciltegypt.org">Indonesia</a></li>
                            <li><a href="javascript:void(0)">Malaysia</a></li>
                            <li><a href="http://www.ciltgh.org">Singapore</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Europe & Middle East</a>
                        <ul class="sub_menu">
                            <li><a href="http://www.ciltegypt.org">Ireland</a></li>
                            <li><a href="javascript:void(0)">Kazakhstan</a></li>
                            <li><a href="http://www.ciltgh.org">Malta</a></li>
                            <li><a href="http://www.ciltmalawi.com">Oman</a></li>
                            <li><a href="http://www.ciltgh.org">Poland</a></li>
                            <li><a href="http://www.ciltmalawi.com">UAE</a></li>
                            <li><a href="http://www.ciltgh.org">Ukraine</a></li>
                            <li><a href="http://www.ciltmalawi.com">United Kingdom</a></li>
                        </ul>
                    </li>
                    <li><a href="#">International</a>
                        <ul class="sub_menu">
                            <li><a href="http://www.ciltegypt.org">International Registered Office</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Mobile Menu End -->
    <!--Main Menu Area End-->
</header>
<!--Header Area End-->

<!-- SLIDER START -->
@yield('frntcontent')

<!-- SLIDER END -->

<!-- Strength Area Start-->

<!-- Strength Area End-->

<!-- home-about Area Start-->

<!-- home-about Area End-->

<!-- single-every-part-area Area Start-->

<!-- single-every-part-area Area End-->

<!-- home-young-wilat Area Start-->

<!-- home-young-wilat Area End-->

<!-- news-area Area Start-->

<!-- news-area Area End-->

<!-- home-membership Area Start-->

<!-- home-membership Area End-->

<!--Footer Area Start-->
<footer class="section-padding">
    <div class="container">
        <div class="row">
            <div class="footer-top-logo text-center footer-border-bottom padding-bottom">
                <img src="{{url($footerlogo->image)}}" alt="footer-logo">
                 <h3>{{$footerlogo->title}}</h3>
                <h4>{{$footerlogo->subtitle}}</h4>
                <p>{{$footerlogo->description}}</p>
            </div>
            <div class="col-sm-12 footer-middle padding-zero footer-border-bottom">

                <div class="col-sm-3 footer-widget">
                    <h4 class="footer-widget-title text-uppercase">About CILT</h4>
                    <ul class="footer-nav">
                        <li><a href="{{url('/about-cilt')}}"><i class="fas fa-angle-right"></i>Institute History</a></li>
                        <li><a href="{{url('/about-cilt')}}"><i class="fas fa-angle-right"></i>Regional Sections</a></li>
                        <li><a href="{{url('/cilt-board')}}"><i class="fas fa-angle-right"></i>Our Board</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-widget">
                    <h4 class="footer-widget-title text-uppercase">Education</h4>
                    <ul class="footer-nav">
                        <li><a href="{{url('/education-course')}}"><i class="fas fa-angle-right"></i>Our Courses</a></li>
                        <li><a href="{{url('/education-knowledge')}}"><i class="fas fa-angle-right"></i>Knowledge Centre</a></li>
                        <li><a href="{{url('/education-download')}}"><i class="fas fa-angle-right"></i>Download Centre</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-widget">
                    <h4 class="footer-widget-title text-uppercase">Membership Groups</h4>
                    <ul class="footer-nav">
                        <li><a href="{{url('/member-wilet')}}"><i class="fas fa-angle-right"></i>Women in Logistics & Transport</a></li>
                        <li><a href="{{url('/member-yp')}}"><i class="fas fa-angle-right"></i>Young Professionals</a></li>
                    <li><a href="{{url('/member-corporate')}}"><i class="fas fa-angle-right"></i>Corporate Membership</a></li>
                    </ul>
                </div>
                
                <div class="col-sm-3 footer-widget">
                    <h4 class="footer-widget-title text-uppercase">Contact with us</h4>
                    <ul class="footer-nav">
                        MHK Terminal (4th Floor), 110 Kazi Nazrul
                        Islam Avenue, Banglamotors (3.08 mi)
                        Dhaka, Bangladesh Dhaka-1000
                        <!--<li>T: <a href="tel:01711-434899">01711-434899</a></li>-->
                        <li><a href="tel:01711-434899"><i class="fas fa-phone"></i>01711-434899</a></li>
                        <li><a href="{{url('/contact-us')}}">See Details</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 footer-bottom padding-zero footer-border-bottom">
                <div class="col-sm-6">
                    <h4 class="footer-widget-title text-uppercase">Subscribe for Newsletter</h4>
                    {!!Form::open(['class' =>'form-horizontal','id'=>'subscribe','enctype'=>'multipart/form-data'])!!}
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your mail..">
                            <button type="submit" class="">Subscribe Now</button>
                        </div>
                        {!!Form::close()!!}
                </div>
                <div class="col-sm-6">
                    <h4 class="footer-widget-title text-uppercase">Connect with Social Media</h4>
                    <ul class="footer-nav">
                    <li><a href="{{ $sm->fblink}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $sm->twlink}}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $sm->lklink}}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ $sm->inlink}}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 padding-zero copyright-area">
                <p class="copyright">Copyright&copy;2018<a href="index.html">The Chartered Institute of Logistics and Transport Bangladesh.</a>All rights reserved.</p>
                <p class="copyright">Designed & Developed by<a href="http://weaverbd.com/"
                                                               class="weaver-innovations">Weaver Innovations Ltd</a></p>
            </div>
        </div>
    </div>
</footer>
<script>
      $('#subscribe').validate({ 
      rules: {
           
        email: 
            {
              required: true,
              
            },
           
            
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
   });
   $(document).on('submit','#subscribe',function(e){
          e.preventDefault();
          //alert('hi');
          var data = $(this).serialize();
         
           $.ajax({
              url:"/subscribe/",
              method:"POST",
            data:data,
            dataType:'JSON',
              success:function(data)
              {
               console.log(data);
                toastr.options = {
                        "debug": false,
                        "positionClass": "toast-bottom-right",
                        "onclick": null,
                        "fadeIn": 300,
                        "fadeOut": 1000,
                        "timeOut": 5000,
                        "extendedTimeOut": 1000
                      };
                  toastr.success('Thanks for Subscribing');
                 
      
                $("#subscribe").trigger('reset');
              }
              
          });
      
  })
</script>

<script src="{{asset('frontEnd/js/jquery-2.1.4.min.js')}}"></script>
<!--<![endif]-->

<!-- ====jQuery Latest version==== -->
<script src="{{asset('frontEnd/js/jquery-1.12.0.min.js')}}"></script>

<!-- ====Bootstrap JS==== -->
<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>

<!-- ====jQuery owl carousel==== -->
<script src="{{asset('frontEnd/js/owl.carousel.min.js')}}"></script>

<!-- =====jQuery easing==== -->
<script src="{{asset('frontEnd/js/jquery.easing.1.3.min.js')}}"></script>

<!-- =====jQuery Parallax==== -->
<script src="{{asset('frontEnd/js/jquery.parallax-1.1.3.js')}}"></script>

<script src="{{asset('frontEnd/js/wow.min.js')}}"></script>

{{-- <script type="text/javascript">new WOW().init();</script> --}}
<script src="{{asset('frontEnd/js/jquery.meanmenu.min.js')}}"></script>

<script src="{{asset('frontEnd/js/main.js')}}"></script>
<script src="{{asset('frontEnd/js/embed.videos.js')}}"></script>

<script type="text/javascript">new WOW().init();</script>

<script src="{{asset('frontEnd/js/jquery.meanmenu.min.js')}}"></script>

<!-- ====jQuery main script==== -->
<script src="{{asset('frontEnd/js/main.js')}}"></script>
<!--========================================
        All Jquery Script link End
============================================-->

</body>
</html>