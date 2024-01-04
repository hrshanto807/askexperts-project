</main>
<footer class="mt-24">
    <section class="all-footer-area relative" style="background-image: url(<?php echo get_template_directory_uri() ?>/asset/img/footer-bg.png);">
        <div class="container">
            <div class="footer-area flex tab:flex-col">
                <!-- single footer area start-->
                <div class="single-footer-area mob:mb-10 ps-20 mob:border-b-2 border-white">
                    <img src="<?php $footer_logo = aepexpert_get_option('logo-footer');
                                if (!empty($footer_logo)) {
                                    echo esc_url($footer_logo['url']);
                                };
                                ?>" alt="">
                    <div class="footer social link flex items-center gap-2 mt-8">
                        <?php $footer_social = aepexpert_get_option('footer-social-repeater');
                        if (!empty($footer_social)) : foreach ($footer_social as $social) :; ?>
                                <a class="text-white" href="<?php if (!empty($social)) {
                                                                echo esc_url($social['social-link-f']);
                                                            }; ?>"><?php if (!empty($social)) {
                                                    echo esc_html($social['social-name']);
                                                }; ?></a>

                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
                <div class="all_footer_mwnu ">                    
                    <!-- single footer area start-->                    
                        <?php get_sidebar()?>                   
                    <!-- single footer area end -->
                    
                </div>
            </div>
            <!-- copyright area start -->
            <div class="copyright-area text-center mt-14 border-t-2 border-gray-500 pt-4">
                <p class="text-white"><a href="#">©<?php echo  get_the_date('Y')?></a><a href="#"> Consultalk. All rights reserved</a><a href="#"> | Terms of Service</a> <a href="">| Privacy Policy</a></p>
            </div>
            <!-- copyright area end -->
            <a href="#" class="scrollTop"><i class="fa-solid fa-chevron-up"></i></a>
        </div>
    </section>
    <!-- copyright area start -->

    <!-- copyright area end -->
</footer>
<?php wp_footer() ?>
</body>

</html>