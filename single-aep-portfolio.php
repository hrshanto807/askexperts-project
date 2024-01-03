<?php
/*single case studies*/
get_header();
?>
<!-- aep hero section start -->
<section class="aep-home-hero-area" style="background: url('<?php $case_single_hero_bg = aepexpert_get_option('case-single-hero-bg');
                                                            if (!empty($case_single_hero_bg)) {
                                                                echo esc_url($case_single_hero_bg['url']);
                                                            }; ?>');background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="aep-service-hero-content">
            <span><?php if (!empty(aepexpert_get_option('case-single-hero-name'))) {
                        echo esc_html(aepexpert_get_option('case-single-hero-name'));
                    }; ?></span>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>
<!-- aep hero section end -->
<!-- single case area start -->
<section class="all-aep-single-case">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="aep-single-case">
                    <div class="thumb"><?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('aep-portthumb');
                                        }; ?></div>
                    <div class="single-case-name-area">
                        <div class="case-name">
                            <h5>Case Name</h5>
                            <p><?php the_title() ?></p>
                        </div>
                        <div class="case-catagory">
                            <h5>Tag</h5>
                            <?php $custom_post_tags = get_the_terms(get_the_ID(), 'aep_portofollio_tags');
                            if (!empty($custom_post_tags)) : foreach ($custom_post_tags as $tag) : ?>
                                    <a class="text-white" href="<?php echo esc_html($tag->slug); ?>"><?php echo esc_html($tag->name); ?></a>
                            <?php endforeach;
                            endif; ?>
                        </div>
                        <div class="case-date">
                            <h5>Date</h5>
                            <p><?php the_date(); ?></p>
                        </div>
                        <div class="case-button">
                            <a href="<?php $btn_link = get_post_meta(get_the_ID(), 'port-btn-link', true);
                                        if (!empty($btn_link)) {
                                            echo esc_url($btn_link);
                                        } ?>" class="aep-btn-2">
                                <?php $btn = get_post_meta(get_the_ID(), 'port-btn', true);
                                if (!empty($btn)) {
                                    echo esc_html($btn);
                                } ?>
                            </a>
                        </div>
                    </div>
                    <div class="all-sinle-content-here">
                        <?php the_content(); ?>

                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<!-- single case area end -->
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
<!-- single more case here start  -->
<section class="more-single-case-here">
    <div class="container">
        <div class="single-more-case">
            <h2>More case studies</h2>
            <!-- single case area start -->
            <div class="single-case-thumb-here">
                <?php $single_portfolio = new WP_Query(array(
                    'post_type'   =>  'aep-portfolio',
                    'posts_per_page'=> 3,
                    'order' => 'asc'
                ));if ($single_portfolio->have_posts()) : while ($single_portfolio->have_posts()) : $single_portfolio->the_post();
                ?>                        <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
                        echo esc_url(the_post_thumbnail('aep-port-single-thumb'));} ?></a>
                <?php endwhile;
                endif; ?>                
            </div>
            <!-- single case area end -->
            <a href="#" class="aep-btn">Browse all case studies</a>
        </div>
    </div>
</section>
<!-- single more case here end  -->

<?php get_footer(); ?>