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
        <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri();?>/css/fontawesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri();?>/css/aos.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri();?>/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri();?>/css/responsive.css" rel="stylesheet" type="text/css" />
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
                        <a href="index-5.html" class="logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
                        <!--logo end-->
                    </div>
                    <div class="col-lg-9 col-4">
                        <!--menu start-->
                        <div class="menu_wrapper">
                            <ul id="menu">
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
                            </ul>
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

        <!-- start main content -->
        <main>
            <!-- Hero Slider Section Start -->
            <div class="hero_slider overflow-hidden" id="home">
                <div class="owl-carousel">
                    <div class="landing_wrapper d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/img/home.jpg')">
                        <div class="container w-100">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center">
                                    <h1 class="heading text-white">Digital Marketing For <br> Startup Business</h1>
                                    <p class="sub_heading mx-auto mt_20 text-white">Design is a way of life, a point of view. It involves the whole complex of visual communications: talent, creative ability manual.</p>
                                    <div class="home_btn_wrapper mt_25">
                                        <a href="#" class="blue_bg button">Get Started</a>
                                        <a href="#" class="button">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Hero Slider Section end -->

            <!-- start about wrapper -->
            <div class="about_wrapper section_padd overflow-hidden" id="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="about_img_wrapper position-relative">
                                <img src="<?php echo get_template_directory_uri();?>/img/about.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mt_md_30 pl-lg-5" data-aos="fade-left">
                            <div class="row">
                                <div class="col-12">
                                    <p class="title_top">About Us</p>
                                    <h2 class="title_1">We are the largest Business expert in Europe and Asia</h2>
                                    <p class="title_2">Sorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                </div>
                                <div class="col-sm-6 mt_30">
                                    <div class="counter_wrapper mb_10">
                                        <span><span class="count">82</span>+</span>
                                    </div>
                                    <h4>Project Complete</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing type setting</p>
                                </div>
                                <div class="col-sm-6 mt_30">
                                    <div class="counter_wrapper mb_10">
                                        <span><span class="count">24</span>%</span>
                                    </div>
                                    <h4>Great Results</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing type setting</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about Wrapper -->

            <!-- start service wrapper -->
            <div class="service_wrapper section_padd" id="service">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mb_30" data-aos="zoom-in">
                            <h2 class="title_1">Our special services</h2>
                            <p class="title_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="service_box mt_30">
                                <div class="service_icon">
                                    <i class="fal fa-edit"></i>
                                </div>
                                <h3 class="title mt_40 mb_20">Unique Design</h3>
                                <p class="description">
                                    Bring creature let Fish to grass under the given void from deep form greater and days give upon day light likeness.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="service_box mt_30">
                                <div class="service_icon">
                                    <i class="fal fa-database"></i>
                                </div>
                                <h3 class="title mt_40 mb_20">Developement</h3>
                                <p class="description">
                                    Bring creature let Fish to grass under the given void from deep form greater and days give upon day light likeness.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="service_box mt_30">
                                <div class="service_icon">
                                    <span class="fal fa-lock"></span>
                                </div>
                                <h3 class="title mt_40 mb_20">Secure Service</h3>
                                <p class="description">
                                    Bring creature let Fish to grass under the given void from deep form greater and days give upon day light likeness.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="service_box mt_30">
                                <div class="service_icon">
                                    <i class="far fa-paint-brush"></i>
                                </div>
                                <h3 class="title mt_40 mb_20">Graphics</h3>
                                <p class="description">
                                    Bring creature let Fish to grass under the given void from deep form greater and days give upon day light likeness.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                            <div class="service_box mt_30">
                                <div class="service_icon">
                                    <i class="far fa-bullhorn"></i>
                                </div>
                                <h3 class="title mt_40 mb_20">Digital Marketing</h3>
                                <p class="description">
                                    Bring creature let Fish to grass under the given void from deep form greater and days give upon day light likeness.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                            <div class="service_box mt_30">
                                <div class="service_icon">
                                    <i class="fal fa-headphones"></i>
                                </div>
                                <h3 class="title mt_40 mb_20">24/7 Support</h3>
                                <p class="description">
                                    Bring creature let Fish to grass under the given void from deep form greater and days give upon day light likeness.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end service wrapper -->

            <!-- start banner wrapper -->
            <div class="banner_wrapper jarallax" style="background-image: url('img/banner.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="title_1">Let’s create something together?</h2>
                            <p class="title_2 mt-2">Contact us without any hesitate</p>
                        </div>
                        <div class="col-md-4 banner_button_wrapper">
                            <a href="#" class="blue_bg button">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end banner wrapper -->

            <!-- start grow wrapper -->
            <div class="grow_wrapper section_padd overflow-hidden">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-7" data-aos="fade-right">
                            <h2 class="title_1">Grow your <span class="blue_text">business earn</span> <br class="d-none d-lg-block"> more money</h2>
                            <p class="title_2 mb_25">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <ul class="technics">
                                <li>Innovation idea for business tecnology which is best in the world</li>
                                <li>Famous online marketing agency in this modern country</li>
                                <li>Digital content marketing online agency in the world </li>
                                <li>Follow this steps for growing your business profit</li>
                            </ul>
                            <a href="#" class="blue_bg button mt_40">Read More</a>
                        </div>
                        <div class="col-lg-5 mt_md_30" data-aos="fade-left">
                            <img src="<?php echo get_template_directory_uri();?>/img/faq.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end grow wrapper -->

            <!-- start project wrapper -->
            <div class="project_wrapper section_padd" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center" data-aos="zoom-in">
                            <h2 class="title_1">Our Recent Projects</h2>
                            <p class="title_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem incididunt ut labore et dolore magna aliqua.</p>
                            <div class="project_filter_menu mt_40">
                                <ul>
                                    <li data-filter="*" class="active">View All</li>
                                    <li data-filter=".marketing">Marketing</li>
                                    <li data-filter=".consulting">Consulting</li>
                                    <li data-filter=".branding">Branding</li>
                                    <li data-filter=".finance">Finance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row project_items">
                        <div class="col-sm-6 col-lg-4 item consulting mt_30">
                            <div class="snake position-relative overflow-hidden">
                                <img src="<?php echo get_template_directory_uri();?>/img/project_1.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <h3 class="mb_15">Digital Consulting</h3>
                                    <a href="img/project_1.jpg">
                                    <i class="fas fa-long-arrow-alt-right mt_20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 item marketing mt_30">
                            <div class="snake position-relative overflow-hidden">
                                <img src="<?php echo get_template_directory_uri();?>/img/project_2.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <h3 class="mb_15">Digital Marketing</h3>
                                    <a href="img/project_2.jpg">
                                    <i class="fas fa-long-arrow-alt-right mt_20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 item branding mt_30">
                            <div class="snake position-relative overflow-hidden">
                                <img src="<?php echo get_template_directory_uri();?>/img/project_3.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <h3 class="mb_15">Branding</h3>
                                    <a href="img/project_3.jpg">
                                    <i class="fas fa-long-arrow-alt-right mt_20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 item consulting mt_30">
                            <div class="snake position-relative overflow-hidden">
                                <img src="<?php echo get_template_directory_uri();?>/img/project_4.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <h3 class="mb_15">Digital Consulting</h3>
                                    <a href="img/project_4.jpg">
                                    <i class="fas fa-long-arrow-alt-right mt_20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 item finance mt_30">
                            <div class="snake position-relative overflow-hidden">
                                <img src="<?php echo get_template_directory_uri();?>/img/project_5.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <h3 class="mb_15">Finance</h3>
                                    <a href="img/project_2.jpg">
                                    <i class="fas fa-long-arrow-alt-right mt_20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 item branding mt_30">
                            <div class="snake position-relative overflow-hidden">
                                <img src="<?php echo get_template_directory_uri();?>/img/project_6.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <h3 class="mb_15">Branding</h3>
                                    <a href="img/project_6.jpg">
                                    <i class="fas fa-long-arrow-alt-right mt_20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end project wrapper -->

            <!-- start expert wrapper -->
            <div class="expert_wrapper section_padd" id="expert">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mb_30" data-aos="zoom-in">
                            <h2 class="title_1">Meet Our Expert</h2>
                            <p class="title_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="single_expert mt_30">
                                <img src="<?php echo get_template_directory_uri();?>/img/team_1.jpg" class="img-fluid w-100" alt="">
                                <div class="expert_details text-center">
                                    <div class="expert_content">
                                        <h4>John Doe</h4>
                                        <p class="mb_20">Marketing Specialist</p>
                                        <ul class="social_icons">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="single_expert mt_30">
                                <img src="<?php echo get_template_directory_uri();?>/img/team_2.jpg" class="img-fluid w-100" alt="">
                                <div class="expert_details text-center">
                                    <div class="expert_content">
                                        <h4>Janie Klein</h4>
                                        <p class="mb_20">Senior Admin</p>
                                        <ul class="social_icons">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="single_expert mt_30">
                                <img src="<?php echo get_template_directory_uri();?>/img/team_4.jpg" class="img-fluid w-100" alt="">
                                <div class="expert_details text-center">
                                    <div class="expert_content">
                                        <h4>Zuliya Ayra</h4>
                                        <p class="mb_20">Managing Director</p>
                                        <ul class="social_icons">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end expert wrapper -->

            <!-- start ask wrapper -->
            <div class="ask_wrapper section_padd overflow-hidden">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-center mb_60" data-aos="zoom-in">
                            <h2 class="title_1">Ask Something From</h2>
                            <p class="title_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="accordion" id="accordion">
                                <button class="button" type="button" data-toggle="collapse" aria-expanded="true" data-target="#target_1">
                                <span class="btn_content">
                                <span>Experience A Ranking Factor?</span>
                                <i class="fas fa-check"></i>
                                </span>
                                </button>
                                <div id="target_1" class="collapse show" data-parent="#accordion">
                                    <div class="ask_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing e  eiutempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                                    </div>
                                </div>
                                <button class="button collapsed mt_30" type="button" data-toggle="collapse" aria-expanded="false" data-target="#target_2">
                                <span class="btn_content">
                                <span>Relevance, Authority & Trust</span>
                                <i class="fas fa-check"></i>
                                </span>
                                </button>
                                <div id="target_2" class="collapse" data-parent="#accordion">
                                    <div class="ask_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing e  eiutempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                                    </div>
                                </div>
                                <button class="button collapsed mt_30" type="button" data-toggle="collapse" aria-expanded="false" data-target="#target_3">
                                <span class="btn_content">
                                <span>24 Hours - Technical Support</span>
                                <i class="fas fa-check"></i>
                                </span>
                                </button>
                                <div id="target_3" class="collapse" data-parent="#accordion">
                                    <div class="ask_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing e  eiutempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                                    </div>
                                </div>
                                <button class="button collapsed mt_30" type="button" data-toggle="collapse" aria-expanded="false" data-target="#target_4">
                                <span class="btn_content">
                                <span>Global supply Chain Solutions</span>
                                <i class="fas fa-check"></i>
                                </span>
                                </button>
                                <div id="target_4" class="collapse" data-parent="#accordion">
                                    <div class="ask_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing e  eiutempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center mt_md_30" data-aos="fade-left">
                            <img src="<?php echo get_template_directory_uri();?>/img/boost-img.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end ask wrapper -->

            <!-- start pricing wrapper -->
            <div class="pricing_wrapper section_padd" id="pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center" data-aos="zoom-in">
                            <h2 class="title_1">Our Pricing Plan</h2>
                            <p class="title_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tabs mt_50">
                                <ul class="nav nav-pills justify-content-center mb_30">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#monthly" role="button">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#annually" role="button">Yearly</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="monthly">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                                <div class="card p-2 p-lg-3 rounded-lg mt_30">
                                                    <div class="card-body">
                                                        <h4>Basic</h4>
                                                        <p class="text-muted">For personal use</p>
                                                        <h2 class="blue_text">FREE</h2>
                                                        <ul class="border-top pt-4">
                                                            <li class="text-uppercase mb-3">FEATURES</li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                Rich components
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                20+ elements
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                6 months free support
                                                            </li>
                                                        </ul>
                                                        <a class="button blue_bg w-100 mt-4" href="#!">Get started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of pricing item -->
                                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                                <div class="card p-2 p-lg-3 rounded-lg mt_30">
                                                    <div class="card-body">
                                                        <h4>Standard</h4>
                                                        <p class="text-muted">For teams up to 5 members</p>
                                                        <h2 class="blue_text">$49</h2>
                                                        <ul class="border-top pt-4">
                                                            <li class="text-uppercase mb-3">FEATURES</li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                Rich components
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                40+ elements
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                100% uptime guaranteed
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                6 months free support
                                                            </li>
                                                        </ul>
                                                        <a class="button blue_bg w-100 mt-4" href="#!">Get started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of pricing item -->
                                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                                                <div class="card p-2 p-lg-3 rounded-lg mt_30">
                                                    <div class="card-body">
                                                        <h4>Premium</h4>
                                                        <p class="text-muted">Best for corporations</p>
                                                        <h2 class="blue_text">$79</h2>
                                                        <ul class="border-top pt-4">
                                                            <li class="text-uppercase mb-3">FEATURES</li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                Rich components
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                60+ elements
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                Flexible licensing
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                100% uptime guaranteed
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                12 months free support
                                                            </li>
                                                        </ul>
                                                        <a class="button blue_bg w-100 mt-4" href="#!">Get started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of pricing item -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="annually">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card p-2 p-lg-3 rounded-lg mt_30">
                                                    <div class="card-body">
                                                        <h4>Basic</h4>
                                                        <p class="text-muted">For personal use</p>
                                                        <h2 class="blue_text">FREE</h2>
                                                        <ul class="border-top pt-4">
                                                            <li class="text-uppercase mb-3">FEATURES</li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                Rich components
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                20+ elements
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                6 months free support
                                                            </li>
                                                        </ul>
                                                        <a class="button blue_bg w-100 mt-4" href="#!">Get started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of pricing item -->
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card p-2 p-lg-3 rounded-lg mt_30">
                                                    <div class="card-body">
                                                        <h4>Standard</h4>
                                                        <p class="text-muted">For teams up to 5 members</p>
                                                        <h2 class="blue_text">$149</h2>
                                                        <ul class="border-top pt-4">
                                                            <li class="text-uppercase mb-3">FEATURES</li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                Rich components
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                40+ elements
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                100% uptime guaranteed
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                6 months free support
                                                            </li>
                                                        </ul>
                                                        <a class="button blue_bg w-100 mt-4" href="#!">Get started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of pricing item -->
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card p-2 p-lg-3 rounded-lg mt_30">
                                                    <div class="card-body">
                                                        <h4>Premium</h4>
                                                        <p class="text-muted">Best for corporations</p>
                                                        <h2 class="blue_text">$179</h2>
                                                        <ul class="border-top pt-4">
                                                            <li class="text-uppercase mb-3">FEATURES</li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                Rich components
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                60+ elements
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                Flexible licensing
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                100% uptime guaranteed
                                                            </li>
                                                            <li class="icon-list-item mt-2">
                                                                <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                12 months free support
                                                            </li>
                                                        </ul>
                                                        <a class="button blue_bg w-100 mt-4" href="#!">Get started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of pricing item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end pricing wrapper -->

            <!-- start testimonials wrapper -->
            <div class="testi_wrapper section_padd">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mb_60" data-aos="zoom-in">
                            <h2 class="title_1">Our Customers Feedback</h2>
                            <p class="title_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="col-md-12">
                            <div class="owl-carousel testi_carousel">
                                <div class="item">
                                    <div class="single_client">
                                        <i class="fas fa-quote-left"></i>
                                        <p class="client_feedback mb_25 mt_25">Borem ipsum dolor sit a consec adipisicing elit, sed do eiusmo tempor incididunt ut labore etdolore m aliqu enim ad minim veniam qui nostrud exercitation ulla
                                        </p>
                                        <div class="media align-items-center">
                                            <div class="client_img">
                                                <img src="<?php echo get_template_directory_uri();?>/img/avatar-1.svg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>Molly Robinson</h4>
                                                <p>Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single_client">
                                        <i class="fas fa-quote-left"></i>
                                        <p class="client_feedback mb_25 mt_25">Borem ipsum dolor sit a consec adipisicing elit, sed do eiusmo tempor incididunt ut labore etdolore m aliqu enim ad minim veniam qui nostrud exercitation ulla
                                        </p>
                                        <div class="media align-items-center">
                                            <div class="client_img">
                                                <img src="<?php echo get_template_directory_uri();?>/img/avatar-2.svg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>Neha Jarvis</h4>
                                                <p>Graphics Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single_client">
                                        <i class="fas fa-quote-left"></i>
                                        <p class="client_feedback mb_25 mt_25">Borem ipsum dolor sit a consec adipisicing elit, sed do eiusmo tempor incididunt ut labore etdolore m aliqu enim ad minim veniam qui nostrud exercitation ulla
                                        </p>
                                        <div class="media align-items-center">
                                            <div class="client_img">
                                                <img src="<?php echo get_template_directory_uri();?>/img/avatar-3.svg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>David Smith</h4>
                                                <p>Web Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end testimonials wrapper -->

            <!-- start news wrapper -->
            <div class="news_wrapper section_padd" id="news">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mb_30" data-aos="zoom-in">
                            <h2 class="title_1">Our Recent Updates</h2>
                            <p class="title_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua</p>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="single_news mt_30">
                                <div class="overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri();?>/img/blog_post_1.jpg" alt="">
                                </div>
                                <h4 class="mt_25 mb_15">Ever too late to lose weight?</h4>
                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="mt_25 button blue_bg">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="single_news mt_30">
                                <div class="overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri();?>/img/blog_post_2.jpg" alt="">
                                </div>
                                <h4 class="mt_25 mb_15">Medition Group Class Started</h4>
                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="mt_25 button blue_bg">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="single_news mt_30">
                                <div class="overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri();?>/img/blog_post_3.jpg" alt="">
                                </div>
                                <h4 class="mt_25 mb_15">Obviously Everyone Goes</h4>
                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="mt_25 button blue_bg">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end news wrapper -->

            <!-- start contact wrapper -->
            <div class="contact_wrapper section_padd overflow-hidden" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb_30" data-aos="zoom-in">
                            <h2 class="title_1">Contact Us</h2>
                            <p class="title_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        </div>
                        <div class="col-lg-5 col-xl-4 mt_30" data-aos="fade-right">
                            <aside>
                                <div class="address">
                                    <h4>Get in touch with us</h4>
                                    <ul>
                                        <li>
                                            <strong>Phone : </strong>
                                            <a href="tel:900888707123">+900 888 707 123</a>
                                        </li>
                                        <li>
                                            <strong>Email : </strong>
                                            <a href="mailto:name@yoursite.com">name@yoursite.com</a>
                                        </li>
                                        <li>
                                            <strong>Adress : </strong>
                                            <p>Pasar kambing 58 Suite X.110 Peterongan Semarang, USA</p>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-7 col-xl-8 mt_30 text-center" data-aos="fade-left">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="inputBox" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" name="email" class="inputBox" placeholder="Your Email">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" name="subject" class="inputBox" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" class="textBox" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="button blue_bg" type="submit">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- end main content -->

        <!-- start footer -->
        <footer>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 text-md-right mt_20 order-md-2">
                        <ul class="social_icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8 mt_20 order-md-1">
                        <p>Copyright 2020. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!-- start back to top -->
        <a href="#" class="back-to-top button blue_bg"><i class="fal fa-angle-up"></i></a>
        <!-- end back to top -->

        <!-- all js here -->
        <script src="<?php echo get_template_directory_uri();?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
    </body>
    <?php wp_footer();?>

<!-- Mirrored from sagormia.xyz/html/Pegeon/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 17:30:27 GMT -->
</html>