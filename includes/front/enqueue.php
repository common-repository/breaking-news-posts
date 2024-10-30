<?php 

function bnp_enqueue(){
	wp_register_style( 'bnp_style', plugins_url( '/assets/css/style.css', BNP_PLUGIN_PATH ) );
	wp_enqueue_style( 'bnp_style' );

	wp_register_script( 'bnp_slider', plugins_url( '/assets/js/slider.js', BNP_PLUGIN_PATH ), ['jquery'], false, true );

	wp_enqueue_script( 'bnp_slider' );
	wp_dequeue_script( 'twentynineteen-priority-menu' );


}