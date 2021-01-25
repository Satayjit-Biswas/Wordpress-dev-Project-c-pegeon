<?php get_header();
global $pegeon_ver;?>
        <!-- start main content -->
        <main>
            <!-- Hero Slider Section Start -->
            <div class="hero_slider overflow-hidden" id="home">
                <div class="owl-carousel">
                    <div class="landing_wrapper d-flex align-items-center" style="background-image: url('<?php echo $pegeon_ver['slider_section_a_bg']['url'];?>')">
                        <div class="container w-100">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center">
                                    <h1 class="heading text-white"><?php echo $pegeon_ver['slider_section_a_text_a_id'];?></h1>
                                    <p class="sub_heading mx-auto mt_20 text-white"><?php echo $pegeon_ver['slider_section_a_text_b_id'];?></p>
                                    <div class="home_btn_wrapper mt_25">
                                        <a href="<?php echo $pegeon_ver['slider_section_leftbutton_url_id'];?>" class="blue_bg button"><?php echo $pegeon_ver['slider_section_leftbutton_text_id'];?></a>
                                        <a href="<?php echo $pegeon_ver['slider_section_rightbutton_url_id'];?>" class="button"><?php echo $pegeon_ver['slider_section_rightbutton_text_id'];?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="landing_wrapper d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/img/home_2.jpg')">
                        <div class="container w-100">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center">
                                    <h1 class="heading text-white"><?php echo $pegeon_ver['slider_section_b_text_a_id'];?></h1>
                                    <p class="sub_heading mx-auto mt_20 text-white"><?php echo $pegeon_ver['slider_section_b_text_b_id'];?></p>
                                    <div class="home_btn_wrapper mt_25">
                                        <a href="<?php echo $pegeon_ver['slider_section_leftbutton_url_id'];?>" class="blue_bg button"><?php echo $pegeon_ver['slider_section_leftbutton_text_id'];?></a>
                                        <a href="<?php echo $pegeon_ver['slider_section_rightbutton_url_id'];?>" class="button"><?php echo $pegeon_ver['slider_section_rightbutton_text_id'];?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="landing_wrapper d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/img/home_3.jpg')">
                        <div class="container w-100">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center">
                                    <h1 class="heading text-white"><?php echo $pegeon_ver['slider_section_c_text_a_id'];?></h1>
                                    <p class="sub_heading mx-auto mt_20 text-white"><?php echo $pegeon_ver['slider_section_c_text_b_id'];?></p>
                                    <div class="home_btn_wrapper mt_25">
                                        <a href="<?php echo $pegeon_ver['slider_section_leftbutton_url_id'];?>" class="blue_bg button"><?php echo $pegeon_ver['slider_section_leftbutton_text_id'];?></a>
                                        <a href="<?php echo $pegeon_ver['slider_section_rightbutton_url_id'];?>" class="button"><?php echo $pegeon_ver['slider_section_rightbutton_text_id'];?></a>
                                    </div>
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
                                <img src="<?php echo $pegeon_ver['about_section_img_id']['url'];?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mt_md_30 pl-lg-5" data-aos="fade-left">
                            <div class="row">
                                <div class="col-12">
                                    <p class="title_top"><?php echo $pegeon_ver['about_section_text_a_id'];?></p>
                                    <h2 class="title_1"><?php echo $pegeon_ver['about_section_text_b_id'];?></h2>
                                    <p class="title_2"><?php echo $pegeon_ver['about_section_text_c_id'];?></p>
                                </div>
                                <div class="col-sm-6 mt_30">
                                    <div class="counter_wrapper mb_10">
                                        <span><span class="count"><?php echo $pegeon_ver['about_section_counter_a_text_a_id'];?></span>+</span>
                                    </div>
                                    <h4><?php echo $pegeon_ver['about_section_counter_a_text_b_id'];?></h4>
                                    <p><?php echo $pegeon_ver['about_section_counter_a_text_c_id'];?></p>
                                </div>
                                <div class="col-sm-6 mt_30">
                                    <div class="counter_wrapper mb_10">
                                        <span><span class="count"><?php echo $pegeon_ver['about_section_counter_b_text_a_id'];?></span>%</span>
                                    </div>
                                    <h4><?php echo $pegeon_ver['about_section_counter_b_text_b_id'];?></h4>
                                    <p><?php echo $pegeon_ver['about_section_counter_b_text_c_id'];?></p>
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
                            <h2 class="title_1"><?php echo $pegeon_ver['service_text_section_text_a_id'];?></h2>
                            <p class="title_2"><?php echo $pegeon_ver['service_text_section_text_b_id'];?></p>
                        </div>
                        <?php
                            $service_section_post = new WP_Query(array(
                                'post_type'      => 'service_custom_id',
                                'posts_per_page' => -1,
                                'order'          => 'ASC'
                            ));

                                if ($service_section_post -> have_posts()) {
                                    while($service_section_post -> have_posts()) : $service_section_post -> the_post();
                                        $service_icon_text = get_post_meta(get_the_ID(),'service_section_icon_nane',true);

                                ?>
                                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                        <div class="service_box mt_30">
                                            <div class="service_icon">
                                                <i class="<?php echo $service_icon_text;?>"></i>
                                            </div>
                                            <h3 class="title mt_40 mb_20"><?php the_title();?></h3>
                                            <p class="description">
                                                <?php the_excerpt();?>
                                            </p>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                }
                                else {
                                    ?>
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
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- end service wrapper -->

            <!-- start banner wrapper -->
            <div class="banner_wrapper jarallax" style="background-image: url('<?php echo $pegeon_ver['Banner_section_img_id']['url'];?>">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="title_1"><?php echo $pegeon_ver['Banner_section_text_a_id'];?></h2>
                            <p class="title_2 mt-2"><?php echo $pegeon_ver['Banner_section_text_b_id'];?></p>
                        </div>
                        <div class="col-md-4 banner_button_wrapper">
                            <a href="<?php echo $pegeon_ver['Banner_section_text_url_id'];?>" class="blue_bg button"><?php echo $pegeon_ver['Banner_section_text_c_id'];?></a>
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
                            <h2 class="title_1"><?php echo $pegeon_ver['grow_section_text_a_id'];?></h2>
                            <p class="title_2 mb_25"><?php echo $pegeon_ver['grow_section_text_b_id'];?></p>
                            <ul class="technics">
                                <li><?php echo $pegeon_ver['grow_section_text_c_id'];?></li>
                                <li><?php echo $pegeon_ver['grow_section_text_d_id'];?></li>
                                <li><?php echo $pegeon_ver['grow_section_text_e_id'];?></li>
                                <li><?php echo $pegeon_ver['grow_section_text_f_id'];?></li>
                            </ul>
                            <a href="<?php echo $pegeon_ver['grow_section_button_url_id'];?>" class="blue_bg button mt_40"><?php echo $pegeon_ver['grow_section_button_text_id'];?></a>
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
                            <h2 class="title_1"><?php echo $pegeon_ver['portfolio_text_section_text_a_id'];?></h2>
                            <p class="title_2"><?php echo $pegeon_ver['portfolio_text_section_text_b_id'];?></p>
                            
                            <div class="project_filter_menu mt_40">
                                <ul>
                                    <li data-filter="*" class="active">View All</li>

                                    <?php
                                        $project_catagori = get_terms('project-cat');
                                        if(!empty($project_catagori)) : foreach($project_catagori as $catagpri):?>
                                        <li data-filter=".<?php echo esc_attr($catagpri->slug);?>"><?php echo esc_html($catagpri ->name);?></li>
                                    <?php
                                        endforeach;
                                        else:
                                    ?>
                                    <li data-filter=".marketing">Marketing</li>
                                    <li data-filter=".consulting">Consulting</li>
                                    <li data-filter=".branding">Branding</li>
                                    <li data-filter=".finance">Finance</li>
                                    <?php
                                        endif;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row project_items">
                        <?php
                            $project_post = new WP_Query(array(
                                'post_type'      => 'project_custom_id',
                                'posts_per_page' => -1,
                                'order'          => 'ASC'
                            ));
                            if ($project_post -> have_posts()) {
                                    while($project_post -> have_posts()) : $project_post -> the_post();
                                ?>
                                <div class="col-sm-6 col-lg-4 item <?php 
                                    $project_cat_id_var = get_the_terms(get_the_ID(),'project-cat');
                                    if(!empty($project_cat_id_var)) : foreach($project_cat_id_var as $project_cat_id) :
                                             echo $project_cat_id->slug.' ';
                                    endforeach;
                                    endif;
                                    ?>
                                    ?> mt_30">
                                    <div class="snake position-relative overflow-hidden">
                                        <!-- <img src="<?php echo get_template_directory_uri();?>" class="img-fluid" alt=""> -->
                                        <?php the_post_thumbnail('project_img',array('class' =>'img-fluid'));?>
                                        <div class="overlay">
                                            <h3 class="mb_15"><?php the_title();?></h3>
                                            <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>">
                                        
                                            <i class="fas fa-long-arrow-alt-right mt_20"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                endwhile;
                                }
                                else {
                                    ?>
                        <div class="col-sm-6 col-lg-4 item consulting mt_30">
                            <div class="snake position-relative overflow-hidden">
                                <img src="<?php echo get_template_directory_uri();?>/img/project_1.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <h3 class="mb_15">Digital Consulting</h3>
                                    <a href="<?php echo get_template_directory_uri();?>/img/project_1.jpg">
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
                                    <a href="<?php echo get_template_directory_uri();?>/img/project_2.jpg">
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
                                    <a href="<?php echo get_template_directory_uri();?>/img/project_3.jpg">
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
                                    <a href="<?php echo get_template_directory_uri();?>/img/project_4.jpg">
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
                                    <a href="<?php echo get_template_directory_uri();?>/img/project_2.jpg">
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
                                    <a href="<?php echo get_template_directory_uri();?>/img/project_6.jpg">
                                    <i class="fas fa-long-arrow-alt-right mt_20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- end project wrapper -->

            <!-- start expert wrapper -->
            <div class="expert_wrapper section_padd" id="expert">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mb_30" data-aos="zoom-in">
                            <h2 class="title_1"><?php echo $pegeon_ver['expert_text_section_text_a_id'];?></h2>
                            <p class="title_2"><?php echo $pegeon_ver['expert_text_section_text_b_id'];?></p>
                        </div>
                        <?php
                            $expert_section_post = new WP_Query(array(
                                'post_type'      => 'expert_custom_id',
                                'posts_per_page' => -1,
                                'order'          => 'ASC'
                            ));

                                if ($expert_section_post -> have_posts()) {
                                    while($expert_section_post -> have_posts()) : $expert_section_post -> the_post();
                                        $facebook_link = get_post_meta(get_the_ID(),'expert_section_facebook_link',true);
                                        $twitter_link = get_post_meta(get_the_ID(),'expert_section_twitter_link',true);
                                        $instagram_link = get_post_meta(get_the_ID(),'expert_section_instagram_link',true);
                                        $linkedin_link = get_post_meta(get_the_ID(),'expert_section_linkedin_link',true);

                                ?>
                                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                        <div class="single_expert mt_30">
                                            <!-- <img src="<?php the_post_thumbnail(); ?>" class="img-fluid w-100" alt=""> -->
                                            <?php the_post_thumbnail( 'expert_man', array( 'class' => 'img-fluid w-100' ) ); ?>
                                            <div class="expert_details text-center">
                                                <div class="expert_content">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p class="mb_20"><?php the_excerpt();?></p>
                                                    <ul class="social_icons">
                                                        <li><a href="<?php echo $facebook_link;?>"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="<?php echo $twitter_link;?>"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="<?php echo $instagram_link;?>"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="<?php echo $linkedin_link;?>"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                }
                                else {
                                    ?>
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
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
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
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
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
                        <?php
                                }
                                ?>
                    </div>
                </div>
            </div>
            <!-- end expert wrapper -->

            <!-- start ask wrapper -->
            <div class="ask_wrapper section_padd overflow-hidden">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-center mb_60" data-aos="zoom-in">
                            <h2 class="title_1"><?php echo $pegeon_ver['faq_text_section_text_a_id'];?></h2>
                            <p class="title_2"><?php echo $pegeon_ver['faq_text_section_text_b_id'];?></p>
                        </div>
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="accordion" id="accordion">
                            <?php
                                $ask_section_post = new WP_Query(array(
                                    'post_type'      => 'ask_custom_id',
                                    'posts_per_page' => -1,
                                    'order'          => 'ASC'
                                ));
                                if($ask_section_post -> have_posts()){
                                    while($ask_section_post -> have_posts()) : $ask_section_post-> the_post();
                                        $collapse_id = get_post_meta(get_the_ID(),'collapse_id',true);
                                ?>
                                 <button class="button collapsed mt_30" type="button" data-toggle="collapse" aria-expanded="<?php echo $collapse_id; ?>" data-target="#<?php echo $slug = get_post_field('post_name',get_post());?>">
                                <span class="btn_content">
                                <span><?php echo the_title(); ?></span>
                                <i class="fas fa-check"></i>
                                </span>
                                </button>
                                <div id="<?php echo $slug = get_post_field('post_name',get_post());?>" class="collapse 
                                <?php 
                                    if($collapse_id == 'true'){
                                        echo "show";
                                    } 
                                ?>" data-parent="#accordion">
                                    <div class="ask_content">
                                        <p><?php the_excerpt();?></p>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                                }
                                else {
                                    ?>
                               
                                <button class="button collapsed mt_30" type="button" data-toggle="collapse" aria-expanded="true" data-target="#target_1">
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
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center mt_md_30" data-aos="fade-left">
                            <img src="<?php echo  $pegeon_ver['faq_text_section_img_id']['url']?>" class="img-fluid" alt="">
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
                            <h2 class="title_1"><?php echo $pegeon_ver['pricing_text_section_text_a_id'];?></h2>
                            <p class="title_2"><?php echo $pegeon_ver['pricing_text_section_text_b_id'];?></p></p>
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
                                            <?php
                                            $monthly_section_post = new WP_Query(array(
                                                'post_type'    =>'monthly_price_id',
                                                'posts_per_page'=>'-1',
                                                'order'        =>'ASC'
                                            ));
                                            if($monthly_section_post -> have_posts()){
                                                while($monthly_section_post ->have_posts()) : $monthly_section_post -> the_post();
                                                    $monthly_price = get_post_meta(get_the_ID(),'monthly_price_section_price',true);
                                                    $monthly_features = get_post_meta(get_the_ID(),'monthly_price_features',true);
                                                    $monthly_button_text = get_post_meta(get_the_ID(),'monthly_price_section_select_text',true);
                                                    $monthly_button_url = get_post_meta(get_the_ID(),'monthly_price_section_button_url',true);
                                        
                                            ?>

                                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                                <div class="card p-2 p-lg-3 rounded-lg mt_30">
                                                    <div class="card-body">
                                                        <h4><?php echo the_title();?></h4>
                                                        <p class="text-muted"><?php echo the_excerpt();?></p>
                                                        <h2 class="blue_text" style="text-transform: uppercase;"><?php echo $monthly_price;?></h2>
                                                        <ul class="border-top pt-4">
                                                            <li class="text-uppercase mb-3">FEATURES</li>
                                                                    <?php
                                                                        foreach ($monthly_features as $monthly_value) {
                                                                        ?>
                                                                        <li class="icon-list-item mt-2">
                                                                            <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                            <?php
                                                                            echo "$monthly_value";
                                                                            ?>
                                                                        </li>
                                                                        <?php
                                                                        }?>
                                                        </ul>
                                                        <a class="button blue_bg w-100 mt-4" href="<?php echo $monthly_button_url;?>"><?php echo $monthly_button_text;?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                endwhile;
                                            }
                                            else{
                                            ?>
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
                                            <?php
                                            }
                                            ?>
                                            <!-- end of pricing item -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="annually">
                                        <div class="row justify-content-center">
                                        <?php
                                            $yearly_section_post = new WP_Query(array(
                                                'post_type'    =>'yearly_price_id',
                                                'posts_per_page'=>'-1',
                                                'order'        =>'ASC'
                                            ));
                                            if($yearly_section_post -> have_posts()){
                                                while($yearly_section_post ->have_posts()) : $yearly_section_post -> the_post();
                                                    $yearly_price = get_post_meta(get_the_ID(),'yearly_price_section_price',true);
                                                    $yearly_features = get_post_meta(get_the_ID(),'yearly_price_features',true);
                                                    $yearly_button_text = get_post_meta(get_the_ID(),'yearly_price_section_select_text',true);
                                                    $yearly_button_url = get_post_meta(get_the_ID(),'yearly_price_section_button_url',true);
                                        
                                            ?>
                                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                                <div class="card p-2 p-lg-3 rounded-lg mt_30">
                                                    <div class="card-body">
                                                        <h4><?php echo the_title();?></h4>
                                                        <p class="text-muted"><?php echo the_excerpt();?></p>
                                                        <h2 class="blue_text" style="text-transform: uppercase;"><?php echo $yearly_price;?></h2>
                                                        <ul class="border-top pt-4">
                                                            <li class="text-uppercase mb-3">FEATURES</li>
                                                                    <?php
                                                                        foreach ($yearly_features as $yearly_value) {
                                                                        ?>
                                                                        <li class="icon-list-item mt-2">
                                                                            <span class="icon rounded-circle"><i class="fal fa-check"></i></span>
                                                                            <?php
                                                                            echo "$yearly_value";
                                                                            ?>
                                                                        </li>
                                                                        <?php
                                                                        }?>
                                                        </ul>
                                                        <a class="button blue_bg w-100 mt-4" href="<?php echo $yearly_button_url;?>"><?php echo $yearly_button_text;?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                endwhile;
                                            }
                                            else{
                                            ?>
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
                                            <?php
                                            }
                                            ?>
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
                            <h2 class="title_1"><?php echo $pegeon_ver['feedback_text_section_text_a_id'];?></h2>
                            <p class="title_2"><?php echo $pegeon_ver['feedback_text_section_text_b_id'];?></p>
                        </div>
                        <div class="col-md-12">
                            <div class="owl-carousel testi_carousel">
                                <?php 
                                    $feedback_post = new WP_Query(array(
                                        'post_type' => 'feedback_custom_id',
                                        'posts_per_page'   => -1,
                                        'order'     => 'ASC'
                                    ));
                                    if($feedback_post -> have_posts()){
                                        while($feedback_post -> have_posts()) : $feedback_post -> the_post();
                                        $profession_name = get_post_meta(get_the_ID(),'feedback_section_work',true);

                                        ?>
                                        <div class="item">
                                    <div class="single_client">
                                        <i class="fas fa-quote-left"></i>
                                        <p class="client_feedback mb_25 mt_25"><?php the_title();?>
                                        </p>
                                        <div class="media align-items-center">
                                            <div class="client_img">
                                                <!-- <img src="<?php echo get_template_directory_uri();?>/img/avatar-2.svg" alt=""> -->
                                                <?php the_post_thumbnail( 'feedback_img');?>
                                                
                                            </div>
                                            <div class="media-body">
                                                <h4>Molly Robinson</h4>
                                                <p><?php echo $profession_name ;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endwhile;
                                    }
                                else{
                                    ?>
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
                                <?php
                                }
                                ?>
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
                            <h2 class="title_1"><?php echo $pegeon_ver['news_text_section_text_a_id'];?></h2>
                            <p class="title_2"><?php echo $pegeon_ver['news_text_section_text_b_id'];?></p>
                        </div>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="single_news mt_30">
                                <div class="overflow-hidden">
                                    <?php the_post_thumbnail('post_img');?>
                                </div>
                                <h4 class="mt_25 mb_15"><?php the_title();?></h4>
                                <?php echo wp_trim_words(get_the_content(),20,NULL);?>
                                <a href="<?php the_permalink();?>" class="mt_25 button blue_bg">Read More</a>
                            </div>
                        </div>
                        <?php
                            endwhile;
                        else:
                        ?>
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
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div row="row">
                    <div class="col-12 text-center">
                    <?php $args = array(
                        
                    ); ?>

                    <?php echo paginate_links( $args ); ?>
                    </div>
                </div>
            </div>
            <!-- end news wrapper -->

            <!-- start contact wrapper -->
            <div class="contact_wrapper section_padd overflow-hidden" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb_30" data-aos="zoom-in">
                            <h2 class="title_1"><?php echo $pegeon_ver['contact_text_section_text_a_id'];?></h2>
                            <p class="title_2"><?php echo $pegeon_ver['contact_text_section_text_b_id'];?></p>
                        </div>
                        <div class="col-lg-5 col-xl-4 mt_30" data-aos="fade-right">
                            <aside>
                                <div class="address">
                                    <h4>Get in touch with us</h4>
                                    <ul>
                                        <li>
                                            <strong>Phone : </strong>
                                            <a href="tel:<?php echo $pegeon_ver['contact_section_phone'];?>">+<?php echo $pegeon_ver['contact_section_phone'];?></a>
                                        </li>
                                        <li>
                                            <strong>Email : </strong>
                                            <a href="<?php echo $pegeon_ver['contact_section_email'];?>"><?php echo $pegeon_ver['contact_section_email'];?></a>
                                        </li>
                                        <li>
                                            <strong>Address : </strong>
                                            <p><?php echo $pegeon_ver['contact_section_address'];?></p>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-7 col-xl-8 mt_30 text-center" data-aos="fade-left">
                            <!-- <form action="#" method="post">
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
                            </form> -->
                            <?php echo do_shortcode('[contact-form-7 id="158" title="form"]');?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- end main content -->
        <?php get_footer();?>
