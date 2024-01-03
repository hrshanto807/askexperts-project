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

// Case hero bg
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Case Studies Page Hero BG',
  'fields' => array(
    array(
      'id' => 'case-hero-bg',
      'title' => 'Case Studies Hero Bg',
      'type'  => 'media',
    ),    
  )
));
// Case single hero 
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Single Case Studies Page Hero BG',
  'fields' => array(
    array(
      'id' => 'case-single-hero-bg',
      'title' => ' Single Case Studies Hero Bg',
      'type'  => 'media',
    ),    
    array(
      'id' => 'case-single-hero-name',
      'title' => ' Single Case Studies Name',
      'type'  => 'text',
    ),    
  )
));
// contact hero bg
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Contac Page Hero BG',
  'fields' => array(
    array(
      'id' => 'contact-hero-bg',
      'title' => 'Contact Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'contact-hero-title',
      'title' => 'Contact Hero Title',
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


// ready to talk area area
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

// newsletter area
CSF::createSection($prefix, array(
  'id'    => 'aep-section-newsletter',
  'title' => 'Newsletter Section',
  'fields' => array(
    array(
      'id' => 'newsletter-img',
      'title' => 'Newsletter Image',
      'type'  => 'media',
    ),
    array(
      'id' => 'newsletter-name',
      'title' => 'Newsletter Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'newsletter-title',
      'title' => 'Newsletter Title',
      'type'  => 'text',
    ),

  )
));


// Contuct us Left area area
CSF::createSection($prefix, array(
  'id'    => 'aep-section-contact',
  'title' => 'Contact Right Section',
  'fields' => array(

    array(
      'id' => 'contact-us-name',
      'title' => 'Contact us Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'contact-us-title',
      'title' => 'Contact us Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'contact-us-content',
      'title' => 'Contact us Content',
      'type'  => 'textarea',
    ),
    array(
      'id'     => 'contact-repeater',
      'type'   => 'repeater',
      'title'  => 'Contact_us NUM',
      'button_title'=> 'ADD ANOTHER NUM',
      'fields' => array(

        array(
          'id'    => 'contact-icon',
          'type'  => 'icon',
          'title' => 'Contact icon'
        ),
        array(
          'id'    => 'contact-title',
          'type'  => 'text',
          'title' => 'title'
        ),
        array(
          'id'    => 'contact-content',
          'type'  => 'text',
          'title' => 'COntent'
        ),

      ),
    ),

  )
));
