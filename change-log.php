<?php 
/**
 * Template Name: Change Log
 */
get_header();
?>
       <!-- aep hero section start -->
       <section class="aep-home-hero-area"
       style="background: url(<?php $team_hero_bg = aepexpert_get_option('change-hero-bg');
                                                            if (!empty($team_hero_bg)) {
                                                                echo esc_url($team_hero_bg['url']);
                                                            };
                                                            ?>);background-position: center; background-repeat: no-repeat; background-size: cover;">
       <div class="container">
           <div class="aep-service-hero-content">
           <span><?php if (!empty(aepexpert_get_option('change-hero-title'))) {
                    echo esc_html(aepexpert_get_option('change-hero-title'));
                }; ?></span>
           <h1><?php echo get_the_title(get_queried_object_id()); ?></h1>           
           </div>
       </div>
   </section>
   <!-- aep hero section end -->
   <section>
    <div class="container">
         <!-- single details testimonial strt -->
         <div class="single-details-main-changelog my-5 flex justify-center items-center 
         mob:flex-col tab:flex-col gap-4" style="background-image: url(asset/img/single-testi-bg.png);">                    
           <h1 class="text-white"><?php if (!empty(aepexpert_get_option('change-title'))) {
                    echo esc_html(aepexpert_get_option('change-title'));
                }; ?></h1>
           <a href="<?php if (!empty(aepexpert_get_option('change-btn-link'))) {
                    echo esc_url(aepexpert_get_option('change-btn-link'));
                }; ?>" class="btn-footer log"><?php if (!empty(aepexpert_get_option('change-btn'))) {
                    echo esc_html(aepexpert_get_option('change-btn'));
                }; ?></a>
            
        </div>
        <!-- single details testimonial end -->
    </div>
   </section>
   <?php get_footer();?>