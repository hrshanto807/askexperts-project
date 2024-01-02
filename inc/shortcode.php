<?php // sidebar widget shortcode
function aep_single_post_testi_shortcode()
{
    ob_start(); ?>
     </div>
                <!-- single details testimonial strt -->
                <div class="single-details-main-testimonial  owl-carousel my-5"id="single-testi" style="background-image: url(<?php echo get_template_directory_uri();?>/asset/img/single-testi-bg.png);">                    
                    <!-- single testimonial start -->
                    <div class="single-testi-in-blog-details">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="text-white">“The job market of the future will consist of those jobs that robots cannot perform. Our blue-collar work is pattern recognition, making sense of what you see. Gardeners will still have jobs because every garden is different.”</p>
                    </div>
                    <!-- single testimonial end -->
                    <!-- single testimonial start -->
                    <div class="single-testi-in-blog-details">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="text-white">“The job market of the future will consist of those jobs that robots cannot perform. Our blue-collar work is pattern recognition, making sense of what you see. Gardeners will still have jobs because every garden is different.”</p>
                    </div>
                    <!-- single testimonial end -->
                    <!-- single testimonial start -->
                    <div class="single-testi-in-blog-details">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="text-white">“The job market of the future will consist of those jobs that robots cannot perform. Our blue-collar work is pattern recognition, making sense of what you see. Gardeners will still have jobs because every garden is different.”</p>
                    </div>
                    <!-- single testimonial end -->
                    <!-- single testimonial start -->
                    <div class="single-testi-in-blog-details">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="text-white">“The job market of the future will consist of those jobs that robots cannot perform. Our blue-collar work is pattern recognition, making sense of what you see. Gardeners will still have jobs because every garden is different.”</p>
                    </div>
                    <!-- single testimonial end -->
                </div>
                <!-- single details testimonial end -->

<?php
    return ob_get_clean();
}
add_shortcode('single-testi-post','aep_single_post_testi_shortcode');

?>