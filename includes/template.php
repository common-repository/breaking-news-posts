<?php 

function bnp_displays($content){
	$bnp_opts			= get_option( 'bnp_opts' );
	$bnp_slider_speed 	= absint( $bnp_opts['slider_speed'] );
	$bnp_number_post	= absint( $bnp_opts['number_post'] );
	$bnp_post_type		= $bnp_opts['post_type'];
	$recent_posts 		= wp_get_recent_posts([
		'numberposts'	=>	$bnp_number_post,
		'post_type'		=>	$bnp_post_type
	]);


	$HTML = '<div class="bnp-container-news" js-bnp-sl-speed='. esc_attr($bnp_slider_speed) .'>';
	foreach ( $recent_posts as $post ) {

		$permalink 	= 	get_permalink( $post["ID"] );
		$title		=	get_the_title( $post["ID"] );
		
		$HTML .= '<div class="bnp-item"><a href='. $permalink .'>'. $title .'</a></div>';

	}
	$HTML .= '</div>';

	return $content . $HTML;
}