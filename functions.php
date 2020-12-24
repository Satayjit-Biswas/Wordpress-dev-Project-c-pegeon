<?php
    // theme_support
    function theme_support(){
        add_theme_support('title-tag');
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
        wp_enqueue_script('plugins', get_template_directory_uri(). '/js/plugins.js');
        wp_enqueue_script('main', get_template_directory_uri().'/js/main.js');
    }
    add_action('wp_enqueue_scripts','all_js');
