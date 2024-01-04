<?php
/*
Template Name: Team
*/
get_header()
?>
<!-- aep hero section start -->
<section class="aep-home-hero-area" style="background: url('<?php $team_hero_bg = aepexpert_get_option('team-hero-bg');
                                                            if (!empty($team_hero_bg)) {
                                                                echo esc_url($team_hero_bg['url']);
                                                            };
                                                            ?>');background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="aep-service-hero-content">
            <span><?php echo get_the_title(get_queried_object_id()); ?></span>
            <h1><?php if (!empty(aepexpert_get_option('team-hero-title'))) {
                    echo esc_html(aepexpert_get_option('team-hero-title'));
                }; ?></h1>
        </div>
    </div>
</section>
<!-- aep hero section end -->
<!-- about section team area start -->
<section class="aep-team-area-all my-36">
    <div class="container">
        <div class="aep-about-team mb-11">
            <div class="team-heading flex justify-between items-end tab:flex-col tab:items-start tab:gap-y-3 ps-4">
                <div class="heading-team">
                    <h2 class="my-5"><?php if (!empty(aepexpert_get_option('team-title'))) {
                                            echo esc_html(aepexpert_get_option('team-title'));
                                        }; ?></h2>
                    <p><?php if (!empty(aepexpert_get_option('team-content'))) {
                            echo wp_kses(aepexpert_get_option('team-content'), aepexpert_allow_tags());
                        }; ?></p>
                </div>
                <a href="<?php if (!empty(aepexpert_get_option('team-button-link'))) {
                                echo esc_url(aepexpert_get_option('team-button-link'));
                            }; ?>" class="aep-btn text-end"><?php if (!empty(aepexpert_get_option('team-button'))) {
                                                                echo esc_html(aepexpert_get_option('team-button'));
                                                            }; ?></a>
            </div>
            <!-- single team member area start -->
            <div class="single-team-about-areagrid grid grid-cols-3 tab:grid-cols-2 mob:grid-cols-1 mt-6 gap-10">
                <?php $aep_team = new WP_Query(array(
                    'post_type' => 'aeptheme-teams',
                    'posts_per_page' => 6,
                    'order' => 'asc',
                ));
                if ($aep_team->have_posts()) : while ($aep_team->have_posts()) : $aep_team->the_post();


                ?>
                        <!-- single team member area start -->

                        <div class="single-team-member-area text-center">
                            <?php the_post_thumbnail('') ?>
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="mt-5"><?php the_title(); ?></h3>
                            </a>
                            <p><?php echo wp_trim_words(get_the_content(), 15, NULL) ?></p>
                            <div class="team-member-socail mt-6 flex gap-3 justify-center
                            mob:justify-start tab:justify-start">
                                <?php $team_social = get_post_meta(get_the_ID(),'team-social_repeat_group',true);
                                if (!empty($team_social)):foreach ($team_social as $social_team) :
                                        if (isset($social_team['team-social_icon'])) {
                                            $team_icon = esc_attr($social_team['team-social_icon']);
                                        };
                                        if (isset($social_team['team-social_link'])) {
                                            $team_link = esc_url($social_team['team-social_link']);
                                        };
                                ?>
                                        <a href="<?php echo $team_link;?>"><i class="<?php echo $team_icon; ?>"></i></a>


                                <?php endforeach;
                                endif ?>
                            </div>
                            <!-- single team member area end -->
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
</section>
<!-- about section team area end -->
<!-- section ready-talk area start -->
<section class="talk-ready-area-all">
    <div class="container">
        <div class="aep-talk-ready-area" style="background-image: url(<?php $team_bg = aepexpert_get_option('ready-talk-img');
         if(!empty($team_bg)){echo esc_url($team_bg['url']);};?>);">
            <div class="talk-ready-area p-20">
                <h6><?php if(!empty(aepexpert_get_option('ready-talk-name')))
                {echo esc_html(aepexpert_get_option('ready-talk-name')) ;};?></h6>
                <h2><?php if(!empty(aepexpert_get_option('ready-talk-title')))
                {echo esc_html(aepexpert_get_option('ready-talk-title')) ;};?></h2>
                <p><?php if(!empty(aepexpert_get_option('ready-talk-content')))
                {echo wp_kses(aepexpert_get_option('ready-talk-content'),aepexpert_allow_tags()) ;};?></p>
                <div class="talk-form">                    
                    <form action="">
                    <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" placeholder="your mail address">
                   <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- section ready-talk area end -->
<?php get_footer() ?>