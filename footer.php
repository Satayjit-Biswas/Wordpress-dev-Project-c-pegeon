<?Php global $pegeon_ver?>
        <!-- start footer -->
        <footer>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 text-md-right mt_20 order-md-2">
                        <ul class="social_icons">
                            <?php
                            $social_section_post = new WP_Query(array(
                                'post_type'      => 'social_icon_id',
                                'posts_per_page' => -1,
                                'order'          => 'ASC'
                            ));

                                if ($social_section_post -> have_posts()) {
                                    while($social_section_post -> have_posts()) : $social_section_post -> the_post();
                                        $social_name = get_post_meta(get_the_ID(),'social_section_logo_nane',true);
                                        $social_link = get_post_meta(get_the_ID(),'social_section_logo_link',true);

                        ?>
                            <li><a href="<?php echo $social_link;?>"><i class="<?php echo $social_name;?>"></i></a></li>

                        <?php
                        endwhile;
                        }

                         ?>
                            <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> -->
                        </ul> 
                    </div>
                    <div class="col-md-8 mt_20 order-md-1">
                        <p><?php echo $pegeon_ver['footer_section_text_id'];?></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!-- start back to top -->
        <a href="#" class="back-to-top button blue_bg"><i class="fal fa-angle-up"></i></a>
        <!-- end back to top -->

        <!-- all js here -->
        <?php wp_footer();?>
    </body>
    

<!-- Mirrored from sagormia.xyz/html/Pegeon/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 17:30:27 GMT -->
</html>