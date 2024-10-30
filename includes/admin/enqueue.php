<?php

function bnp_admin_enqueue(){
	if( empty($_GET['page']) || $_GET['page'] != 'bnp_options' ){
		return '';
	}

	wp_register_style( 'bnp_admin_bootstrap', plugins_url( '/assets/css/bootstrap.min.css', BNP_PLUGIN_PATH ));

	wp_enqueue_style( 'bnp_admin_bootstrap' );
}