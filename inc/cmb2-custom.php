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
// social_icon
function social_section_fields(){
	$social_section_metabox = new_cmb2_box( array(
		'id'            => 'social_metabox',
		'title'         => __( 'social section', 'Applad' ),
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
