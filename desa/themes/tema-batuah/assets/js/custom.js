jQuery(document).ready(function($) {
    // for hover dropdown menu
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });
    // slick slider call
    $('.slick_slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slide: 'div',
        autoplay: true,
        autoplaySpeed: 2000,
        cssEase: 'linear'
    });
    // slick slider2 call
    $('.slick_slider2').slick({
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        slide: 'div',
        cssEase: 'linear'
    });
});

wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
wow.init();

$(window).on('load', function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(100).css({
        'overflow': 'visible'
    });
})