<?php
/*
Template Name:Contact
*/
get_header();
?>
<!-- aep hero section start -->
<section class="aep-home-hero-area" style="background: url(' <?php $contact_hero_bg = aepexpert_get_option('contact-hero-bg');
                                                                if (!empty($contact_hero_bg)) {
                                                                    echo esc_url($contact_hero_bg['url']);
                                                                };
                                                                ?>');background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="aep-service-hero-content">
            <span><?php echo get_the_title(get_queried_object_id()); ?></span>
            <h1><?php if (!empty(aepexpert_get_option('contact-hero-title'))) {
                    echo esc_html(aepexpert_get_option('contact-hero-title'));
                }; ?></h1>
        </div>
    </div>
</section>
<!-- aep hero section end -->
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
            <div class="contact-form">
                <!-- contact form area start -->
                <div class="all-contact-form">
                    <div class="contact-form mob:ps-10 tab:ps-10">
                        <div class="mt-10 grid grid-cols-2 gap-x-6 gap-y-8 ">
                            <?php the_content()?>                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- contact form area end -->

        </div>
    </div>
</section>
<!-- aep contact us home area end -->
<!-- Newsletter area start -->
<section class="aep-newsletter-area-all">
    <div class="container">
        <div class="aep-newsletter-area flex gap-5 justify-center items-center mob:flex-col tab:flex-col
                " style="background-image: url(<?php $team_bg = aepexpert_get_option('newsletter-img');
         if(!empty($team_bg)){echo esc_url($team_bg['url']);};?>);">
            <div class="heading-newsletter">
                <h2 class="text-white"><?php if(!empty(aepexpert_get_option('newsletter-name')))
                {echo esc_html(aepexpert_get_option('newsletter-name')) ;};?></h2>
                <p class="text-white"><?php if(!empty(aepexpert_get_option('newsletter-title')))
                {echo esc_html(aepexpert_get_option('newsletter-title')) ;};?></p>
            </div>
            <div class="newsletter-form flex gap-10 mob:flex-col tab:flex-col">
            <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" placeholder="your mail address">
                   <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
            </div>
        </div>
    </div>
</section>
<!-- Newsletter area end -->
<?php get_footer() ?>