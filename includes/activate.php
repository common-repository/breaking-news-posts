<?php 

function bnp_register_plugin(){

	$bnp_opts = get_option( 'bnp_opts' );

	if( !$bnp_opts ){
		add_option( 'bnp_opts',[
			'slider_speed'			=> 	4000,
			'number_post'			=>	5,
			'post_type'				=>	['post', 'page']
		]);
	}

}

