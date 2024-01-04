<?php

/**
 * Template Name: About
 */
get_header();
?>
<!-- aep hero section start -->
<section class="aep-home-hero-area" style="background: url(<?php $team_hero_bg = aepexpert_get_option('about-hero-bg');
                                                            if (!empty($team_hero_bg)) {
                                                                echo esc_url($team_hero_bg['url']);
                                                            };
                                                            ?>);background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="aep-about-hero-content">
            <span><?php echo get_the_title(get_queried_object_id()); ?></span>
            <h1><?php if (!empty(aepexpert_get_option('about-hero-title'))) {
                    echo esc_html(aepexpert_get_option('about-hero-title'));
                }; ?></h1>
        </div>
    </div>
</section>
<!-- aep hero section end -->
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
                <?php endforeach;
                endif; ?>

            </div>

        </div>
    </div>
</section>
<!-- home about us area end -->
<!-- member area start -->
<section class="aep-about-member-area-all mt-12">
    <div class="container">
        <div class="aep-home-member-area flex justify-around mob:grid mob:grid-cols-2 mob:ps-10">
            <!-- single skill and other start -->
            <?php $skilld = aepexpert_get_option('home-skill-repeater');
            if (!empty($skilld)) : foreach ($skilld as $skill) :; ?>
                    <div class="aep-single-plus-work">
                        <h1><?php if (!empty($skill)) {
                                echo esc_html($skill['home-skill-plus']);
                            } ?></h1>
                        <p><?php if (!empty($skill)) {
                                echo esc_html($skill['home-skill-title']);
                            } ?></p>
                    </div>
            <?php endforeach;
            endif; ?>
            <!-- single skill and other end -->
        </div>
    </div>
</section>
<!-- member area end -->
<!-- about us expreance area start -->
<section class="about-us-aep-exprience">
    <div class="container">
        <!-- aep exprience area strt -->
        <div class="aep-exprence-area-home-start">
            <span><?php if (!empty(aepexpert_get_option('home-Growing-name'))) {
                        echo esc_html(aepexpert_get_option('home-Growing-name'));
                    }; ?></span>
            <h2 class="my-5"><?php if (!empty(aepexpert_get_option('home-Growing-heading'))) {
                                    echo esc_html(aepexpert_get_option('home-Growing-heading'));
                                }; ?></h2>
            <p><?php if (!empty(aepexpert_get_option('home-Growing-content'))) {
                    echo wp_kses(aepexpert_get_option('home-Growing-content'), aepexpert_allow_tags());
                }; ?></p>
            <div class="aep-home-single-all-exprince grid grid-cols-4 mob:grid-cols-2 tab:grid-cols-2 gap-4 my-7">
                <?php $growth = aepexpert_get_option('home-Growing-repeater');
                if (!empty($growth)) : foreach ($growth as $growing) :; ?>
                        <!-- single exptience area start -->
                        <div class="single-home-exprence-area">
                            <i class="<?php if (!empty($growing)) {
                                            echo esc_attr($growing['Growing-icon']);
                                        }; ?>"></i>
                            <h5><?php if (!empty($growing)) {
                                    echo esc_html($growing['Growing-title']);
                                }; ?></h5>
                            <p><?php if (!empty($growing)) {
                                    echo esc_html($growing['Growing-content']);
                                }; ?></p>
                        </div>
                        <!-- single exptience area end -->
                <?php endforeach;
                endif; ?>

            </div>
        </div>
        <!-- aep exprience area end -->
    </div>
</section>
<!-- about us expreance area end -->
<!-- home service area start  -->
<section class="aep-home-service-area">
    <div class="container mob:ps-0 tab:0">
        <div class="aep-home-service-area-heading-area text-center">
            <h6><?php if (!empty(aepexpert_get_option('histoy-name'))) {
                        echo esc_html(aepexpert_get_option('histoy-name'));
                    }; ?></h6>
            <h2 ><?php if (!empty(aepexpert_get_option('histoy-title'))) {
                        echo wp_kses(aepexpert_get_option('histoy-title'),aepexpert_allow_tags());
                    }; ?></h2>
                    <p><?php if (!empty(aepexpert_get_option('histoy-content'))) {
                        echo wp_kses(aepexpert_get_option('histoy-content'),aepexpert_allow_tags());
                    }; ?></p>
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
                    'posts_per_page' => 3,
                    'order' => 'asc',
                ));
                if ($aep_team->have_posts()) : while ($aep_team->have_posts()) : $aep_team->the_post();
                ?> <!-- single team member area start -->
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
<!-- aep home area book now area start -->
<section class="aep-book-area-all">
    <div class="container aep-book-area-container">
        <div class="aep-home-book-area flex gap-20">
            <div class="aep-book-area-left">
                <h6><?php if (!empty(aepexpert_get_option('home-book-name'))) {
                        echo esc_html(aepexpert_get_option('home-book-name'));
                    }; ?></h6>
                <h2><?php if (!empty(aepexpert_get_option('home-book-title'))) {
                        echo esc_html(aepexpert_get_option('home-book-title'));
                    }; ?></h2>
                <p class="mb-5">
                <?php if (!empty(aepexpert_get_option('home-book-content'))) {
                        echo wp_kses(aepexpert_get_option('home-book-content'),aepexpert_allow_tags());
                    }; ?>
                </p>
                <a href="tel:<?php if (!empty(aepexpert_get_option('home-book-numhome-book-num'))) {
                        echo esc_html(aepexpert_get_option('home-book-numhome-book-num'));
                    }; ?>" class="aep-btn-2"><i class="fa-solid fa-phone"></i><?php if (!empty(aepexpert_get_option('home-book-num'))) {
                        echo esc_html(aepexpert_get_option('home-book-num'));
                    }; ?>
                </a>
            </div>
            <div class="aep-book-area-right flex " style="background-image: url(<?php echo get_template_directory_uri() ?>/asset/img/Pattern.png);">
                <div class="aep-book-area-right-img-1">
                    <img src="<?php $book_img_first = aepexpert_get_option('home-book-img-1');
                                                            if (!empty($book_img_first)) {
                                                                echo esc_url($book_img_first['url']);
                                                            }; ?>" alt="">
                </div>
                <div class="aep-book-area-right-img-2">
                    <img src="<?php $book_now_img_2 = aepexpert_get_option('home-book-img-2');
                                                            if (!empty($book_now_img_2)) {
                                                                echo esc_url($book_now_img_2['url']);
                                                            }; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- aep home area book now area end -->
<?php get_footer(); ?>