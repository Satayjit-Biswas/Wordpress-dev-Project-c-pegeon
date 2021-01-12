<?php

require_once __DIR__ . '/CMB2/init.php';
// service_section
function service_section_fields(){
	$service_section_metabox = new_cmb2_box( array(
		'id'            => 'service_metabox',
		'title'         => __( 'service section', 'Applad' ),
		'object_types'  => 'service_custom_id',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$service_section_metabox->add_field( array(
		'name'       => __( 'service icon name', 'cmb2' ),
		'desc'       => __( 'input your service icon name ( for example : fab fa-facebook-f , fab fa-twitter etc...)', 'cmb2' ),
		'id'         => 'service_section_icon_nane',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
}
add_action( 'cmb2_admin_init', 'service_section_fields' );
// expert_section
function expert_section_fields(){
	$expert_section_metabox = new_cmb2_box( array(
		'id'            => 'expert_metabox',
		'title'         => __( 'Expert Social Section', 'Applad' ),
		'object_types'  => 'expert_custom_id',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$expert_section_metabox->add_field( array(
		'name'       => __( 'Facebook-link', 'cmb2' ),
		'desc'       => __( 'input your Facebook link', 'cmb2' ),
		'id'         => 'expert_section_facebook_link',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$expert_section_metabox->add_field( array(
		'name'       => __( 'Twitter-link', 'cmb2' ),
		'desc'       => __( 'input your Twitter link', 'cmb2' ),
		'id'         => 'expert_section_twitter_link',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$expert_section_metabox->add_field( array(
		'name'       => __( 'Instagram-link', 'cmb2' ),
		'desc'       => __( 'input your Instagram link', 'cmb2' ),
		'id'         => 'expert_section_instagram_link',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$expert_section_metabox->add_field( array(
		'name'       => __( 'Linkedin-link', 'cmb2' ),
		'desc'       => __( 'input your Linkedin link', 'cmb2' ),
		'id'         => 'expert_section_linkedin_link',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'expert_section_fields' );
// // Ask_section
function ask_section_fields(){
	$ask_section_metabox = new_cmb2_box( array(
		'id'            => 'ask_metabox',
		'title'         => __( 'Ack', 'pegeon' ),
		'object_types'  => 'ask_custom_id',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$ask_section_metabox->add_field( array(
		'name'    => 'Collapse',
		'id'      => 'collapse_id',
		'type'    => 'radio_inline',
		'options' => array(
			'true' => __( 'Show', 'cmb2' ),
			'false'   => __( 'Hidden', 'cmb2' ),
		),
		'default' => 'true',
	) );
}
add_action('cmb2_admin_init', 'ask_section_fields' );
// price_icon
function monthly_price_section_fields(){
	$monthly_price_section_metabox = new_cmb2_box( array(
		'id'            => 'monthly_price_metabox',
		'title'         => __( 'price section', 'pegeon' ),
		'object_types'  => 'monthly_price_id',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$monthly_price_section_metabox->add_field( array(
		'name'       => __( 'Price', 'cmb2' ),
		'desc'       => __( 'Price $', 'cmb2' ),
		'id'         => 'monthly_price_section_price',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$monthly_price_section_metabox->add_field( array(
		'name'       => __( 'Features', 'cmb2'),
		'desc'       => __( 'input your price link', 'cmb2' ),
		'id'         => 'monthly_price_features',
		'type'       => 'text',
		'repeatable' => true,
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$monthly_price_section_metabox->add_field( array(
		'name'       => __( 'Select text', 'cmb2' ),
		'desc'       => __( 'Butten Text', 'cmb2' ),
		'id'         => 'monthly_price_section_select_text',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$monthly_price_section_metabox->add_field( array(
		'name'       => __( 'Button Url', 'cmb2' ),
		'desc'       => __( 'Button Url', 'cmb2' ),
		'id'         => 'monthly_price_section_button_url',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'monthly_price_section_fields' );
function yearly_price_section_fields(){
	$yearly_price_section_metabox = new_cmb2_box( array(
		'id'            => 'yearly_price_metabox',
		'title'         => __( 'price section', 'pegeon' ),
		'object_types'  => 'yearly_price_id',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$yearly_price_section_metabox->add_field( array(
		'name'       => __( 'Price', 'cmb2' ),
		'desc'       => __( 'Price $', 'cmb2' ),
		'id'         => 'yearly_price_section_price',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$yearly_price_section_metabox->add_field( array(
		'name'       => __( 'Features', 'cmb2'),
		'desc'       => __( 'input your price link', 'cmb2' ),
		'id'         => 'yearly_price_features',
		'type'       => 'text',
		'repeatable' => true,
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$yearly_price_section_metabox->add_field( array(
		'name'       => __( 'Select text', 'cmb2' ),
		'desc'       => __( 'Butten Text', 'cmb2' ),
		'id'         => 'yearly_price_section_select_text',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$yearly_price_section_metabox->add_field( array(
		'name'       => __( 'Button Url', 'cmb2' ),
		'desc'       => __( 'Button Url', 'cmb2' ),
		'id'         => 'yearly_price_section_button_url',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'yearly_price_section_fields' );

// social_icon
function social_section_fields(){
	$social_section_metabox = new_cmb2_box( array(
		'id'            => 'social_metabox',
		'title'         => __( 'social section', 'pegeon' ),
		'object_types'  => 'social_icon_id',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$social_section_metabox->add_field( array(
		'name'       => __( 'social-name', 'cmb2' ),
		'desc'       => __( 'input your social logo name (for example : fab fa-facebook-f,fab fa-twitter)', 'cmb2' ),
		'id'         => 'social_section_logo_nane',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$social_section_metabox->add_field( array(
		'name'       => __( 'social-link', 'cmb2' ),
		'desc'       => __( 'input your social link', 'cmb2' ),
		'id'         => 'social_section_logo_link',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'social_section_fields' );
