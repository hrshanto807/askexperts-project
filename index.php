<?php

/**
 * Template Name: Blog
 */

get_header();
?>
<!-- aep hero section start -->
<section class="aep-home-hero-area" style="background: url('<?php $blog_hero_bg = aepexpert_get_option('blog-hero-bg'); if(!empty($blog_hero_bg)){echo esc_url($blog_hero_bg['url']);};
?>');background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="aep-service-hero-content">
            <span><?php if(!empty(aepexpert_get_option('blog-hero-name')))
                {echo esc_html(aepexpert_get_option('blog-hero-name')) ;};?></span>
            <h1><?php if(!empty(aepexpert_get_option('blog-hero-title')))
                {echo esc_html(aepexpert_get_option('blog-hero-title')) ;};?></h1>
        </div>
    </div>
</section>
<!-- aep hero section end -->
<!-- home page blog area start -->
<section class="aep-home-blog-area">
    <div class="container">
        <div class="blog-area-flex flex justify-between items-center mb-6 mob:flex-col mob:items-start">
            <div class="aep-home-blog-heading">
                <h6><?php if(!empty(aepexpert_get_option('blog-name')))
                {echo esc_html(aepexpert_get_option('blog-name')) ;};?></h6>
                <h2><?php if(!empty(aepexpert_get_option('blog-title')))
                {echo esc_html(aepexpert_get_option('blog-title')) ;};?> </h2>
            </div>
            <div class="aep-home-blog-heading-button">
                <a href ="<?php if(!empty(aepexpert_get_option('blog-button-link')))
                {echo esc_url(aepexpert_get_option('blog-button-link')) ;};?>" class="aep-btn-2"><?php if(!empty(aepexpert_get_option('blog-button')))
                {echo esc_html(aepexpert_get_option('blog-button')) ;};?></a>
            </div>
        </div>
        <div class="aep-blog-all-area-start grid grid-cols-2 gap-9
        mob:grid-cols-1 tab:grid-cols-1">
        <?php if(have_posts()):while(have_posts()):the_post()?>
            <!-- single blog area start -->
            <div class="single-aep-blog-area">
                <?php  if(has_post_thumbnail()){the_post_thumbnail('aep-blog-thumb');};?>                
                <h3 class="my-4"><?php the_title();?></h3>
                <p><?php echo wp_trim_words(the_content(),26,true)?></p>                
                <div class="single-blog-meta-area flex items-center justify-between mt-3
                mob:flex-col mob:items-start mob:gap-3">                
                    <div class="single-blog-meta-area-name flex items-center gap-2">
                        <img src="<?php $img = get_post_meta(get_the_ID(),'image-profile',true);
                        if(!empty($img)){echo esc_url($img);};?>" alt="">

                        <p class="border-e-2 border-black pe-3 me-1"><?php $name = get_post_meta(get_the_ID(),'name-author',true);
                        if(!empty($name)){echo esc_html($name);};?></p>

                        <p><?php $date = get_post_meta(get_the_ID(),'date-create-post',true); if(!empty($date)){echo esc_html($date);};?></p>
                    </div>

                    <div class="single-blog-meta-area-button">
                        <a href="<?php $link_button = get_post_meta(get_the_ID(),'button-link',true); if(!empty($link_button)){echo esc_url($link_button);};?>" class="aep-btn">

                        <?php $button_name = get_post_meta(get_the_ID(),'button-name',true); if(!empty($button_name)){echo esc_html($button_name);};?></a>
                    </div>
                </div>
            </div>
            <!-- single blog area end -->
            <?php endwhile;endif;?>
           
        </div>
    </div>
</section>
<!-- home page blog area end -->

<a href="#" class="scrollTop"><i class="fa-solid fa-chevron-up"></i></a>
<?php get_footer() ?>