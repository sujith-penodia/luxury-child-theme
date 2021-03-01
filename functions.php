<?php 
// Starts the engine.
//require_once get_template_directory() . '/inc/customizer.php';

add_action( 'wp_enqueue_scripts', 'brindle_tierra_enqueue_styles' );
function brindle_tierra_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 



// Includes color stuff
require_once get_stylesheet_directory() . '/inc/defaults.php';
require_once get_stylesheet_directory() . '/inc/customizer.php';
require_once get_stylesheet_directory() . '/inc/css-output.php';








require 'vendor/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/sujith-penodia/luxury-child-theme/',
	__FILE__, //Full path to the main plugin file or functions.php.
	'luxury-child-theme-master'
);
 ?>