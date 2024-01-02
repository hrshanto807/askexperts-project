<?php get_header();?>
         <!-- aep hero section start -->
         <?php if(have_posts()):while (have_posts()):the_post();?>
         <section class="aep-home-hero-area"
         style="background: url('<?php $single_bg = aepexpert_get_option('single-hero-bg');
         if(!empty($single_bg)){echo esc_url($single_bg['url']);};?>');background-position: center; background-repeat: no-repeat; background-size: cover;">
         <div class="container">
             <div class="aep-service-hero-content">
                 <span><?php the_date();?></span>
                 <h1><?php the_title();?></h1>
             </div>
         </div>
     </section>
     <!-- aep hero section end -->  
     <?php endwhile;endif;?>  
        <!-- all single details bloag here start -->
       <section class="all-single-details">
        <div class="container">
            <div class="all-single-content-here ">
               <?php the_content()?>
                <!-- single blog author details start-->
                <div class="blog-details-author-details">
                    <img src="<?php echo get_template_directory_uri();?>/asset/img/author-1.png" alt="">
                    <div class="author-main-details">
                        <h3 class="text-white"><?php $name = get_post_meta(get_the_ID(),'name-author',true);
                        if(!empty($name)){echo esc_html($name);};?></h3>
                        <p class="text-white my-4 font-bold"><?php $position = get_post_meta(get_the_ID(),'position-author',true);
                        if(!empty($position)){echo esc_html($position);};?></p>
                        <p class="text-white mb-4"><?php $content = get_post_meta(get_the_ID(),'content-author',true);
                        if(!empty($content)){echo esc_html($content);};?></p>
                        <div class="author-icon-social flex gap-5">
                        <?php $author_social = get_post_meta(get_the_ID(),'social_repeat_group',true);
                                            if(!empty($author_social)):foreach($author_social as $social_author):
                                                if ( isset( $social_author['social_icon'] ) ) {
                                                   $author_icon = esc_attr( $social_author['social_icon'] );
                                                };
                                                if ( isset( $social_author['social_link'] ) ) {
                                                    $author_link = esc_url( $social_author['social_link'] );
                                                };
                                            ?>
                                     <a class="text-white" href="<?php echo $author_link;?>"><i class="<?php echo $author_icon;?>"></i></a>
                                            <?php endforeach;endif?>                       
                        </div>

                    </div>
                </div>
                <!-- single blog author details end-->
            </div>
        </div>
       </section>
        <!-- all single details bloag here end -->
       
    <?php get_footer();?>