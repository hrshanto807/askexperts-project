<?php
// blog page Meta List

function aepexpart_blog_post_fileds()
{
    $blog_post = new_cmb2_box(array(
        'id' => 'meta-blog-list',
        'title' => esc_html(__('Meta List', 'aeptheme')),
        'object_types'  => array('post'),


    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Profile Image', 'aeptheme'),
        'desc' => esc_html__('Upload an image or enter a URL.', 'aeptheme'),
        'id'   => 'image-profile',
        'type' => 'file',
    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Name Author', 'aeptheme'),
        'desc' => esc_html__('name your author', 'aeptheme'),
        'id'   => 'name-author',
        'type' => 'text',
    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Date', 'aeptheme'),
        'desc' => esc_html__('Date Input Here', 'aeptheme'),
        'id'   => 'date-create-post',
        'type' => 'text_date',
    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Button Link', 'aeptheme'),
        'desc' => esc_html__('field description', 'aeptheme'),
        'id'   => 'button-link',
        'type' => 'text_url',
        
    ));

    $blog_post->add_field(array(
        'name' => esc_html__('Write Button Name', 'aeptheme'),
        'desc' => esc_html__('Write Button Name', 'aeptheme'),
        'id'   => 'button-name',
        'type' => 'text',
    ));
}
add_action('cmb2_admin_init', 'aepexpart_blog_post_fileds');
