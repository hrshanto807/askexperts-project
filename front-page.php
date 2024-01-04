<?php get_header() ?>
<!-- aep hero section start -->
<section class="aep-home-hero-area" style="background: url(<?php $service_single_hero_bg = aepexpert_get_option('home-hero-bg');
                                                            if (!empty($service_single_hero_bg)) {
                                                                echo esc_url($service_single_hero_bg['url']);
                                                            }; ?>);background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="aep-home-hero-content">
        <h1> <?php if (!empty(aepexpert_get_option('home-hero-heading'))) {
                    echo esc_html(aepexpert_get_option('home-hero-heading'));
                }; ?></h1>
        <p class="mb-4"><?php if (!empty(aepexpert_get_option('home-hero-content'))) {
                            echo esc_html(aepexpert_get_option('home-hero-content'));
                        }; ?> </p>
        <div class="aep-home-hero-button flex gap-2 mob:flex-col">
            <div class="button-left">
                <a href="<?php if (!empty(aepexpert_get_option('home-hero-btn-1-link'))) {
                                echo esc_url(aepexpert_get_option('home-hero-btn-1-link'));
                            }; ?>" class="aep-btn"><?php if (!empty(aepexpert_get_option('home-hero-btn-1'))) {
                                                        echo esc_html(aepexpert_get_option('home-hero-btn-1'));
                                                    }; ?></a>
            </div>
            <div class="button-right aep-btn flex">
                <i class="fa-solid fa-book-medical"></i>
                <a href="<?php if (!empty(aepexpert_get_option('home-hero-btn-2-link'))) {
                                echo esc_url(aepexpert_get_option('home-hero-btn-2-link'));
                            }; ?>"><?php if (!empty(aepexpert_get_option('home-hero-btn-2'))) {
                                        echo esc_html(aepexpert_get_option('home-hero-btn-2'));
                                    }; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- aep hero section end -->
<!-- brand logo area start -->
<section class="aep-brand-logo-area mt-10 mob:ps-3 ps-20 tab:ps-3">
    <div class="aep-brand-logo owl-carousel flex justify-around">
        <?php $brand_logo = aepexpert_get_option('logo-repeater');
        if (!empty($brand_logo)) : foreach ($brand_logo as $logo_brand) :; ?>
                <img src="<?php if (!empty($logo_brand)) {
                                echo esc_url($logo_brand['brand-logo']['url']);
                            }; ?>" alt="">
        <?php endforeach;
        endif; ?>

    </div>
</section>
<!-- brand logo area end -->
<!-- home about us area start -->
<section class="aep-about-us-home-area-all">
    <div class="container">
        <div class="grid grid-cols-2 tab:grid-cols-1 mob:grid-cols-1 ">
            <div class="aep-about-us-left-area tab:text-center mob:text-center">
                <span><?php if (!empty(aepexpert_get_option('home-about-name'))) {
                            echo esc_html(aepexpert_get_option('home-about-name'));
                        }; ?></span>
                <h2 class="mt-5"><?php if (!empty(aepexpert_get_option('home-about-heading'))) {
                                        echo wp_kses(aepexpert_get_option('home-about-heading'), aepexpert_allow_tags());
                                    }; ?></h2>
                <h4 class="my-4"><?php if (!empty(aepexpert_get_option('home-about-title'))) {
                                        echo wp_kses(aepexpert_get_option('home-about-title'), aepexpert_allow_tags());
                                    }; ?></h4>
                <p><?php if (!empty(aepexpert_get_option('home-about-content'))) {
                        echo wp_kses(aepexpert_get_option('home-about-content'), aepexpert_allow_tags());
                    }; ?></p>
                <div class="aep-two-number-ara flex items-center gap-x-10 tab:justify-center tab:mb-10 mob:mb-10 mob:justify-center tab:grid-cols-1 mob:grid-cols-1">
                    <?php $plus_section = aepexpert_get_option('home-about-repeater');
                    if (!empty($plus_section)) : foreach ($plus_section as $Plus) :; ?>
                            <!-- single number start -->
                            <div class="aep-single-number-area ">
                                <div class="aep-single-number-icon flex items-center gap-2">
                                    <i class="text-yellow-300 <?php if (!empty($Plus)) {
                                                                    echo esc_attr($Plus['about-icon']);
                                                                }; ?>"></i>
                                    <h5><?php if (!empty($Plus)) {
                                            echo esc_html($Plus['about-plus']);
                                        }; ?></h5>
                                </div>
                                <a href="#">
                                    <p><?php if (!empty($Plus)) {
                                            echo esc_html($Plus['plus-title']);
                                        }; ?></p>
                                </a>
                            </div>
                            <!-- single number end -->
                    <?php endforeach;
                    endif; ?>


                </div>
            </div>
            <div class="aep-about-us-right-area relative" style="background-image: url(<?php $about_bg = aepexpert_get_option('home-about-bg');
                                                                                        if (!empty($about_bg)) {
                                                                                            echo esc_url($about_bg['url']);
                                                                                        }; ?>);
                    background-position: left bottom;background-repeat: no-repeat;">
                <div class="aep-about-us-content flex items-center gap-3">
                    <div class="lef-value relative">
                        <h5><?php if (!empty(aepexpert_get_option('home-about-market-ex'))) {
                                echo esc_html(aepexpert_get_option('home-about-market-ex'));
                            }; ?></h5>
                    </div>
                    <div class="left-content">
                        <p><?php if (!empty(aepexpert_get_option('home-about-market-ex-title'))) {
                                echo esc_html(aepexpert_get_option('home-about-market-ex-title'));
                            }; ?></p>
                    </div>
                </div>
                <div class="aep-about-thumb float-right ">
                    <img src="<?php $about_thumb = aepexpert_get_option('home-about-thumb');
                                if (!empty($about_thumb)) {
                                    echo esc_url($about_thumb['url']);
                                }; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home about us area end -->
<!-- home service area start  -->
<section class="aep-home-service-area">
    <div class="container">
        <div class="aep-home-service-area-heading-area text-center mb-10">
            <h6><?php if (!empty(aepexpert_get_option('service-name'))) {
                    echo esc_html(aepexpert_get_option('service-name'));
                }; ?></h6>
            <h2><?php if (!empty(aepexpert_get_option('service-title'))) {
                    echo wp_kses(aepexpert_get_option('service-title'), aepexpert_allow_tags());
                }; ?></h2>
        </div>
        <div class="aep-home-service-content-area-all grid grid-cols-3 gap-4 mob:grid-cols-1 tab:grid-cols-1">
            <?php $aep_services = new WP_Query(array(
                'post_type' => 'aeptheme-sevice',
                'posts_per_page' => 6,
                'order' => 'asc',
            ));
            if ($aep_services->have_posts()) : while ($aep_services->have_posts()) : $aep_services->the_post(); ?>
                    <!-- single service area start -->
                    <div class="aep-home-single-service-area">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                        <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>
                        </a>
                        <p><?php echo wp_trim_words(get_the_content(), 17) ?></p>
                    </div>
                    <!-- single service area end -->
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
<!-- home service area end -->
<!-- aep home skill area start -->
<section class="aep-home-skill-area-all">
    <div class="container">
        <div class="aep-home-skill-area flex justify-center gap-28 mob:flex-col tab:flex-col">
            <!-- aep skill area strt -->
            <div class="aep-home-skill-area-str">
                <h6 class="mb-5"><?php if (!empty(aepexpert_get_option('home-Proccess-name'))) {
                                        echo esc_html(aepexpert_get_option('home-Proccess-name'));
                                    }; ?></h6>
                <h2><?php if (!empty(aepexpert_get_option('home-Proccess-heading'))) {
                        echo esc_html(aepexpert_get_option('home-Proccess-heading'));
                    }; ?></h2>
                <p><?php if (!empty(aepexpert_get_option('home-Proccess-content'))) {
                        echo esc_html(aepexpert_get_option('home-Proccess-content'));
                    }; ?></p>
                <div class="aep-skill-single-all-area">
                    <?php $procces = aepexpert_get_option('home-Proccess-repeater');
                    if (!empty($procces)) : foreach ($procces as $procceses) :; ?>
                            <!-- aep skill single area start -->
                            <div class="aep-skill-single-area">
                                <div class="aep-skill-single-number">
                                    <h4><?php if (!empty($procceses)) {
                                            echo esc_html($procceses['Proccess-num']);
                                        } ?></h4>
                                </div>
                                <div class="aep-skill-single-contnent">
                                    <h5><?php if (!empty($procceses)) {
                                            echo esc_html($procceses['Proccess-title']);
                                        } ?></h5>
                                    <p><?php if (!empty($procceses)) {
                                            echo esc_html($procceses['Proccess-content']);
                                        } ?>
                                    </p>
                                </div>
                            </div>
                            <!-- aep skill single area end -->
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
            <!-- aep skill area end -->
            <!-- aep exprience area strt -->
            <div class="aep-exprence-area-home-start">
                <span><?php if (!empty(aepexpert_get_option('home-Growing-name'))) {
                                        echo esc_html(aepexpert_get_option('home-Growing-name'));
                                    }; ?></span>
                <h2 class="my-5"><?php if (!empty(aepexpert_get_option('home-Growing-heading'))) {
                                        echo esc_html(aepexpert_get_option('home-Growing-heading'));
                                    }; ?></h2>
                <p><?php if (!empty(aepexpert_get_option('home-Growing-content'))) {
                                        echo wp_kses(aepexpert_get_option('home-Growing-content'),aepexpert_allow_tags());
                                    }; ?></p>
                <div class="aep-home-single-all-exprince grid grid-cols-2 gap-4">
                <?php $growth = aepexpert_get_option('home-Growing-repeater');
                    if (!empty($growth)) : foreach ($growth as $growing) :; ?>
                    <!-- single exptience area start -->
                    <div class="single-home-exprence-area">
                        <i class="<?php if (!empty($growing)) {
                                            echo esc_attr($growing['Growing-icon']);
                                        } ;?>"></i>
                        <h5><?php if (!empty($growing)) {
                                            echo esc_html($growing['Growing-title']);
                                        } ;?></h5>
                        <p><?php if (!empty($growing)) {
                                            echo esc_html($growing['Growing-content']);
                                        } ;?></p>
                    </div>
                    <!-- single exptience area end -->
                    <?php endforeach;
                    endif; ?>
                   
                </div>
            </div>
            <!-- aep exprience area end -->
        </div>
    </div>
</section>
<!-- aep home skill area end -->
<!-- aep home gellary area start -->
<section class="aep-home-gellary-area-heading relative " style="background-color: #181818;">
    <div class="container">
        <div class="gellary-area-flex flex justify-between items-end mob:flex-col tab:flex-col
                mob:items-start tab:items-start">
            <div class="aep-home-gellary-heading">
                <h6><?php if (!empty(aepexpert_get_option('home-gellary-name'))) {
                        echo esc_html(aepexpert_get_option('home-gellary-name'));
                    }; ?></h6>
                <h2 class="text-white"><?php if (!empty(aepexpert_get_option('home-gellary-heading'))) {
                                            echo esc_html(aepexpert_get_option('home-gellary-heading'));
                                        }; ?>
                </h2>
            </div>
            <div class="aep-home-gellary-heading-button">
                <a href="<?php if (!empty(aepexpert_get_option('home-gellary-button-link'))) {
                                echo esc_url(aepexpert_get_option('home-gellary-button-link'));
                            }; ?>" class="aep-btn-2"><?php if (!empty(aepexpert_get_option('home-gellary-button'))) {
                                                echo esc_html(aepexpert_get_option('home-gellary-button'));
                                            }; ?></a>
            </div>
        </div>
        <!-- geallry image area start -->
        <div class="aep-home-gellary-img grid grid-cols-3 gap-6 mob:grid-cols-1 tab:grid-cols-2">
            <?php $aep_gellary = new WP_Query(array(
                'post_type'   =>  'aep-portfolio',
                'posts_per-page' => 6,
                'order' => 'asc'
            ));
            if ($aep_gellary->have_posts()) : while ($aep_gellary->have_posts()) : $aep_gellary->the_post();
            ?>
                    <!-- single gellary img start -->
                    <div class="aep-single-gellary-img relative">
                        <a href="<?php the_permalink() ?>"><i class="fa-solid fa-plus"></i></a>
                        <a href="<?php echo get_theme_file_uri('asset/img/gellary-1') ?>" data-lightbox="image-1"><?php if (has_post_thumbnail()) {
                                                                                                                        echo esc_url(the_post_thumbnail('aep-port-single-thumb'));
                                                                                                                    }; ?></a>
                        <div class="gellary-aep-home-content absolute">
                            <h4 class="text-white"><?php the_title() ?></h4>
                            <p class="text-yellow-500">Business</p>
                        </div>
                    </div>
                    <!-- single gellary img end -->
            <?php endwhile;
            endif; ?>
        </div>
        <!-- geallry image area end -->
    </div>
</section>
<!-- aep home gellary area end -->
<!--  -->
<!-- member area start -->
<section class="aep-team-member-area-all mt-12">
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
<!-- aep-home testimonial area start -->
<section class="aep-home-testimonial-area-all">
    <div class="container text-center aep-home-testimonial-area-container">
        <h6 class="mb-6"><?php if (!empty(aepexpert_get_option('home-Feedback-title'))) {
                        echo esc_html(aepexpert_get_option('home-Feedback-title'));
                    }; ?></h6>
        <div class="aep-home-testimonials owl-carousel relative">
        <?php $feedbacks = aepexpert_get_option('home-Feedback-repeater');
        if (!empty($feedbacks)) : foreach ($feedbacks as $growing) :; ?>
            <!-- single testimonial area start -->
            <div class="single-aep-home-testimonial flex flex-col justify-center items-center 
                    ">
                <h2><?php if (!empty($growing)) {
                                            echo esc_attr($growing['home-Feedback-Content']);
                                        } ;?></h2>
                <img src="<?php if (!empty($growing)) {
                                            echo esc_html($growing['home-Feedback-img']['url']);
                                        } ;?>" alt="" class="mb-6">
                <h5><?php if (!empty($growing)) {
                                            echo esc_attr($growing['home-Feedback-name']);
                                        } ;?></h5>
                <p class="text-green-500"><?php if (!empty($growing)) {
                                            echo esc_attr($growing['home-Feedback-pro']);
                                        } ;?></p>
            </div>
            <!-- single testimonial area end --> 
            <?php endforeach;endif;?>           
        </div>
    </div>
</section>
<!-- aep-home testimonial area end -->
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
<!-- home page blog area start -->
<section class="aep-home-blog-area">
    <div class="container">
        <div class="blog-area-flex flex justify-between items-center mb-6 mob:flex-col mob:items-start">
            <div class="aep-home-blog-heading">
                <h6><?php if (!empty(aepexpert_get_option('blog-name'))) {
                        echo esc_html(aepexpert_get_option('blog-name'));
                    }; ?></h6>
                <h2><?php if (!empty(aepexpert_get_option('blog-title'))) {
                        echo esc_html(aepexpert_get_option('blog-title'));
                    }; ?> </h2>
            </div>
            <div class="aep-home-blog-heading-button">
                <a href="<?php if (!empty(aepexpert_get_option('blog-button-link'))) {
                                echo esc_url(aepexpert_get_option('blog-button-link'));
                            }; ?>" class="aep-btn-2"><?php if (!empty(aepexpert_get_option('blog-button'))) {
                                                                                                        echo esc_html(aepexpert_get_option('blog-button'));
                                                                                                    }; ?></a>
            </div>
        </div>
        <div class="aep-blog-all-area-start grid grid-cols-2 gap-9
        mob:grid-cols-1 tab:grid-cols-1">
            <?php $aep_blog = new WP_Query(array(
                "post_type" => 'post',
                'posts_per_page' => 2

            ));
            if ($aep_blog->have_posts()) : while ($aep_blog->have_posts()) : $aep_blog->the_post() ?>
                    <!-- single blog area start -->
                    <div class="single-aep-blog-area">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('aep-blog-thumb');
                        }; ?>
                        <a href="<?php the_permalink() ?>">
                            <h3 class="my-4"><?php the_title(); ?></h3>
                        </a>
                        <p><?php echo wp_trim_words(get_the_content(), 20, NULL); ?></p>
                        <div class="single-blog-meta-area flex items-center justify-between mt-3
                mob:flex-col mob:items-start mob:gap-3">
                            <div class="single-blog-meta-area-name flex items-center gap-2">
                                <img src="<?php $img = get_post_meta(get_the_ID(), 'image-profile', true);
                                            if (!empty($img)) {
                                                echo esc_url($img);
                                            }; ?>" alt="">

                                <p class="border-e-2 border-black pe-3 me-1"><?php $name = get_post_meta(get_the_ID(), 'name-author', true);
                                                                                if (!empty($name)) {
                                                                                    echo esc_html($name);
                                                                                }; ?></p>

                                <p><?php $date = get_post_meta(get_the_ID(), 'date-create-post', true);
                                    if (!empty($date)) {
                                        echo esc_html($date);
                                    }; ?></p>
                            </div>

                            <div class="single-blog-meta-area-button">
                                <a href="<?php $link_button = get_post_meta(get_the_ID(), 'button-link', true);
                                            if (!empty($link_button)) {
                                                echo esc_url($link_button);
                                            }; ?>" class="aep-btn">

                                    <?php $button_name = get_post_meta(get_the_ID(), 'button-name', true);
                                    if (!empty($button_name)) {
                                        echo esc_html($button_name);
                                    }; ?></a>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
            <?php endwhile;
            endif; ?>

        </div>
    </div>
</section>
<!-- home page blog area end -->
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
<?php get_footer() ?>