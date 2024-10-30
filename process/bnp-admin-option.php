<?php 

function bnp_option_page_update(){
	$post_types = $_POST['bnp_post_type'];
	$clean_post_type = array();

	foreach ( $post_types as $post_type) {
		 array_push($clean_post_type, sanitize_text_field( $post_type ));
		};

	$bnp_opts		=	[
		'slider_speed'			=> 	absint( $_POST['bnp_slider_speed'] ),
		'number_post'			=>	absint( $_POST['bnp_number_post'] ),
		'post_type'				=>	$clean_post_type
	];

	update_option( 'bnp_opts', $bnp_opts );

	wp_redirect( admin_url( 'admin.php?page=bnp_options&status=1' ) );
}
