<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>

<body>
    <header>
        <!-- header top start -->
        <section class="aep-header-toparea-all bg-black">
            <div class="container py-4 tab:hidden">
                <div class="aep-header-top-area flex justify-between items-center ">
                    <div class="aep-headertop-time-area flex items-center justify-center gap-1">
                        <i class="text-yellow-400 fa-regular fa-clock"></i>
                        <p class="text-white">Monday - Friday8AM - 9PM</p>
                    </div>
                    <div class="aep-headertop-location-area flex items-center justify-center gap-1">
                        <i class="text-yellow-400 fa-solid fa-location-dot"></i>
                        <p class="text-white">725 Park Ave, New York</p>
                    </div>
                    <div class="aep-headertop-social-area flex items-center justify-center gap-6 ">
                        <a href="#"><i class="text-white fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="text-white fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="text-white fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="text-white fa-brands fa-linkedin"></i></a>
                    </div>
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
                        <img src="<?php echo get_template_directory_uri()?>/asset/img/Logo.png" alt="">
                    </div>
                    <!-- heading logo area end -->
                    <!-- header  menu area start -->
                    <div class="header-menu-area">
                        <a href="#"><i class="fa-solid fa-bars"></i></a>
                        <nav id="main_menu">
                            <div class="header_menu">
                                <ul id="nav">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="service.html">Service</a>
                                        <ul>
                                            <li><a href="#">DropdownMenu</a></li>
                                            <li><a href="#">DropdownMenu</a></li>
                                            <li><a href="#">DropdownMenu</a>
                                                <ul>
                                                    <li><a href="#">menu-3</a></li>
                                                    <li><a href="#">menu-3</a></li>
                                                    <li><a href="#">menu-3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">DropdownMenu</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="case-studies.html">Case</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="team.html">Team</a></li>
                                </ul>
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