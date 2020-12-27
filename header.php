<?php global $pegeon_ver;?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
    
<!-- Mirrored from sagormia.xyz/html/Pegeon/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 17:29:09 GMT -->
<head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="description" content="<?php bloginfo('name');?>">
        <meta name="keywords" content="business, consulting, corporate, Creative, Html Template, Template">
        <meta name="author" content="web-themes">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- title -->
        <title><?php bloginfo('name');?></title>

        <!-- favicon -->
        <!-- <link href="img/favicon.png" type="image/png" rel="icon"> -->

        <!-- all css here -->
        <?php wp_head();?>
    </head>
    <body data-spy="scroll" data-target="#menu" data-offset="75">
        <!-- Preloader Start -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-inner"></div>
            </div>
        </div> 
        <!-- Preloader End -->
        <!-- start header -->
        <header class="d-flex align-items-center <?php if(is_user_logged_in()){echo "login_margin";}?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-8 text-left">
                        <!--logo start-->
                        <a href="index-5.html" class="logo"><img src="<?php echo $pegeon_ver['logo_section_img_id']['url']; ?>" alt=""></a>
                        <!--logo end-->
                    </div>
                    <div class="col-lg-9 col-4">
                        <!--menu start-->
                        <div class="menu_wrapper">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' =>'primary_menu',
                                'menu_id'       =>'menu',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>
                            <!-- <ul id="menu">
                                <li class="nav-item">
                                    <a href="#home" class="active nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#service" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#portfolio" class="nav-link">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#expert" class="nav-link">Experts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pricing" class="nav-link">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#news" class="nav-link">News</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="nav-link">Contact</a>
                                </li>
                            </ul> -->
                        </div>
                        <!--menu end-->
                        <div class="hamburger-menu">
                            <span class="line-top"></span>
                            <span class="line-center"></span>
                            <span class="line-bottom"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->


