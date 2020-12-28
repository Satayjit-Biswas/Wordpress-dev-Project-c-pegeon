<?php

require_once __DIR__ . '/CMB2/init.php';

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
