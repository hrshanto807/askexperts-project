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

 // Logo
CSF::createSection($prefix, array(
  'id'    => 'aep-logo',
  'title' => 'Aep Theme Logo ',
  'fields' => array(
    array(
      'id'     => 'logo-header',
      'type'   => 'media',
      'title'  => 'Header Logo',      
    ),
    array(
      'id'     => 'logo-footer',
      'type'   => 'media',
      'title'  => 'Footer Logo',
      
    ))));
// header top
CSF::createSection($prefix, array(
  'id'    => 'aep-header-top',
  'title' => 'Header Top',
  'icon'  => 'far fa-images',
));
// home header top content
CSF::createSection($prefix, array(
  'parent'    => 'aep-header-top',
  'title' => 'Home Page Hero ',
  'fields' => array(
    array(
      'id'     => 'home-header_top-repeater',
      'type'   => 'repeater',
      'title'  => 'Home Header top Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(

        array(
          'id'    => 'header-left-icon',
          'type'  => 'icon',
          'title' => 'Time icon'
        ),
        array(
          'id'    => 'header-left-content',
          'type'  => 'text',
          'title' => 'Write Time And Location'
        ),      

      ),
    ),
   
)));
// Social Profile
CSF::createSection($prefix, array(
  'id'    => 'aep-header-social',
  'title' => 'Aep Theme Social ',
));
// home header social
CSF::createSection($prefix, array(
  'parent'    => 'aep-header-social',
  'title' => 'Header Social ',
  'fields' => array(
    array(
      'id'     => 'header-social-repeater',
      'type'   => 'repeater',
      'title'  => 'Header Social Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(

        array(
          'id'    => 'social-icon',
          'type'  => 'icon',
          'title' => 'Header Social icon'
        ),
        array(
          'id'    => 'social-link',
          'type'  => 'text',
          'title' => 'Header Social Link'
        ),      

      ),
    ),
   
)));

// Footer social
CSF::createSection($prefix, array(
  'parent'    => 'aep-header-social',
  'title' => 'Footer Social ',
  'fields' => array(
    array(
      'id'     => 'footer-social-repeater',
      'type'   => 'repeater',
      'title'  => 'Footer Social Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(

        array(
          'id'    => 'social-name',
          'type'  => 'text',
          'title' => 'Footer Social Name'
        ),
        array(
          'id'    => 'social-link-f',
          'type'  => 'text',
          'title' => 'Footer Social Link'
        ),      

      ),
    ),
   
)));

//
// Hero Bg area
//
CSF::createSection($prefix, array(
  'id'    => 'aep-hero-bg',
  'title' => 'All Hero Section Here',
  'icon'  => 'far fa-images',
));

// home hero
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Home Page Hero ',
  'fields' => array(
    array(
      'id' => 'home-hero-bg',
      'title' => 'Home Hero Bg',
      'type'  => 'media',
    ),    
    array(
      'id' => 'home-hero-heading',
      'title' => 'Home Hero title',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-hero-content',
      'title' => 'Home Hero Content',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-hero-btn-1',
      'title' => 'Home Hero btn 1',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-hero-btn-1-link',
      'title' => 'Home Hero btn 1 LInk',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-hero-btn-2',
      'title' => 'Home Hero btn 2',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-hero-btn-2-link',
      'title' => 'Home Hero btn 2 link',
      'type'  => 'text',
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
// About hero
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'About Page Hero BG',
  'fields' => array(
    array(
      'id' => 'about-hero-bg',
      'title' => 'About Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'about-hero-title',
      'title' => 'About Hero Title',
      'type'  => 'text',
    )
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
  'title' => 'Contact Page Hero BG',
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
//licence hero bg
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'License Page Hero BG',
  'fields' => array(
    array(
      'id' => 'license-hero-bg',
      'title' => 'License Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'license-hero-title',
      'title' => 'License Hero Title',
      'type'  => 'text',
    )
  )
));
// change log hero bg
CSF::createSection($prefix, array(
  'parent'    => 'aep-hero-bg',
  'title' => 'Change Log Page Hero BG',
  'fields' => array(
    array(
      'id' => 'change-hero-bg',
      'title' => 'Change Log Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'change-hero-title',
      'title' => 'Change Log Hero Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'change-title',
      'title' => 'Change Log Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'change-btn',
      'title' => 'Change Log Button',
      'type'  => 'text',
    ),
    array(
      'id' => 'change-btn-link',
      'title' => 'Change Log Button Link',
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

// all home here themeoption
CSF::createSection($prefix, array(
  'id'    => 'aep-home',
  'title' => 'Home Page Theme Option ',
));
// Home About
CSF::createSection($prefix, array(
  'parent'    => 'aep-home',
  'title' => 'Home Page About ',
  'fields' => array(
    array(
      'id' => 'home-about-bg',
      'title' => 'Home About Bg',
      'type'  => 'media',
    ),    
    array(
      'id' => 'home-about-thumb',
      'title' => 'Home About Thumb',
      'type'  => 'media',
    ),    
    array(
      'id' => 'home-about-name',
      'title' => 'Home About Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-about-heading',
      'title' => 'Home About Heading',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-about-title',
      'title' => 'Home About Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-about-content',
      'title' => 'Home ABout Content',
      'type'  => 'textarea',
    ),
    array(
      'id'     => 'home-about-repeater',
      'type'   => 'repeater',
      'title'  => 'Home About Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(

        array(
          'id'    => 'about-icon',
          'type'  => 'icon',
          'title' => 'About Bottom icon'
        ),
        array(
          'id'    => 'about-plus',
          'type'  => 'text',
          'title' => 'Plus Number'
        ),
        array(
          'id'    => 'plus-title',
          'type'  => 'text',
          'title' => 'Plus COntent'
        ),

      ),
    ),
    array(
      'id' => 'home-about-market-ex',
      'title' => 'Home About Market Expricens PLus',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-about-market-ex-title',
      'title' => 'Home About Market Expricens Title',
      'type'  => 'text',
    ),
    
    
)));
// Home Process
CSF::createSection($prefix, array(
  'parent'    => 'aep-home',
  'title' => 'Home Page Proccess ',
  'fields' => array( 
   
    array(
      'id' => 'home-Proccess-name',
      'title' => 'Home Proccess Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-Proccess-heading',
      'title' => 'Home Proccess Heading',
      'type'  => 'text',
    ),   
    array(
      'id' => 'home-Proccess-content',
      'title' => 'Home Proccess Content',
      'type'  => 'textarea',
    ),
    array(
      'id'     => 'home-Proccess-repeater',
      'type'   => 'repeater',
      'title'  => 'Home Proccess Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(
        
        array(
          'id'    => 'Proccess-num',
          'type'  => 'text',
          'title' => 'Proccess Number'
        ),
        array(
          'id'    => 'Proccess-title',
          'type'  => 'text',
          'title' => 'Proccess Title'
        ),
        array(
          'id'    => 'Proccess-content',
          'type'  => 'text',
          'title' => 'Proccess COntent'
        ),

      ),
    ),   
)));
// Home Groth
CSF::createSection($prefix, array(
  'parent'    => 'aep-home',
  'title' => 'Home Page Growing ',
  'fields' => array( 
   
    array(
      'id' => 'home-Growing-name',
      'title' => 'Home Growing Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-Growing-heading',
      'title' => 'Home Growing Heading',
      'type'  => 'text',
    ),   
    array(
      'id' => 'home-Growing-content',
      'title' => 'Home Growing Content',
      'type'  => 'textarea',
    ),
    array(
      'id'     => 'home-Growing-repeater',
      'type'   => 'repeater',
      'title'  => 'Home Growing Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(
        
        array(
          'id'    => 'Growing-icon',
          'type'  => 'icon',
          'title' => 'Growings Icon'
        ),
        array(
          'id'    => 'Growing-title',
          'type'  => 'text',
          'title' => 'Growing Title'
        ),
        array(
          'id'    => 'Growing-content',
          'type'  => 'text',
          'title' => 'Growing COntent'
        ),

      ),
    ),   
)));
// Home Gellary
CSF::createSection($prefix, array(
  'parent'    => 'aep-home',
  'title' => 'Home Page Gellary ',
  'fields' => array(  
   
    array(
      'id' => 'home-gellary-name',
      'title' => 'Gellary Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-gellary-heading',
      'title' => 'Gellary Heading',
      'type'  => 'text',
    ),    
    array(
      'id' => 'home-gellary-button',
      'title' => 'GEllary Button NAme',
      'type'  => 'text',
    ),    
    array(
      'id' => 'home-gellary-button-link',
      'title' => 'Gellary Button Link',
      'type'  => 'text',
    ), 
   
)));
// Home Skill
CSF::createSection($prefix, array(
  'parent'    => 'aep-home',
  'title' => 'Home Page Skill ',
  'fields' => array(  
   
    array(
      'id'     => 'home-skill-repeater',
      'type'   => 'repeater',
      'title'  => 'Home About Skill',
      'button_title' => 'ADD ANOTHER Skill',
      'fields' => array(

        array(
          'id'    => 'home-skill-plus',
          'type'  => 'text',
          'title' => 'Home Skill NUmber'
        ),       
        array(
          'id'    => 'home-skill-title',
          'type'  => 'text',
          'title' => 'Home Skill Title'
        ),       
      ),
    ),
)));
// Home Testimonial
CSF::createSection($prefix, array(
  'parent'    => 'aep-home',
  'title' => 'Home Page Feedback ',
  'fields' => array( 
    array(
      'id'    => 'home-Feedback-title',
      'type'  => 'text',
      'title' => 'Home Feedback Title'
    ), 
    array(
      'id'     => 'home-Feedback-repeater',
      'type'   => 'repeater',
      'title'  => 'Home About Feedback',
      'button_title' => 'ADD ANOTHER Feedback',
      'fields' => array(        
        array(
          'id'    => 'home-Feedback-Content',
          'type'  => 'textarea',
          'title' => 'Home Feedback Content'
        ),       
        array(
          'id'    => 'home-Feedback-img',
          'type'  => 'media',
          'title' => 'Home Feedback Image'
        ),       
        array(
          'id'    => 'home-Feedback-name',
          'type'  => 'text',
          'title' => 'Home Feedback name'
        ),       
        array(
          'id'    => 'home-Feedback-pro',
          'type'  => 'text',
          'title' => 'Home Feedback Profession'
        ),       
      ),
    ),
)));
// Home Book Now
CSF::createSection($prefix, array(
  'parent'    => 'aep-home',
  'title' => 'Home Page Book Now ',
  'fields' => array(     
   
    array(
      'id'    => 'home-book-name',
      'type'  => 'text',
      'title' => 'Book Now Name'
    ), 
   
    array(
      'id'    => 'home-book-title',
      'type'  => 'text',
      'title' => 'Book Now Title'
    ), 
   
    array(
      'id'    => 'home-book-content',
      'type'  => 'textarea',
      'title' => 'Book Now Content'
    ),   
    
    array(
      'id'    => 'home-book-num',
      'type'  => 'text',
      'title' => 'Book Now Number'
    ), 
    array(
      'id'    => 'home-book-img-1',
      'type'  => 'media',
      'title' => 'Book Now First Image'
    ), 

    array(
      'id'    => 'home-book-img-2',
      'type'  => 'media',
      'title' => 'Book Now Seconed Image'
    ),   
   
)));
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
      'id'    => 'histoy-content',
      'type'  => 'textarea',
      'title' => 'History Content'
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

//404 Page 
CSF::createSection($prefix, array(
  'id'    => 'aep-error-page',
  'title' => 'Error Page',
  'fields' => array(
    array(
      'id' => 'error-thumb',
      'title' => 'What Expect Bg',
      'type'  => 'media',
    ),    
    
    array(
      'id' => 'error-title',
      'title' => 'What Expect Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'error-content',
      'title' => 'What Expect Content',
      'type'  => 'textarea',
    ),
    array(
      'id' => 'error-btn',
      'title' => 'Error Page Button Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'error-btn-link',
      'title' => 'Error Page Button Link',
      'type'  => 'text',
    ),
   

)));