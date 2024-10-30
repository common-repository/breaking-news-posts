<?php 
/*
* Plugin Name: Breaking News Posts
* Description: Show your posts as break news/ Posts links slider
* Version: 1.0
* Author: Diego Mandu
* Author URI: http://mandudev.com/
* License: GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: breaknp
*/


if( !function_exists( 'do_action' ) ){
	return "I'm just a plugin, there's not much i can do when called directly";
}

// SETUP
define('BNP_PLUGIN_PATH', __FILE__);


// INCLUDES
include( 'includes/activate.php' );
include( 'includes/template.php' );
include( 'includes/front/enqueue.php' );
include( 'includes/admin/bnp-admin-options.php' );
include( 'process/bnp-admin-option.php' );
include( 'includes/admin/init.php' );
include( 'includes/admin/enqueue.php' );


// HOOKS
register_activation_hook( __FILE__, 'bnp_register_plugin' );
add_filter( 'wp_nav_menu_primary_items', 'bnp_displays' );
add_action( 'wp_enqueue_scripts', 'bnp_enqueue', 101 );
add_action( 'admin_menu', 'bnp_options_admin_menu' );
add_action( 'admin_post_bnp_option_page_update', 'bnp_option_page_update' );
add_action( 'admin_init', 'bnp_admin_init' );

// SHORTCODES

