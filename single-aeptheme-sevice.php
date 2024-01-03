<?php get_header() ?>
<!-- aep hero section start -->
<section class="aep-home-hero-area" style="background: url(<?php $service_single_hero_bg = aepexpert_get_option('service-single-hero-bg');
                                                            if (!empty($service_single_hero_bg)) {
                                                                echo esc_url($service_single_hero_bg['url']);
                                                            }; ?>);background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="aep-service-hero-content">
            <span><?php if (!empty(aepexpert_get_option('service-single-hero-name'))) {
                        echo esc_html(aepexpert_get_option('service-single-hero-name'));
                    }; ?></span>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>
<!-- aep hero section end -->
<!-- single service details pages start -->
<section class="single-service-area-all mt-40">
    <div class="container">
        <div class="single-servie-details-area">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?>
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
        </div>
        <!-- single service details pages end -->
        <div class="aep-service-finance-area owl-carousel
                grid grid-cols-3 gap-10 mt-14 tab:grid-cols-2 mob:grid-cols-1">
                <?php $aep_testi = new WP_Query(array( 
                    'post_type'=> 'aeptheme-testimonial',                    
                    'order' => 'asc'                    
                ));if($aep_testi->have_posts()):while($aep_testi->have_posts()):$aep_testi->the_post()?>

            <!-- single finance area start -->
            <div class="single-aep-finance-area">
                <a href="#"><i class="<?php $test_icon = get_post_meta(get_the_ID(),'test-icon',true);
            if(!empty($test_icon)){echo esc_attr($test_icon);}?>"></i></a>
                <h4><?php the_title()?></h4>
                <p><?php echo wp_trim_words(get_the_content(),25)?></p>
            </div>
            <!-- single finance area end -->
            <?php endwhile;endif;?>           
        </div>
    </div>
</section>
<!-- home about us area start -->
<section class="aep-about-us-home-area-all">
    <div class="container">
        <div class="grid grid-cols-2 tab:grid-cols-1 mob:grid-cols-1 gap-36">
            <div class="aep-expect-area relative" style="background-image: url(<?php $expect_bg = aepexpert_get_option('expect-services-bg');
                                                                                        if (!empty($expect_bg)) {
                                                                                            echo esc_url($expect_bg['url']);
                                                                                        };
                                                                                        ?>);
                    background-position: top left;background-repeat: no-repeat;">
                <img src="<?php $expect_img = aepexpert_get_option('expect-services-thumb');
                                                                                        if (!empty($expect_img)) {
                                                                                            echo esc_url($expect_img['url']);
                                                                                        };
                                                                                        ?>" alt="">
            </div>
            <div class="aep-about-us-left-area tab:text-center mob:text-center">
            <span><?php if (!empty(aepexpert_get_option('expect-services-name'))) {
                            echo esc_html(aepexpert_get_option('expect-services-name'));
                        }; ?></span>
               <h2 class="mt-5"><?php if (!empty(aepexpert_get_option('expect-services-title'))) {
                                        echo esc_html(aepexpert_get_option('expect-services-title'));
                                    }; ?>
                </h2>
                <p><?php if (!empty(aepexpert_get_option('expect-services-content'))) {
                                        echo esc_html(aepexpert_get_option('expect-services-content'));
                                    }; ?></p>
                                    <!-- single -->
                                     <?php $expect_services = aepexpert_get_option('expect-repeater');
                        if (!empty($expect_services)) : foreach ($expect_services as $expect) :; ?>
                <div class="single-vission-content flex gap-5  mt-5">
                    <a href="#"><i class="<?php if (!empty($expect)) {
                                                    echo esc_attr($expect['expect-services-icon']);
                                                }; ?>"></i></a>
                    <p><?php if (!empty($expect)) {
                                                echo esc_html($expect['expect-services-content']);
                                            }; ?></p>
                </div>
                <?php endforeach;endif;?>               

            </div>

        </div>
    </div>
</section>
<!-- home about us area end -->
<!-- brand logo area start -->
<section class="aep-brand-logo-area mt-10 mob:ps-3 ps-20 tab:ps-3">
    <div class="aep-brand-logo owl-carousel flex justify-around">
        <?php $brand_logo = aepexpert_get_option('logo-repeater');
        if(!empty($brand_logo)):foreach($brand_logo as $logo_brand):;?>
        <img src="<?php if(!empty($logo_brand)){
            echo esc_url($logo_brand['brand-logo']['url']);
            };?>" alt="">
        <?php endforeach;endif;?>

    </div>
</section>
<!-- brand logo area end -->
<!-- home service area start  -->
<section class="aep-service-single-video-area">
    <div class="container mob:ps-0 tab:0">
        <div class="aep-home-service-area-heading-area text-center">
            <h6><?php if (!empty(aepexpert_get_option('histoy-name'))) {
                        echo esc_html(aepexpert_get_option('histoy-name'));
                    }; ?></h6>
            <h2 class="text-white"><?php if (!empty(aepexpert_get_option('histoy-title'))) {
                        echo wp_kses(aepexpert_get_option('histoy-title'),aepexpert_allow_tags());
                    }; ?></h2>
        </div>
        <div class="video-area text-center" style="background-image: url(<?php $history_bg = aepexpert_get_option('histoy-bg');
                                                            if (!empty($history_bg)) {
                                                                echo esc_url($history_bg['url']);
                                                            }; ?>); background-repeat: no-repeat; background-position: right;">
            <a href="<?php if (!empty(aepexpert_get_option('histoy-link-video'))) {
                        echo esc_url(aepexpert_get_option('histoy-link-video'));
                    }; ?>" class="video-play"><img src="<?php $history_bg = aepexpert_get_option('histoy-img');
                                                            if (!empty($history_bg)) {
                                                                echo esc_url($history_bg['url']);
                                                            }; ?>" alt=""></a>
        </div>
    </div>
</section>
<!-- home service area end -->
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
<!-- aep-accordeian Faqs area start -->
<section class="aep-faqs-area-all">
    <div class="container">
        <div class="accordian-faq">
        <?php $aep_testi = new WP_Query(array( 
                    'post_type'=> 'aeptheme-faq',                    
                    'order' => 'asc'                    
                ));if($aep_testi->have_posts()):while($aep_testi->have_posts()):$aep_testi->the_post()?>
            <!-- single faq start -->
            <div class="single-accordian">
                <div class="single-accordian-tittle minus">
                    <h2><?php the_title();?></h2>
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div class="single-accordian-content">
                    <?php the_content();?>
                </div>
            </div>
            <!-- single acordion end -->
            <?php endwhile;endif;?>
                   </div>
    </div>

</section>
<!-- aep-accordeian Faqs area end -->
<?php get_footer() ?>