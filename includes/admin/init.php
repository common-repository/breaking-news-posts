<?php 

function bnp_admin_init(){
	add_action( 'admin_enqueue_scripts', 'bnp_admin_enqueue' );
}