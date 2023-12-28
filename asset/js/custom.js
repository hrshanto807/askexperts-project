(function ($) {
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

    },
        // owl-carousel for brand logo
        $('.aep-brand-logo').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            items: 5,
            autoplayHoverPause: true,
            margin: 132,
        }),
        // owl-carousel for testimonial
        $('.aep-home-testimonials').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            navText: ['<i class="fa-solid fa-arrow-left-long"></i><p>Prev</p>', '<p>Next</p><i class="fa-solid fa-arrow-right-long"></i>'],

        }),

        // lightbox gellary
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
                  

        })
    )
})(jQuery);