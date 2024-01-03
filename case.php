<?php

/**
 * Template Name: Case
 */
get_header();
?>
<!-- aep hero section start -->
<section class="aep-home-hero-area" style="background: url('<?php $case_hero_bg = aepexpert_get_option('case-hero-bg');
                                                            if (!empty($case_hero_bg)) {
                                                                echo esc_url($case_hero_bg['url']);
                                                            }; ?>');background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="aep-service-hero-content">
            <span><?php echo get_the_title(get_queried_object_id()); ?></span>
            <h1><?php echo get_the_title(get_queried_object_id()); ?></h1>
        </div>
    </div>
</section>
<!-- aep hero section end -->
<!-- catagory isotop start -->
<section class="all-mixitup-area">
    <div class="container">
        <!-- mixitop area start -->
        <div class="portfollio-area-aep">
            <div class="portfollio-controlar">
                <button href="" data-filter="all">All</button>
                <?php
                $aep_port_cat = get_terms('portifolio-cat');
                if (!empty($aep_port_cat)) : foreach ($aep_port_cat as $port_cat) :
                ?>
                        <button data-filter=".<?php echo esc_attr($port_cat->slug) ?>"><?php echo esc_html($port_cat->name) ?></button>
                <?php endforeach;
                endif; ?>
            </div>
            <!-- mixitop area button end -->
            <!-- geallry image area start -->
            <div class="aep-case-gellary-img grid grid-cols-3 gap-6 mob:grid-cols-1 tab:grid-cols-2">
                <?php $aep_portfolio = new WP_Query(array(
                    'post_type'   =>  'aep-portfolio',
                    'posts_per-page' => 6,
                    'order' => 'asc'
                ));
                if ($aep_portfolio->have_posts()) : while ($aep_portfolio->have_posts()) : $aep_portfolio->the_post();
                ?>
                        <!-- single gellary img start -->
                        <div class="aep-single-gellary-img relative mix <?php
                                                                        $biziver_port_the_cat = get_the_terms(get_the_ID(), 'portifolio-cat');

                                                                        if (!empty($biziver_port_the_cat)) : foreach ($biziver_port_the_cat as $the_port_cat) :
                                                                                echo $the_port_cat->slug . " ";
                                                                            endforeach;
                                                                        endif; ?>">
                            <a href="<?php the_permalink()?>"><i class="fa-solid fa-plus"></i></a>
                            <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
                                                                    echo esc_url(the_post_thumbnail('aep-port-single-thumb'));
                                                                } ?></a>
                            <div class="gellary-aep-home-content absolute">
                                <h4 class="text-white"><?php the_title()?></h4>
                                <p class="text-yellow-500">Business</p>
                            </div>
                        </div>
                        <!-- single gellary img end -->
                <?php endwhile;
                endif; ?>
            </div>
            <!-- geallry image area end -->
        </div>
    </div>
</section>
<!-- catagory isotop end -->
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
<?php get_footer(); ?>