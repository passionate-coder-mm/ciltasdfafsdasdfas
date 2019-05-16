(function ($) {
	"use strict";

    // mobile Menu area
    $('nav.mobile_menu').meanmenu({
        meanScreenWidth: '767'
    });
    $('nav.mean-nav li > a:first-child').on('click', function () {
        $('a.meanmenu-reveal').click();
    });

    // Owl Carousel for Home Slider Panel
    var maintheme_slid = $('.main_slider');
    maintheme_slid.owlCarousel({
        loop:true,
        margin:30,
        autoplay:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:1
            }
        }
    });

    $('.mainslider_nav .testi_next').on('click', function() {
        maintheme_slid.trigger('next.owl.carousel');
    });

    $('.mainslider_nav .testi_prev').on('click', function() {
        maintheme_slid.trigger('prev.owl.carousel');
    });
    // Owl Carousel for Home Slider Panel

    // Owl Carousel for Partners Area
    var partner_slide = $('.home-membership-box');
    partner_slide.owlCarousel({
        loop:true,
        margin:12,
        autoplay:true,
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            992:{
                items:5
            }
        }
    });

    $('.partner-slider_nav .testi_next').on('click', function() {
        partner_slide.trigger('next.owl.carousel');
    });

    $('.partner-slider_nav .testi_prev').on('click', function() {
        partner_slide.trigger('prev.owl.carousel');
    });
    // Owl Carousel for Home Slider Panel

    // Owl Carousel News Area
    var news_slide = $('.news_carousel');
    news_slide.owlCarousel({
        loop:true,
        margin:30,
        autoplay:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:1
            }
        }
    });

    $('.news_slider_nav .testi_next').on('click', function() {
        news_slide.trigger('next.owl.carousel');
    });

    $('.news_slider_nav .testi_prev').on('click', function() {
        news_slide.trigger('prev.owl.carousel');
    });
    // Owl Carousel for Home Slider Panel

    // Owl Carousel News Area
    var event_slide = $('.event_carousel');
    event_slide.owlCarousel({
        loop:true,
        margin:30,
        autoplay:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:1
            }
        }
    });

    $('.event_slider_nav .testi_next').on('click', function() {
        event_slide.trigger('next.owl.carousel');
    });

    $('.event_slider_nav .testi_prev').on('click', function() {
        event_slide.trigger('prev.owl.carousel');
    });
    // Owl Carousel for Home Slider Panel

    //Randomly Color change on hover
    var randomLinks = $('.what-we-do-wrap .single-ww-do');
    var original = randomLinks.css('background-color');
    //var colors = ['#c8b63b', '#3d906c', '#436c9b', '#76317d', '#e63750', '#3d92a7', '#73ad46', '#a7375f', '#ef7431'];

    randomLinks.hover(function () { //mouseover
        var col2 = Math.floor(Math.random() * colors.length);
        var newcolor = colors[col2];
        $(this).css('background-color', newcolor);
    }, function () { //mouseout
        $(this).css('background-color', original);
    });

    //Login Page Script--------------

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    //Back to Top
    $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span>Top</div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    //Custom Youtube Video Player
    $('.embed-video').embedVideo();

    new WOW().init();

}(jQuery));