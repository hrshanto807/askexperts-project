<?php

/**
 * Template Name: License
 */
get_header();
?>
<!-- aep hero section start -->
<section class="aep-home-hero-area" style="background: url(<?php $team_hero_bg = aepexpert_get_option('license-hero-bg');
                                                            if (!empty($team_hero_bg)) {
                                                                echo esc_url($team_hero_bg['url']);
                                                            };
                                                            ?>);background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="aep-service-hero-content">
            <span><?php echo get_the_title(get_queried_object_id()); ?></span>
            <h1><?php if (!empty(aepexpert_get_option('license-hero-title'))) {
                    echo esc_html(aepexpert_get_option('license-hero-title'));
                }; ?></h1>
        </div>
    </div>
</section>
<!-- aep hero section end -->
<!-- licence content here start -->
<section class="license-content-all">
    <div class="container">
        <div class="aep-license-content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<!-- licence content here end -->
<!-- Newsletter area start -->
<section class="aep-newsletter-area-all">
    <div class="container">
        <div class="aep-newsletter-area flex gap-5 justify-center items-center mob:flex-col tab:flex-col
                " style="background-image: url(<?php $team_bg = aepexpert_get_option('newsletter-img');
                                                if (!empty($team_bg)) {
                                                    echo esc_url($team_bg['url']);
                                                }; ?>);">
            <div class="heading-newsletter">
                <h2 class="text-white"><?php if (!empty(aepexpert_get_option('newsletter-name'))) {
                                            echo esc_html(aepexpert_get_option('newsletter-name'));
                                        }; ?></h2>
                <p class="text-white"><?php if (!empty(aepexpert_get_option('newsletter-title'))) {
                                            echo esc_html(aepexpert_get_option('newsletter-title'));
                                        }; ?></p>
            </div>
            <div class="newsletter-form flex gap-10 mob:flex-col tab:flex-col">
                <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" placeholder="your mail address">
                <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
            </div>
        </div>
    </div>
</section>
<!-- Newsletter area end -->
<?php get_footer(); ?>