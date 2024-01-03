<?php 
/**
 * Template Name: Sevices
 */
get_header();
?>
        <!-- aep hero section start -->
        <section class="aep-home-hero-area"
            style="background: url(<?php $services_hero_bg = aepexpert_get_option('service-hero-bg');
                                                            if (!empty($services_hero_bg)) {
                                                                echo esc_url($services_hero_bg['url']);
                                                            };
                                                            ?>);background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="aep-about-hero-content ">
                <span><?php echo get_the_title(get_queried_object_id()); ?></span>
            <h1><?php if (!empty(aepexpert_get_option('service-hero-title'))) {
                    echo esc_html(aepexpert_get_option('service-hero-title'));
                }; ?></h1>
                </div>
            </div>
        </section>
        <!-- aep hero section end -->
        <!-- home service area start  -->
        <section class="aep-home-service-area">
            <div class="container">
                <div class="aep-home-service-area-heading-area text-center mb-10">
                    <h6><?php if (!empty(aepexpert_get_option('service-name'))) {
                    echo esc_html(aepexpert_get_option('service-name'));
                }; ?></h6>
                    <h2><?php if (!empty(aepexpert_get_option('service-title'))) {
                    echo wp_kses(aepexpert_get_option('service-title'),aepexpert_allow_tags());
                }; ?></h2>
                </div>
                <div class="aep-home-service-content-area-all grid grid-cols-3 gap-4 mob:grid-cols-1 tab:grid-cols-1">
                    <?php $aep_services = new WP_Query(array( 
                        'post_type'=> 'aeptheme-sevice',
                        'posts_per_page'=>6,
                        'order' => 'asc',
                    ));if($aep_services->have_posts()):while($aep_services->have_posts()):$aep_services->the_post();?>
                    <!-- single service area start -->
                    <div class="aep-home-single-service-area">
                        <?php if(has_post_thumbnail()){the_post_thumbnail();}?>
                        <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                        <p><?php echo wp_trim_words(get_the_content(),17)?></p>
                    </div>
                    <!-- single service area end -->
                    <?php endwhile;endif;?>                    
                </div>
            </div>
        </section>
        <!-- home service area end -->
        <!-- home about us area start -->
        <section class="aep-about-us-home-area-all">
            <div class="container">
                <div class="grid grid-cols-2 tab:grid-cols-1 mob:grid-cols-1 gap-40">
                    <div class="aep-about-us-right-area relative" style="background-image: url(<?php $consult_bg = aepexpert_get_option('conult-services-bg');
                                                            if (!empty($consult_bg)) {
                                                                echo esc_url($consult_bg['url']);
                                                            };
                                                            ?>);
                    background-position: left bottom;background-repeat: no-repeat;">
                        <img src="<?php $consult_img = aepexpert_get_option('conult-services-thumb');
                                                            if (!empty($consult_img)) {
                                                                echo esc_url($consult_img['url']);
                                                            };
                                                            ?>" alt="">
                    </div>
                    <div class="aep-about-us-left-area tab:text-center mob:text-center">
                        <span><?php if (!empty(aepexpert_get_option('conult-services-name'))) {
                    echo esc_html(aepexpert_get_option('conult-services-name'));
                }; ?></span>
                        <h2 class="mt-5"><?php if (!empty(aepexpert_get_option('conult-services-title'))) {
                    echo esc_html(aepexpert_get_option('conult-services-title'));
                }; ?>
                        </h2>
                        <div class="aep-two-process-ara flex flex-col items-center gap-x-10 tab:justify-center tab:mb-10 mob:mb-10 mob:justify-center tab:grid-cols-1 mob:grid-cols-1
                             mt-5">
                            <!-- single process start -->
                            <div class="aep-single-process-area ">
                            <?php $consult_services = aepexpert_get_option('conslut-repeater');
                                    if(!empty($consult_services)):foreach($consult_services as $consult):;?>
                                <div class="aep-single-processr-icon flex gap-2">
                                    
                                    <i class="<?php if(!empty($consult)){
                                        echo esc_attr($consult['conult-services-icon']);
                                    };?>"></i>
                                    <a href="#">
                                        <h5><?php if(!empty($consult)){
                                        echo esc_html($consult['conult-services-heading']);
                                    };?></h5>
                                        <p><?php if(!empty($consult)){
                                        echo esc_html($consult['conult-services-content']);
                                    };?></p>
                                    </a>

                                   
                                </div>
                                <?php endforeach;endif;?>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- home about us area end -->
        <!-- service pricing area start  -->        
        <section class="all-services-prices-aep ">
            <div class="container">
                <div class="aep-prices-area mb-14">
                    <div class="prices-heading text-center">
                        <h6><?php if (!empty(aepexpert_get_option('price-name'))) {
                        echo esc_html(aepexpert_get_option('price-name'));
                    }; ?></h6>
                        <h2 class="mt-5"><?php if (!empty(aepexpert_get_option('price-title'))) {
                        echo esc_html(aepexpert_get_option('price-title'));
                    }; ?></h2>
                    </div>
                    <!-- single all price list area start-->
                    <div class="single-all-prices-list grid grid-cols-3 gap-12
                     tab:grid-cols-1 mob:grid-cols-1">
                     <?php $pric_list = aepexpert_get_option('price-repeater');
                     if(!empty($pric_list)): foreach($pric_list as $prices):
                     ?>
                        <!-- single  price list area start-->
                        <div class="single-price-list">
                            <div class="aep-single-price-top">
                                <h5><?php if(!empty($prices)){
                                    echo esc_html($prices['price-plan']);
                                };?></h5>
                                <p><?php if(!empty($prices)){
                                    echo esc_html($prices['price-content']);
                                };?>
                                </p>
                                <div class="price-number flex items-center gap-2">
                                    <h1><?php if(!empty($prices)){
                                    echo esc_html($prices['price-doller']);
                                };?></h1>
                                    <h6><?php if(!empty($prices)){
                                    echo esc_html($prices['price-date']);
                                };?></h6>
                                </div>
                            </div>
                            <div class="aep-single-price-bottom mt-5">
                                <?php $support_price = $prices['price-support-repeater'];                               
                                if(!empty($support_price)):foreach($support_price as $support):?>
                                <li><?php if(!empty($support)){echo esc_html($support['price-support']);}?></li>
                                <?php endforeach;endif;?>                                                              
                            </div>
                            <a href="<?php if(!empty($prices)){
                                    echo esc_url($prices['price-button-link']);
                                };?>" class="aep-btn-2 text-white mt-8"><?php if(!empty($prices)){
                                    echo esc_html($prices['price-button']);
                                };?></a>
                        </div>
                        <!-- single  price list area end-->
                        <?php endforeach;endif;?>                       
                        <!-- single  price list area end-->
                    </div>
                    <!-- single all price list area start-->
                </div>
            </div>
        </section>
        <!-- service pricing area end -->
        <!-- aep contact us home area start -->
<section class="aep-contact-area-all my-40">
    <div class="container">
        <div class="aep-contact-area flex gap-20 mob:flex-col tab:flex-col mob:gap-3 tab:gap-3">
            <div class="contact-source-area mob:text-center tab:text-center">
                <span><?php if (!empty(aepexpert_get_option('contact-us-name'))) {
                            echo esc_html(aepexpert_get_option('contact-us-name'));
                        }; ?></span>
                <h2><?php if (!empty(aepexpert_get_option('contact-us-title'))) {
                        echo esc_html(aepexpert_get_option('contact-us-title'));
                    }; ?></h2>
                <p class="mb-10"><?php if (!empty(aepexpert_get_option('contact-us-content'))) {
                                        echo wp_kses(aepexpert_get_option('contact-us-content'), aepexpert_allow_tags());
                                    }; ?></p>
                <!-- single all contact source start -->
                <div class="single-all-contact-source-area flex gap-16 flex-col mob:ps-20 tab:ps-20">
                    <?php $contact_repaeter = aepexpert_get_option('contact-repeater');
                    if (!empty($contact_repaeter)) : foreach ($contact_repaeter as $contact) : ?>
                            <!-- single contact source area start -->
                            <div class="single-contact-source flex items-center gap-3">
                                <a href="tel:"><i class="fa-solid <?php if (!empty($contact)) {
                                                                        echo esc_attr($contact['contact-icon']);
                                                                    }; ?>"></i></a>
                                <div class="single-content-area-contact">
                                    <p><?php if (!empty($contact)) {
                                            echo esc_html($contact['contact-title']);
                                        }; ?></p>
                                    <a href="tel:">
                                        <h5><?php if (!empty($contact)) {
                                                echo esc_html($contact['contact-content']);
                                            }; ?></h5>
                                    </a>
                                </div>
                            </div>
                            <!-- single contact source area end -->
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
            <!-- contact form area start -->
            <div class="all-contact-form">
                <div class="contact-form mob:ps-10 tab:ps-10">
                    <div class="mt-10 grid grid-cols-2 gap-x-6 gap-y-8 ">
                        <?php $contact_page = new WP_Query(array(
                            'post_type' => 'page',
                            'pagename' => 'Contact Us'
                        ));
                        if ($contact_page->have_posts()) : while ($contact_page->have_posts()) : $contact_page->the_post();
                                the_content();
                            endwhile;
                        endif ?>
                    </div>
                </div>
            </div>


            <!-- contact form area end -->

        </div>
    </div>
</section>
<!-- aep contact us home area end -->
<?php get_footer();?>