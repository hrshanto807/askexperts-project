<!DOCTYPE html>
<html <?php language_attributes()?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head();?>
</head>

<body <?php body_class()?>>
    <section class="error-page-area-all">
        <div class="container">
            <div class="error-page-area flex flex-col gap-4">
                <img src="<?php $team_hero_bg = aepexpert_get_option('error-thumb');
                                                            if (!empty($team_hero_bg)) {
                                                                echo esc_url($team_hero_bg['url']);
                                                            };
                                                            ?>" alt="">
                <h1><?php if (!empty(aepexpert_get_option('error-title'))) {
                            echo esc_html(aepexpert_get_option('error-title'));
                        }; ?></h1>
                <p><?php if (!empty(aepexpert_get_option('error-content'))) {
                            echo esc_html(aepexpert_get_option('error-content'));
                        }; ?></p>
                <a href="<?php if (!empty(aepexpert_get_option('error-btn-link'))) {
                            echo esc_url(aepexpert_get_option('error-btn-link'));
                        }; ?>" class="aep-btn-2"><?php if (!empty(aepexpert_get_option('error-btn'))) {
                            echo esc_html(aepexpert_get_option('error-btn'));
                        }; ?></a>
            </div>
        </div>
    </section>
    <?php wp_footer();?>
</body>
</html>