<?php

/**
 * Register Custom Post Type
 */
if (!defined('ABSPATH')) {
    exit;
}

function aeptheme_custom_posts()
{
    // register CPT teams
    register_post_type('aeptheme-sevice', array(
        'labels'  =>  array(
            'name'             => esc_html(__('Services', 'aeptheme')),
            'singular_name'    => esc_html(__('Service', 'aeptheme')),
            'add_new'          => esc_html(__('Add New Service', 'aeptheme')),
            'not_found'        => esc_html(__('not found Service', 'aeptheme')),
            'edit_item'        => esc_html(__('Edit Service', 'aeptheme')),
            'add_new_item'     => esc_html(__('Add New Service', 'aeptheme')),
            'featured_image'   => esc_html(__('Service  Image', 'aeptheme')),
            'set_featured_image' => esc_html(__('Set Service  Image', 'aeptheme')),
            'remove_featured_image' => esc_html(__('Remove Service  Image', 'aeptheme')),
        ),
        'menu_icon'      => 'dashicons-admin-tools',
        'rewrite'        => array(
            'slug'             => 'service'
        ),
        'capability_type' => 'page',
        'public'         => true,
        'supports'   => array('title', 'editor', 'thumbnail')
    ));
    // register CPT teams
    register_post_type('aeptheme-teams', array(
        'labels'  =>  array(
            'name'             => esc_html(__('Teams', 'aeptheme')),
            'singular_name'    => esc_html(__('Team', 'aeptheme')),
            'add_new'          => esc_html(__('Add New Team', 'aeptheme')),
            'not_found'        => esc_html(__('not found Team', 'aeptheme')),
            'edit_item'        => esc_html(__('Edit Team', 'aeptheme')),
            'add_new_item'     => esc_html(__('Add New Team', 'aeptheme')),
            'featured_image'   => esc_html(__('Team Member Image', 'aeptheme')),
            'set_featured_image' => esc_html(__('Set Team Member Image', 'aeptheme')),
            'remove_featured_image' => esc_html(__('Remove Team Member Image', 'aeptheme')),
        ),
        'menu_icon'      => 'dashicons-groups',
        'rewrite'        => array(
            'slug'             => 'team'
        ),
        'capability_type' => 'page',
        'public'         => true,
        'supports'   => array('title', 'editor', 'thumbnail')
    ));

       // Register CPT Portfolio 
    register_post_type('aep-portfolio', array(
        'labels'     => array(
            'name'             => esc_html(__('Portfolio', 'aeptheme')),
            'singular_name'    => esc_html(__('Portfolio', 'aeptheme')),
            'add_new'          => esc_html(__('Add New Portfolio', 'aeptheme')),
            'not_found'        => esc_html(__('not Portfolio found', 'aeptheme')),
            'add_new_item'     => esc_html(__('Add New Portfolio', 'aeptheme')),
            'edit_item'        => esc_html(__('Edit Portfolio', 'aeptheme')),
            'featured_image'   => esc_html(__('Project Image', 'aeptheme')),
            'set_featured_image' => esc_html(__('Set Project Image', 'aeptheme')),
            'remove_featured_image' => esc_html(__('Remove Project Image', 'aeptheme')),


        ),
        'public'     => true,
        'rewrite'    => array(
            'slug'               => 'Portfolio'
        ),
        'menu_icon'  =>  'dashicons-products',
        'capability_type' => 'page',
        'supports'     =>  array('title', 'editor','thumbnail','tags'),

    ));
    // register catagory
    register_taxonomy(
        'portifolio-cat',   // register name
        'aep-portfolio', // Post Type
        array(
            'hierarchical'   => true,
            'label'          => 'Categories', // Display Name
            'query_var'      => true,
            'show_admin_column' =>true,
            'rewrite'       => array( 
                'slug'     =>  'portifolio-catagory',// ths controls the base slug that will display before each term
                'with_front'=> true // Don't display the catagory base before
            )
        ),
    );
    // resister tag
    register_taxonomy(
        'aep_portofollio_tags',  // Change this to your desired taxonomy name
        'aep-portfolio',  // Change this to your custom post type name
        array(
            'label' => 'Custom Post Tags',
            'hierarchical' => false,
            'public' => true,
            'rewrite' => array('slug' => 'portofollio_tags'),
        )
    );

};


add_action('init', 'aeptheme_custom_posts');
