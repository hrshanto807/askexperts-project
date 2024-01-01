<?php
define('AEPEXPERT_FILE_INC', get_template_directory());

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
// all Genarel php here

function aepexpert_all_genarel(){
 add_theme_support('post-thumbnails');
 add_image_size('aep-blog-thumb',583,321);
};
add_action('after_setup_theme','aepexpert_all_genarel');


//  allow html tag
function aepexpert_allow_tags()
{
    $allow_tags = array(
        'br'  => array(),
    );
    return $allow_tags;
};

// A Custom function for get an option
if (!function_exists('aepexpert_get_option')) {
    function aepexpert_get_option($option = '', $default = null)
    {
        $options = get_option('aepexpert_framwork'); // Attention: Set your unique id of the framework
        return (isset($options[$option])) ? $options[$option] : $default;
    }
}

// file include here
require_once AEPEXPERT_FILE_INC . '/inc/codestar-framework/codestar-framework.php';
require_once AEPEXPERT_FILE_INC . '/inc/CMB2-develop/init.php';
require_once AEPEXPERT_FILE_INC . '/inc/codestar-framework/theme-option.php';
require_once AEPEXPERT_FILE_INC . '/inc/CMB2-develop/metabox-list.php';
require_once AEPEXPERT_FILE_INC . '/inc/CMB2-develop/metabox-list.php';
require_once AEPEXPERT_FILE_INC . '/inc/CMB2-develop/example-functions.php';















?>