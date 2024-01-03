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
// sevices hero
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Service Page Hero BG',
  'fields' => array(
    array(
      'id' => 'service-hero-bg',
      'title' => 'Service Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'service-hero-title',
      'title' => 'Service Hero Title',
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
  'title' => 'Single Service Page Hero BG',
  'fields' => array(
    array(
      'id' => 'service-single-hero-bg',
      'title' => ' Single Service Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'service-single-hero-name',
      'title' => ' Single Service Name',
      'type'  => 'text',
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
    array(
      'id' => 'case-single-bottom-button-src',
      'title' => ' Single Case Studies Bottom Button link For More Browse All Case',
      'type'  => 'text',
    ),
    array(
      'id' => 'case-single-bottom-button-name',
      'title' => ' Single Case Studies Bottom Button name For More Browse All Case',
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
// service heading area
CSF::createSection($prefix, array(
  'parent'    => 'aep-section-content',
  'title' => 'Services Content',
  'fields' => array(
    array(
      'id' => 'service-name',
      'title' => 'Services Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'service-title',
      'title' => 'Services Title',
      'type'  => 'text',
    ),
  )
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
      'button_title' => 'ADD ANOTHER NUM',
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
// sevices  
CSF::createSection($prefix, array(
  'id'    => 'aep-section-srvice',
  'title' => 'Services  Section',
));

// Single Sevice Testi
CSF::createSection($prefix, array(
  'parent'    => 'aep-section-srvice',
  'title' => 'SerVice Consult Section',
  'fields' => array(

    array(
      'id' => 'conult-services-bg',
      'title' => 'Consult Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'conult-services-thumb',
      'title' => 'Consult Thumb',
      'type'  => 'media',
    ),
    array(
      'id' => 'conult-services-name',
      'title' => 'Consult name',
      'type'  => 'text',
    ),
    array(
      'id' => 'conult-services-title',
      'title' => 'Consult Title',
      'type'  => 'text',
    ),
    array(
      'id'     => 'conslut-repeater',
      'type'   => 'repeater',
      'title'  => 'Consult Content Area',
      'button_title' => 'Add Consult List',
      'fields' => array(

        array(
          'id'    => 'conult-services-icon',
          'type'  => 'icon',
          'title' => 'Consult Icon'
        ),
        array(
          'id'    => 'conult-services-heading',
          'type'  => 'text',
          'title' => 'Consult Heading Tag'
        ),
        array(
          'id'    => 'conult-services-content',
          'type'  => 'textarea',
          'title' => 'Contsult Content'

        )
      )
    )
  )


));
// Consulting service
CSF::createSection($prefix, array(
  'parent'    => 'aep-section-srvice',
  'title' => 'SerVice Consult Section',
  'fields' => array(

    array(
      'id' => 'conult-services-bg',
      'title' => 'Consult Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'conult-services-thumb',
      'title' => 'Consult Thumb',
      'type'  => 'media',
    ),
    array(
      'id' => 'conult-services-name',
      'title' => 'Consult name',
      'type'  => 'text',
    ),
    array(
      'id' => 'conult-services-title',
      'title' => 'Consult Title',
      'type'  => 'text',
    ),
    array(
      'id'     => 'conslut-repeater',
      'type'   => 'repeater',
      'title'  => 'Consult Content Area',
      'button_title' => 'Add Consult List',
      'fields' => array(

        array(
          'id'    => 'conult-services-icon',
          'type'  => 'icon',
          'title' => 'Consult Icon'
        ),
        array(
          'id'    => 'conult-services-heading',
          'type'  => 'text',
          'title' => 'Consult Heading Tag'
        ),
        array(
          'id'    => 'conult-services-content',
          'type'  => 'textarea',
          'title' => 'Contsult Content'

        )
      )
    )
  )


));
// sevices Prices List 
CSF::createSection($prefix, array(
  'parent'    => 'aep-section-srvice',
  'title' => 'SerVice Price Section',
  'fields' => array(

    array(
      'id' => 'price-name',
      'title' => 'Price Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'price-title',
      'title' => 'Price Title',
      'type'  => 'text',
    ),
    array(
      'id'     => 'price-repeater',
      'type'   => 'repeater',
      'title'  => 'Price List Area',
      'button_title' => 'Add Price List',
      'fields' => array(

        array(
          'id'    => 'price-plan',
          'type'  => 'text',
          'title' => 'Price Plan'
        ),
        array(
          'id'    => 'price-content',
          'type'  => 'text',
          'title' => 'Price Content Short'
        ),
        array(
          'id'    => 'price-doller',
          'type'  => 'text',
          'title' => 'Doller'
        ),
        array(
          'id'    => 'price-date',
          'type'  => 'text',
          'title' => 'Peckage'
        ),
        array(
          'id'     => 'price-support-repeater',
          'type'   => 'repeater',
          'title'  => 'Price support Area',
          'button_title' => 'Add Support',
          'fields' => array(
            array(
              'id'    => 'price-support',
              'type'  => 'text',
              'title' => 'Price Support'
            ),
          )
        ),
        array(
          'id'    => 'price-button',
          'type'  => 'text',
          'title' => 'Button Name'
        ),

        array(
          'id'    => 'price-button-link',
          'type'  => 'text',
          'title' => 'Button Link'
        ),


      )
    )
  )
));
// Brand Logo
CSF::createSection($prefix, array(
  'id'    => 'aep-brand-logo',
  'title' => 'Brand LOgo Area',
  'fields' => array(
    array(
      'id'     => 'logo-repeater',
      'type'   => 'repeater',
      'title'  => 'Price List Area',
      'button_title' => 'Add brand Image',
      'fields' => array(

        array(
          'id'    => 'brand-logo',
          'type'  => 'media',
          'title' => 'Brand Logo'
        ),

      )
    )
  )
));

// sevices History Area
CSF::createSection($prefix, array(
  'parent'    => 'aep-section-srvice',
  'title' => 'History Area',
  'fields' => array(

    array(
      'id'    => 'histoy-bg',
      'type'  => 'media',
      'title' => 'History BG'
    ),
    array(
      'id'    => 'histoy-name',
      'type'  => 'text',
      'title' => 'History Name'
    ),
    array(
      'id'    => 'histoy-title',
      'type'  => 'text',
      'title' => 'History Title'
    ),
    array(
      'id'    => 'histoy-link-video',
      'type'  => 'text',
      'title' => 'Video Link'
    ),
    array(
      'id'    => 'histoy-img',
      'type'  => 'media',
      'title' => 'History Image'
    ),

  )
));


// Single Service Expect Area
CSF::createSection($prefix, array(
  'parent'    => 'aep-section-srvice',
  'title' => 'Single Service Expect Section',
  'fields' => array(

    array(
      'id' => 'expect-services-bg',
      'title' => 'What Expect Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'expect-services-thumb',
      'title' => 'What Expect Thumb',
      'type'  => 'media',
    ),
    array(
      'id' => 'expect-services-name',
      'title' => 'What Expect name',
      'type'  => 'text',
    ),
    array(
      'id' => 'expect-services-title',
      'title' => 'What Expect Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'expect-services-content',
      'title' => 'What Expect Content',
      'type'  => 'textarea',
    ),
    array(
      'id'     => 'expect-repeater',
      'type'   => 'repeater',
      'title'  => 'What Expect Content Area',
      'button_title' => 'Add Consult List',
      'limit' => 2,
      'fields' => array(

        array(
          'id'    => 'expect-services-icon',
          'type'  => 'icon',
          'title' => 'What Expect Icon'
        ),       
        array(
          'id'    => 'expect-services-content',
          'type'  => 'textarea',
          'title' => 'What Expect Content'

        )
      )
    )
  )


));