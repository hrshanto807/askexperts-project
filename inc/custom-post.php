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

    // // Register CPT Cases 

    // register_post_type('aeptheme-cases', array(
    //     'labels'     => array(
    //         'name'             => esc_html(__('Cases', 'aeptheme')),
    //         'singular_name'    => esc_html(__('Case', 'aeptheme')),
    //         'add_new'          => esc_html(__('Add New Case', 'aeptheme')),
    //         'not_found'        => esc_html(__('not Case found', 'aeptheme')),
    //         'add_new_item'     => esc_html(__('Add New Case', 'aeptheme')),
    //         'edit_item'        => esc_html(__('Edit Case', 'aeptheme')),


    //     ),
    //     'public'     => true,
    //     'rewrite'    => array(
    //         'slug'               => 'case'
    //     ),
    //     'menu_icon'  =>  'dashicons-editor-spellcheck',
    //     'capability_type' => 'page',
    //     'supports'     =>  array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),

    // ));
};


add_action('init', 'aeptheme_custom_posts');
