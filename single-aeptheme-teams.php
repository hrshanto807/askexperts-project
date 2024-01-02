<?php
get_header();
?>

<section class="single-team-aep-area-all my-20">
    <div class="container">
        <div class="single-aep-team-page grid grid-cols-2 mob:grid-cols-1
                tab:grid-cols-1 gap-20">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="thumb-single-team relative" style="background-image: url(<?php $team_img = get_post_meta(get_the_ID(), 'thumb-bg', true);
                                                                                            if (!empty($team_img)) {
                                                                                                echo esc_url($team_img);
                                                                                            }; ?>); background-position: top left;
                    background-repeat: no-repeat;">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('aep-team--single-thumb');
                        }; ?>
                    </div>
                    <div class="single-team-content mt-28">
                        <div class="single-team-content-top">
                            <div class="single-team-heading flex gap-12 items-start mb-7">
                                <div class="single-team-heading-right border-r-2 border-gray-200 pe-12">
                                    <h3><?php the_title() ?></h3>
                                    <h5><?php $position_team = get_post_meta(get_the_ID(), 'position-team', true);
                                        if (!empty($position_team)) {
                                            echo esc_html($position_team);
                                        }; ?></h5>
                                </div>
                                <div class="team-member-socail mt-6 flex gap-3 justify-center
                            mob:justify-start tab:justify-start">
                                    <?php $team_social = get_post_meta(get_the_ID(), 'team-social_repeat_group', true);
                                    if (!empty($team_social)) : foreach ($team_social as $social_team) :
                                            if (isset($social_team['team-social_icon'])) {
                                                $team_icon = esc_attr($social_team['team-social_icon']);
                                            };
                                            if (isset($social_team['team-social_link'])) {
                                                $team_link = esc_url($social_team['team-social_link']);
                                            };
                                    ?>
                                            <a href="<?php echo $team_link; ?>"><i class="<?php echo $team_icon; ?>"></i></a>


                                    <?php endforeach;
                                    endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="single-team-content-bottom">
                            <?php the_content();?>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
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

<?php get_footer(); ?>