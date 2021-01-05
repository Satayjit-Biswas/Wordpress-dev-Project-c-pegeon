<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "pegeon_ver";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'pegeon Options', 'pegeon' ),
        'page_title'           => __( 'pegeon Options', 'pegeon' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 5,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'pegeon' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'pegeon' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'pegeon' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'pegeon' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'pegeon' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'pegeon' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'pegeon' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'pegeon' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'pegeon' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'pegeon' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'pegeon' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */
    // -> Logo section
    Redux::setSection( $opt_name, array(
        'title' => __( 'logo Section', 'pegeon' ),
        'id'    => 'logo_section',
        'desc'  => __( 'logo Section Option.', 'pegeon' ),
        'icon'  => 'el el-picture'
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'logo img', 'pegeon' ),
            'desc'       => __( 'Header Section logo img, visit: ', 'pegeon' ),
            'id'         => 'logo_section_img',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'logo_section_img_id',
                    'type'     => 'media',
                    'title'    => __( 'Img', 'pegeon' ),
                    'desc'     => __( 'Upload your Header Section logo Img', 'pegeon' ),
                    'url'      => true,
                    'default'  => array(
                        'url'  => get_template_directory_uri().'/img/logo.png'
                    ),
                ),
            )
        ) );

    // -> Home section
    Redux::setSection( $opt_name, array(
        'title' => __( 'Home Section', 'pegeon' ),
        'id'    => 'home_section',
        'desc'  => __( 'home Section Option.', 'pegeon' ),
        'icon'  => 'el el-home'
        ) );
        // Slider a 
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Slider a', 'pegeon' ),
            'desc'       => __( 'Home Section img , text: ', 'pegeon' ),
            'id'         => 'slider_section_a',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'slider_section_a_bg',
                    'type'     => 'media',
                    'title'    => __( 'bg-Img', 'pegeon' ),
                    'desc'     => __( 'Upload your bg Img in slider', 'pegeon' ),
                    'url'      => true,
                    'default'  => array(
                        'url'  => get_template_directory_uri().'/img/home.jpg'
                    )
                ),
                array(
                    'id'       => 'slider_section_a_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Heading text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Digital Marketing For <br> Startup Business'
                    ),
                
                array(
                    'id'       => 'slider_section_a_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub Heading text', 'pegeon' ),
                    'desc'     => __( 'Type Your Sub Heading', 'pegeon' ),
                    'default'  => 'Design is a way of life, a point of view. It involves the whole complex of visual communications: talent, creative ability manual.'
                    ),
                ),
            ) );
        // Slider b 
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Slider b', 'pegeon' ),
            'desc'       => __( 'Home Section img , text: ', 'pegeon' ),
            'id'         => 'slider_section_b',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'slider_section_b_bg',
                    'type'     => 'media',
                    'title'    => __( 'bg-Img', 'pegeon' ),
                    'desc'     => __( 'Upload your bg Img in slider', 'pegeon' ),
                    'url'      => true,
                    'default'  => array(
                        'url'  => get_template_directory_uri().'/img/home_2.jpg'
                    )
                ),
                array(
                    'id'       => 'slider_section_b_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Heading text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Digital Marketing For <br> Startup Business'
                    ),
                
                array(
                    'id'       => 'slider_section_b_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub Heading text', 'pegeon' ),
                    'desc'     => __( 'Type Your Sub Heading', 'pegeon' ),
                    'default'  => 'Design is a way of life, a point of view. It involves the whole complex of visual communications: talent, creative ability manual.'
                    ),
                ),
            ) );
        // Slider c 
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Slider c', 'pegeon' ),
            'desc'       => __( 'Home Section img , text: ', 'pegeon' ),
            'id'         => 'slider_section_c',
            'subsection' => true,
            'fields'     => array(
            array(
                'id'       => 'slider_section_c_bg',
                'type'     => 'media',
                'title'    => __( 'bg-Img', 'pegeon' ),
                'desc'     => __( 'Upload your bg Img in slider', 'pegeon' ),
                'url'      => true,
                'default'  => array(
                    'url'  => get_template_directory_uri().'/img/home_3.jpg'
                )
                ),
            array(
                'id'       => 'slider_section_c_text_a_id',
                'type'     => 'text',
                'title'    => __( 'Heading text', 'pegeon' ),
                'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                'default'  => 'Digital Marketing For <br> Startup Business'
                ), 
            array(
                'id'       => 'slider_section_c_text_b_id',
                'type'     => 'textarea',
                'title'    => __( 'Sub Heading text', 'pegeon' ),
                'desc'     => __( 'Type Your Sub Heading', 'pegeon' ),
                'default'  => 'Design is a way of life, a point of view. It involves the whole complex of visual communications: talent, creative ability manual.'
                ),
            ),
        ) );
        //left button 
        Redux::setSection( $opt_name, array(
            'title'      => __( ' Left-button', 'pegeon' ),
            'desc'       => __( 'Home button: ', 'pegeon' ),
            'id'         => 'slider_section_leftbutton',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'slider_section_leftbutton_text_id',
                    'type'     => 'text',
                    'title'    => __( 'leftbutton text', 'pegeon' ),
                    'desc'     => __( 'Type Your leftbutton text', 'pegeon' ),
                    'default'  => 'Get Started'
                ),
                array(
                    'id'       => 'slider_section_lrftbutton_url_id',
                    'type'     => 'text',
                    'title'    => __( 'leftbutton url', 'pegeon' ),
                    'desc'     => __( 'Type Your leftbutton url', 'pegeon' ),
                    'default'  => '#'
                    ),
                ),
        ) );
        //rifht button 
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Right-button', 'pegeon' ),
            'desc'       => __( 'Home button: ', 'pegeon' ),
            'id'         => 'slider_section_rightbutton',
            'subsection' => true,
            'fields'     => array(
            array(
                'id'       => 'slider_section_rightbutton_text_id',
                'type'     => 'text',
                'title'    => __( 'rightbutton text', 'pegeon' ),
                'desc'     => __( 'Type Your leftbutton text', 'pegeon' ),
                'default'  => 'Contact Us'
                ),
            
            array(
                'id'       => 'slider_section_rightbutton_url_id',
                'type'     => 'text',
                'title'    => __( 'rightbutton url', 'pegeon' ),
                'desc'     => __( 'Type Your leftbutton url', 'pegeon' ),
                'default'  => '#contact'
                ),
            ),
        ) );

    // -> About section
    Redux::setSection( $opt_name, array(
        'title' => __( 'About Section', 'pegeon' ),
        'id'    => 'about_section',
        'desc'  => __( 'About Section Option.', 'pegeon' ),
        'icon'  => 'el el-adult'
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'About img', 'pegeon' ),
            'desc'       => __( 'About Section img, visit: ', 'pegeon' ),
            'id'         => 'about_section_img',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'about_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Heading text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'ABOUT US'
                ),
                array(
                    'id'       => 'about_section_img_id',
                    'type'     => 'media',
                    'title'    => __( 'Img', 'pegeon' ),
                    'desc'     => __( 'Upload your team Img', 'pegeon' ),
                    'url'      => true,
                    'default'  => array(
                        'url'  => get_template_directory_uri().'/img/about.jpg'
                    ),
                ),
                array(
                    'id'       => 'about_section_text_b_id',
                    'type'     => 'text',
                    'title'    => __( 'Title text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'We are the largest Business expert in Europe and Asia'
                ),
                array(
                    'id'       => 'about_section_text_c_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub title text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Sorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.'
                ),
            )
        ) );
        // About counter 1 
        Redux::setSection( $opt_name, array(
            'title'      => __( 'About counter 1', 'pegeon' ),
            'desc'       => __( 'About Section counter 1, visit: ', 'pegeon' ),
            'id'         => 'about_section_counter_a',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'about_section_counter_a_text_a_id',
                    'type'     => 'text',
                    'title'    => __('Counter Number', 'pegeon' ),
                    'desc'     => __( 'Type Your Number', 'pegeon' ),
                    'default'  => '82'
                ),
                array(
                    'id'       => 'about_section_counter_a_text_b_id',
                    'type'     => 'text',
                    'title'    => __( 'Counter text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Project Complete
                    '
                ),
                array(
                    'id'       => 'about_section_counter_a_text_c_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Counter sub text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Lorem Ipsum is simply dummy text of the printing type setting
                    '
                ),
            )
        ) );
        // About counter 2 
        Redux::setSection( $opt_name, array(
            'title'      => __( 'About counter 2', 'pegeon' ),
            'desc'       => __( 'About Section counter 2, visit: ', 'pegeon' ),
            'id'         => 'about_section_counter_b',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'about_section_counter_b_text_a_id',
                    'type'     => 'text',
                    'title'    => __('Counter Number', 'pegeon' ),
                    'desc'     => __( 'Type Your Number', 'pegeon' ),
                    'default'  => '24'
                ),
                array(
                    'id'       => 'about_section_counter_b_text_b_id',
                    'type'     => 'text',
                    'title'    => __( 'Counter text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Great Results'
                ),
                array(
                    'id'       => 'about_section_counter_b_text_c_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Counter sub text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Lorem Ipsum is simply dummy text of the printing type setting'
                ),
            )
        ) );
    // -> Banner section
    Redux::setSection( $opt_name, array(
        'title' => __( 'Banner Section', 'pegeon' ),
        'id'    => 'Banner_section',
        'desc'  => __( 'Banner Section Option.', 'pegeon' ),
        'icon'  => 'el  el-flag'
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Banner Text', 'pegeon' ),
            'desc'       => __( 'Banner Section All Data, visit: ', 'pegeon' ),
            'id'         => 'Banner_section_post',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'Banner_section_img_id',
                    'type'     => 'media',
                    'title'    => __( 'Bg Img', 'pegeon' ),
                    'desc'     => __( 'Upload your Banner Bg Img', 'pegeon' ),
                    'url'      => true,
                    'default'  => array(
                        'url'  => get_template_directory_uri().'/img/banner.jpg'
                    ),
                ),
                array(
                    'id'       => 'Banner_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Heading text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Let’s create something together?
                    '
                ),
                
                array(
                    'id'       => 'Banner_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
                ),
                array(
                    'id'       => 'Banner_section_text_c_id',
                    'type'     => 'text',
                    'title'    => __( 'Button text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Contact Us'
                ),
                array(
                    'id'       => 'Banner_section_text_url_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Button url', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => '#'
                ),
            )
        ) );
    // -> Grow section
    Redux::setSection( $opt_name, array(
        'title' => __( 'Grow Section', 'pegeon' ),
        'id'    => 'grow_section',
        'desc'  => __( 'Grow Section Option.', 'pegeon' ),
        'icon'  => 'el  el-flag'
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Grow Text', 'pegeon' ),
            'desc'       => __( 'Grow Section All Data, visit: ', 'pegeon' ),
            'id'         => 'grow_section_post',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'grow_section_img_id',
                    'type'     => 'media',
                    'title'    => __( 'Bg Img', 'pegeon' ),
                    'desc'     => __( 'Upload your grow Img', 'pegeon' ),
                    'url'      => true,
                    'default'  => array(
                        'url'  => get_template_directory_uri().'/img/faq.png'
                    ),
                ),
                array(
                    'id'       => 'grow_section_text_a_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Heading text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Grow your <span class="blue_text">business earn</span> <br class="d-none d-lg-block"> more money'
                ),
                
                array(
                    'id'       => 'grow_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub text', 'pegeon' ),
                    'desc'     => __( 'Type Your sub Heading text', 'pegeon' ),
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu'
                ),
                array(
                    'id'       => 'grow_section_text_c_id',
                    'type'     => 'textarea',
                    'title'    => __( 'li text', 'pegeon' ),
                    'desc'     => __( 'Type Your li text', 'pegeon' ),
                    'default'  => 'Innovation idea for business tecnology which is best in the world
                    '
                ),
                array(
                    'id'       => 'grow_section_text_d_id',
                    'type'     => 'textarea',
                    'title'    => __( 'li text', 'pegeon' ),
                    'desc'     => __( 'Type Your li text', 'pegeon' ),
                    'default'  => 'Famous online marketing agency in this modern country'
                ),
                array(
                    'id'       => 'grow_section_text_e_id',
                    'type'     => 'textarea',
                    'title'    => __( 'li text', 'pegeon' ),
                    'desc'     => __( 'Type Your li text', 'pegeon' ),
                    'default'  => 'Digital content marketing online agency in the world'
                ),
                array(
                    'id'       => 'grow_section_text_f_id',
                    'type'     => 'textarea',
                    'title'    => __( 'li text', 'pegeon' ),
                    'desc'     => __( 'Type Your li text', 'pegeon' ),
                    'default'  => 'Follow this steps for growing your business profit'
                ),
                array(
                    'id'       => 'grow_section_button_text_id',
                    'type'     => 'text',
                    'title'    => __( 'Button text', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => 'Read More'
                ),
                array(
                    'id'       => 'grow_section_button_url_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Button url', 'pegeon' ),
                    'desc'     => __( 'Type Your Heading text', 'pegeon' ),
                    'default'  => '#'
                ),
            )
        ) );
    // -> All text section
    Redux::setSection( $opt_name, array(
        'title' => __( 'All Text section', 'pegeon' ),
        'id'    => 'text_section',
        'desc'  => __( 'All Text Section Option.', 'pegeon' ),
        'icon'  => 'el  el-list-alt'
        ) );
        // -> Service text
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Service Section text', 'pegeon' ),
            'desc'       => __( 'Service text, visit: ', 'pegeon' ),
            'id'         => 'service_text_section_text',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'service_text_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'pegeon' ),
                    'desc'     => __( 'Type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Our special services'
                ),
                array(
                    'id'       => 'service_text_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub-Title', 'pegeon' ),
                    'desc'     => __( 'Type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
                ),
            )
        ) );
        // -> Portfolio text
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Portfolio Section text', 'pegeon' ),
            'desc'       => __( 'Portfolio text, visit: ', 'pegeon' ),
            'id'         => 'portfolio_text_section_text',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'portfolio_text_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Our Recent Projects'
                ),
                array(
                    'id'       => 'portfolio_text_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub-Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
                ),
            )
        ) );
        // -> Expert text
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Expert Section text', 'pegeon' ),
            'desc'       => __( 'Expert text, visit: ', 'pegeon' ),
            'id'         => 'Expert_text_section_text',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'expert_text_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Meet Our Expert'
                ),
                array(
                    'id'       => 'expert_text_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub-Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
                ),
            )
        ) );
        // -> Faq text
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Faq Section text', 'pegeon' ),
            'desc'       => __( 'Faq text, visit: ', 'pegeon' ),
            'id'         => 'Faq_text_section_text',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'faq_text_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Ask Something From
                    '
                ),
                array(
                    'id'       => 'faq_text_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub-Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
                ),
                array(
                    'id'       => 'faq_text_section_img_id',
                    'type'     => 'media',
                    'title'    => __( 'Img', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => array(
                        'url'  => get_template_directory_uri().'/img/boost-img.png'
                    ),
                ),
            )
        ) );
        // -> Pricing text
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Pricing Section text', 'pegeon' ),
            'desc'       => __( 'Pricing text, visit: ', 'pegeon' ),
            'id'         => 'Pricing_text_section_text',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'pricing_text_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Our Pricing Plan'
                ),
                array(
                    'id'       => 'pricing_text_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub-Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
                ),
            )
        ) );
        // -> Feedback text
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Feedback Section text', 'pegeon' ),
            'desc'       => __( 'Feedback text, visit: ', 'pegeon' ),
            'id'         => 'Feedback_text_section_text',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'feedback_text_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Our Customers Feedback'
                ),
                array(
                    'id'       => 'feedback_text_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub-Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
                ),
            )
        ) );
        // -> News text
        Redux::setSection( $opt_name, array(
            'title'      => __( 'News Section text', 'pegeon' ),
            'desc'       => __( 'News text, visit: ', 'pegeon' ),
            'id'         => 'News_text_section_text',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'news_text_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Our Recent Updates'
                ),
                array(
                    'id'       => 'news_text_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub-Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
                ),
            )
        ) );
        // -> Contact text
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Contact Section text', 'pegeon' ),
            'desc'       => __( 'Contact text, visit: ', 'pegeon' ),
            'id'         => 'Contact_text_section_text',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'contact_text_section_text_a_id',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Contact Us'
                ),
                array(
                    'id'       => 'contact_text_section_text_b_id',
                    'type'     => 'textarea',
                    'title'    => __( 'Sub-Title', 'pegeon' ),
                    'desc'     => __( 'type your text', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
                ),
            )
        ) );
    

    // -> Footer section
    Redux::setSection( $opt_name, array(
        'title' => __( 'Footer Section', 'pegeon' ),
        'id'    => 'footer_section',
        'desc'  => __( 'footer Section Option.', 'pegeon' ),
        'icon'  => 'el el-wrench-alt'
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Footeter text', 'pegeon' ),
            'desc'       => __( 'Footer section, visit: ', 'pegeon' ),
            'id'         => 'footer_section_text',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'footer_section_text_id',
                    'type'     => 'text',
                    'title'    => __( 'Text', 'pegeon' ),
                    'desc'     => __( 'Upload your Header Section logo Img', 'pegeon' ),
                    'url'      => true,
                    'default'  => 'Copyright 2020. All Rights Reserved'
                ),
            )
        ) );

        