<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'aepexpert_framwork';

//
// Create options
//

CSF::createOptions($prefix, array(
  'menu_title' => 'Theme Option',
  'menu_slug'  => 'aep-theme-option',

));

//
// Hero Bg area
//
CSF::createSection($prefix, array(
  'id'    => 'aep-hero-bg',
  'title' => 'All Hero BG Here',
  'icon'  => 'far fa-images',
));
// home hero
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Home Page Hero BG',
  'fields' => array(
    array(
      'id' => 'home-hero-bg',
      'title' => 'Home Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'home-hero-name',
      'title' => 'Home Hero Name',
      'type'  => 'media',
    ),
    array(
      'id' => 'home-hero-title',
      'title' => 'Home Hero Title',
      'type'  => 'media',
    )
  )
));
// blog hero
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Blog Page Hero BG',
  'fields' => array(
    array(
      'id' => 'blog-hero-bg',
      'title' => 'Blog Hero Bg',
      'type'  => 'media',
    ),   
    array(
      'id' => 'blog-hero-title',
      'title' => 'Blog Hero Title',
      'type'  => 'text',
    )
  )
));

// single post hero
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Single Page Hero BG',
  'fields' => array(
    array(
      'id' => 'single-hero-bg',
      'title' => 'Single Hero Bg',
      'type'  => 'media',
    ),   
  )
));
// team hero
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Team Page Hero BG',
  'fields' => array(
    array(
      'id' => 'team-hero-bg',
      'title' => 'Team Hero Bg',
      'type'  => 'media',
    ),   
    array(
      'id' => 'team-hero-title',
      'title' => 'Team Hero Title',
      'type'  => 'text',
    )
  )
));


// all section heading Content Area 
CSF::createSection($prefix, array(
  'id'    => 'aep-section-content',
  'title' => 'All Section Heading Content',
  'icon'  => 'fas fa-heading',
));
// blog heading area
CSF::createSection($prefix, array(
  'parent'    => 'aep-section-content',
  'title' => 'Blog Content',
  'fields' => array(
    array(
      'id' => 'blog-name',
      'title' => 'Blog Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'blog-title',
      'title' => 'Blog Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'blog-button',
      'title' => 'Blog Button Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'blog-button-link',
      'title' => 'Another Link Set',
      'type'  => 'text',
    ),
  )
));

// team heading area
CSF::createSection($prefix, array(
  'parent'    => 'aep-section-content',
  'title' => 'Team Content',
  'fields' => array(   
    array(
      'id' => 'team-title',
      'title' => 'Team Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'team-content',
      'title' => 'Team content',
      'type'  => 'textarea',
    ),
    array(
      'id' => 'team-button',
      'title' => 'Team Button Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'team-button-link',
      'title' => 'Another Link Set',
      'type'  => 'text',
    ),
  )
));


// team heading area
CSF::createSection($prefix, array(
  'id'    => 'aep-section-ready-talk',
  'title' => 'Ready To talk Section',
  'fields' => array(   
    array(
      'id' => 'ready-talk-img',
      'title' => 'Ready To Talk Image',
      'type'  => 'media',
    ),
    array(
      'id' => 'ready-talk-name',
      'title' => 'Ready To Talk Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'ready-talk-title',
      'title' => 'Ready To Talk Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'ready-talk-content',
      'title' => 'Ready To Talk content',
      'type'  => 'textarea',
    ),   
    
  )
));