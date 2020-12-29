<?php
    // theme_support
    function theme_support(){
        add_theme_support('title-tag');
        add_theme_support('menu');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme','theme_support');
    // css link
    function all_css(){
        wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome', get_template_directory_uri(). '/css/fontawesome.min.css');
        wp_enqueue_style('carousel', get_template_directory_uri(). '/css/owl.carousel.min.css');
        wp_enqueue_style('popup', get_template_directory_uri(). '/css/magnific-popup.css');
        wp_enqueue_style('aos', get_template_directory_uri(). '/css/aos.css');
        wp_enqueue_style('helper', get_template_directory_uri(). '/css/helper.css');
        wp_enqueue_style('style', get_template_directory_uri(). '/css/style.css');
        wp_enqueue_style('responsive', get_template_directory_uri(). '/css/responsive.css');
        wp_enqueue_style('stylecss', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','all_css');
    // js link
    function all_js(){
        wp_enqueue_script('jquery');
        wp_enqueue_script('plugins', get_theme_file_uri(). '/js/plugins.js');
        wp_enqueue_script('main', get_theme_file_uri().'/js/main.js');
    }
    add_action('wp_enqueue_scripts','all_js');
    // menu setup 
    register_nav_menus(array(
            'primary_menu' => 'primaray menu'
        ));
    
        function callback(){ 
        ?>
            <a href="<?php echo esc_url(site_url()); ?>/wp-admin/nav-menus.php?action=edit&menu=0">Create Menu</a>
        <?php
        }
        if ( !file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
            return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
        } 
        else {
            require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';
        }
    function add_menu_link_class($atts, $item, $args)
        {
        $atts['class'] = 'nav-link';
        return $atts;
        }
    add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
    // Service setup
    function service_custom(){
        register_post_type('service_custom_id',array(
            'labels' => array(
                'menu_name' => 'Services Section',
                'name'      => 'services_section',
                'add_new'   => 'Add New Social',
                'all_items' => 'All Posts',
                'add_new_item'=>'Add New Service',
                ),
            'public'        => true,
            'supports'       => array('title','editor'),
            'menu_icon'     =>'dashicons-share',

        ));
    }
    add_action('init','service_custom');
    // social_icon
    function social_icon(){
        register_post_type('social_icon_id',array(
            'labels' => array(
                'menu_name' => 'Social icon',
                'name'      => 'Social icon',
                'add_new'   => 'Add New Social',
                'all_items' => 'All Posts',
                'add_new_item'=>'Add New Social',
                ),
            'public'        => true,
            'supports'       => array('title'),
            'menu_icon'     =>'dashicons-share',

        ));
    }
    add_action('init','social_icon');


    require_once('inc/cmb2-custom.php');
    require_once('inc/redux-framework/redux-framework.php');
    require_once('inc/barebones-config.php');
    