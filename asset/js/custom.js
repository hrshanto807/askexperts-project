(function ($) {
    $('#main_menu ul ul').parent('li').children('a').append('<i class="fa-solid fa-chevron-right"></i>')

$('.header-menu-area > a').click(function(){
    $('#main_menu').slideToggle();


})

    $('.lef-value').circleProgress({
        value: 0.8,
        size: 95.0,
        startAngle: -Math.PI,
        thickness: 'auto',
        fill: {
            gradient: [' #4EAF4E']
        },
        emptyFill: 'rgba(0, 0, 0, .1)',
        animation: {
            duration: 5000,
            easing: 'circleProgressEasing'
        },
        animationStartValue: 0.0,
        reverse: true,
        lineCap: 'butt',

    }),
        // owl-carousel for brand logo
        $('.aep-brand-logo').owlCarousel({
            loop: true,
            nav: false,
            dots: false,           
            responsive:{
                0:{
                    items:2
                },
                480:{
                    items:3
                },
                768:{
                    items:3
                },
                1000:{
                    items:5
                },
            },
            autoplayHoverPause: true,
            
        }),
        // owl-carousel for testimonial
        $('.aep-home-testimonials').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                768:{
                    items:1
                },
                1000:{
                    items:1
                },
            },
            autoplay: true,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            navText: ['<i class="fa-solid fa-arrow-left-long"></i><p>Prev</p>', '<p>Next</p><i class="fa-solid fa-arrow-right-long"></i>'],

        }),

        // lightbox gellary
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,

        }),
        // scroll top
        jQuery(window).scroll(function () { 
            
        });
        $('.scrollTop').click(function(){
            $('html').animate({'scrollTop':'0'},2000);
            return false;

        })
        // magnific poppup video

        $(document).ready(function() {
            $('.video-play').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,        
                fixedContentPos: false
            });
        });

})(jQuery);