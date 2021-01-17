<?php
    // theme_support
    function theme_support(){
        add_theme_support('title-tag');
        add_theme_support('menu');
        add_theme_support('post-thumbnails');
        add_image_size( 'expert_man', 370, 450 );
        add_image_size( 'feedback_img', 64, 64 );
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
    // menu section setup 
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
    // Service section setup
    function service_custom(){
        register_post_type('service_custom_id',array(
            'labels' => array(
                'menu_name' => 'Services Section',
                'name'      => 'Services Section',
                'add_new'   => 'Add New Social',
                'all_items' => 'All Posts',
                'add_new_item'=>'Add New Service',
                ),
            'public'        => true,
            'supports'       => array('title','editor'),
            'menu_icon'     =>'dashicons-hammer',

        ));
    }
    add_action('init','service_custom');
    // Expert section setup
    function expert_custom(){
        register_post_type('expert_custom_id',array(
            'labels' => array(
                'menu_name' => 'Expert Man Section',
                'name'      => 'Expert Man',
                'add_new'   => 'Add New Expert Man',
                'all_items' => 'All Posts',
                'add_new_item'=>'Add New expert',
                ),
            'public'        => true,
            'supports'       => array('title','editor','thumbnail'),
            'menu_icon'     =>'dashicons-hammer',

        ));
    }
    add_action('init','expert_custom');
    // Ask section setup
    function ask_custom(){
        register_post_type('ask_custom_id',array(
            'labels' => array(
                'menu_name' => 'Ask Section',
                'name'      => 'Ask',
                'add_new'   => 'Add New Ask',
                'all_items' => 'All Ask',
                'add_new_item'=>'Add New Ask',
                ),
            'public'        => true,
            'supports'       => array('title','editor'),
            'menu_icon'     =>'dashicons-hammer',

        ));
    }
    add_action('init','ask_custom');
    // price section setup
    function monthly_price_custom(){
        register_post_type('monthly_price_id',array(
            'labels' => array(
                'menu_name' => 'monthly price Section',
                'name'      => 'Price Section',
                'add_new'   => 'Add New Package',
                'all_items' => 'All Package',
                'add_new_item'=>'Add New Package',
                ),
            'public'        => true,
            'supports'       => array('title','editor'),
            'menu_icon'     =>'dashicons-hammer',

        ));
    }
    add_action('init','monthly_price_custom');
    function yearly_price_custom(){
        register_post_type('yearly_price_id',array(
            'labels' => array(
                'menu_name' => 'yearly price Section',
                'name'      => 'Price Section',
                'add_new'   => 'Add New Package',
                'all_items' => 'All Package',
                'add_new_item'=>'Add New Package',
                ),
            'public'        => true,
            'supports'       => array('title','editor'),
            'menu_icon'     =>'dashicons-hammer',

        ));
    }
    add_action('init','yearly_price_custom');
    // feedback section setup
    function feedback_custom(){
        register_post_type('feedback_custom_id',array(
            'labels' => array(
                'menu_name' => 'feedback Section',
                'name'      => 'feedback',
                'add_new'   => 'Add New feedback',
                'all_items' => 'All feedback',
                'add_new_item'=>'Add New feedback',
                ),
            'public'        => true,
            'supports'       => array('title','editor','thumbnail'),
            'menu_icon'     =>'dashicons-hammer',

        ));
    }
    add_action('init','feedback_custom');
    // social icon section
    function social_icon(){
        register_post_type('social_icon_id',array(
            'labels' => array(
                'menu_name' => 'Social icon',
                'name'      => 'Social icon',
                'add_new'   => 'Add New Social',
                'all_items' => 'All Icon',
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
    