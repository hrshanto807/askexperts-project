<?php
if (!defined('ABSPATH')) {
    exit;
}

function bizibver_widget_init()
{    
    register_sidebar(array(
        'name'    =>   esc_html(__('Footer Widget', 'biziver')),
        'id'      =>   'sidebar-footer',
        'description'    =>    esc_html(__('Widgets in this area will be shown under your Footer, before comments.', 'biziver')),
        'before_widget'    => '<div class="single-footer-area text-start"> <div id=%s class="footer-widget
        footer-form widget %s">',
        'after_widget'    => '</div> </div>',
        'before_title'    => '<h5 class="text-white">',
        'after_title'    => '</h5>',
    ));
};
add_action('widgets_init', 'bizibver_widget_init');
