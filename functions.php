<?php 
// script all enqueue here

// Enqueue Scripts
function aepexpert_all_scripts(){
    // ALL Stylesheet Here
   wp_enqueue_style('tailwindcss',get_theme_file_uri('/asset/fontawsome/css/all.min.css'));
   wp_enqueue_style('owl-carousel',get_theme_file_uri('/asset/css/owl.carousel.min.css'));
   wp_enqueue_style('lightbox',get_theme_file_uri('/asset/css/lightbox.min.css'));
   wp_enqueue_style('owl-theme-default',get_theme_file_uri('/asset/css/owl.theme.default.min.css'));
   wp_enqueue_style('magnific-popup',get_theme_file_uri('/asset/css/magnific-popup.css'));
   wp_enqueue_style('main',get_theme_file_uri('/asset/css/main.css'));
   wp_enqueue_style('custom',get_theme_file_uri('/asset/css/custom.css'));
   wp_enqueue_style('tablet',get_theme_file_uri('/asset/css/tablet.css'));
   wp_enqueue_style('mobile',get_theme_file_uri('/asset/css/responsive.css'));

    // ALL Script here
    wp_enqueue_script('jquery');
    wp_enqueue_script('magnific-popup',get_theme_file_uri('asset/js/jquery.magnific-popup.min.js'));
    wp_enqueue_script('lightbox-min',get_theme_file_uri('asset/js/lightbox.min.js'));    
    wp_enqueue_script('circle-progress',get_theme_file_uri('asset/js/circle-progress.min.js'));
    wp_enqueue_script('mixitup-min',get_theme_file_uri('asset/js/mixitup.min.js'));
    wp_enqueue_script('custom-js',get_theme_file_uri('asset/js/custom.js'));

    
   

    
   
   
};

add_action('wp_enqueue_scripts', 'aepexpert_all_scripts');

















?>