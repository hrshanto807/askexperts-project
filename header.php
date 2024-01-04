<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <header>
        <!-- header top start -->
        <section class="aep-header-toparea-all bg-black">
            <div class="container py-4 tab:hidden flex justify-between items-center">
                <div class="aep-header-top-area flex gap-40 items-center ">
                    <?php $header_top_left = aepexpert_get_option('home-header_top-repeater');
                    if (!empty($header_top_left)) : foreach ($header_top_left as $header_top_l) :; ?>
                            <div class="aep-headertop-time-area flex items-center justify-center gap-1">
                                <i class="text-yellow-400 <?php if (!empty($header_top_l)) {
                                                                echo esc_attr($header_top_l['header-left-icon']);
                                                            }; ?>"></i>
                                <p class="text-white"><?php if (!empty($header_top_l)) {
                                                            echo esc_html($header_top_l['header-left-content']);
                                                        }; ?></p>
                            </div>
                    <?php endforeach;
                    endif; ?>
                </div>
                <div class="aep-headertop-social-area flex items-center justify-center gap-4 ">
                    <?php $consult_services = aepexpert_get_option('header-social-repeater');
                    if (!empty($consult_services)) : foreach ($consult_services as $consult) :; ?>
                            <a href="<?php if (!empty($consult)) {
                                            echo esc_url($consult['social-link']);
                                        }; ?>"><i class="text-white <?php if (!empty($consult)) {
                                                                        echo esc_attr($consult['social-icon']);
                                                                    }; ?>"></i></a>

                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </section>
        <!-- header top end -->
        <!-- header area start -->
        <section class="header-area-all relative" style="background-color: rgba(27, 27, 27, 0.91);">
            <div class="container py-10">
                <div class="header-area flex justify-between items-center">
                    <!-- heading logo area start -->
                    <div class="header-logo">
                        <img src="<?php $header_logo = aepexpert_get_option('logo-header');
                                    if (!empty($header_logo)) {
                                        echo esc_url($header_logo['url']);
                                    };
                                    ?>" alt="">
                    </div>
                    <!-- heading logo area end -->
                    <!-- header  menu area start -->
                    <div class="header-menu-area">
                        <a href="#"><i class="fa-solid fa-bars"></i></a>
                        <nav id="main_menu">
                            <div class="header_menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location'  =>  'header_menu',
                                ));
                                ?>
                            </div>
                        </nav>
                    </div>
                    <!-- header  menu area end -->
                    <!-- header  right area start-->
                    <div class="header_phone_call flex bg-white rounded-3xl items-center p-4 justify-center">
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:">+ (888) 452 1505</a>
                    </div>
                    <!-- header  right area end-->
                </div>
            </div>
        </section>

        <!-- header area end -->
    </header>
    <main>