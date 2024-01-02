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
        'name' => esc_html__('Position Author', 'aeptheme'),
        'desc' => esc_html__('Position your author', 'aeptheme'),
        'id'   => 'position-author',
        'type' => 'text',
    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Some Text About Your Author', 'aeptheme'),
        'desc' => esc_html__('Write Your about Author', 'aeptheme'),
        'id'   => 'content-author',
        'type' => 'textarea',
    ));
    // Autor Social Link
    $blog_post->add_field(array(
        'id'          => 'social_repeat_group',
        'type'        => 'group',
        'description' => __('You Can Only 4 Social link Add Here', 'aeptheme'),
        'repeatable'  => true,
        'options'     => array(
            'group_title'       => __('Social {#}', 'aeptheme'),
            'add_button'        => __('Add Another Social', 'aeptheme'),
            'remove_button'     => __('Remove Social', 'aeptheme'),
            'sortable'          => true,
        ),
    ));
    $blog_post->add_group_field(
        'social_repeat_group',
        array(
            'name' => 'Social Icon',
            'id'   => 'social_icon',
            'type' => 'faiconselect',
            'options_cb' => 'returnRayFapsa',
            'attributes' => array(
                'faver' => 5
            ),
            'sortable' => true,
            'limit'         => 4,

        )
    );
    $blog_post->add_group_field('social_repeat_group', array(
        'name' => 'Social Link',
        'id'   => 'social_link',
        'type' => 'text',
        'sortable' => true,
        'limit'         => 4
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
