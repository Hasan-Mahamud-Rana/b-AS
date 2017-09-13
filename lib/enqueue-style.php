<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/
if( ! function_exists( 'reverie_enqueue_style' ) ) {
	function reverie_enqueue_style()
	{
		// foundation stylesheet
		wp_register_style( 'foundation-stylesheet', get_stylesheet_directory_uri() . '/foundation/css/foundation.min.css', array(), '' );

		// register genericons icons
	    wp_register_style('genericons', get_stylesheet_directory_uri() . '/css/genericons/genericons.css', array(), '' );

		// Register the Reverie stylesheet
		//wp_register_style( 'base-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		
		// Register Bording stylesheet
		wp_register_style( 'bordingas-stylesheet', get_stylesheet_directory_uri() . '/css/app.css', array(), '', 'all' );

		//wp_enqueue_style( 'base-stylesheet' );
		wp_enqueue_style( 'foundation-stylesheet' );
		wp_enqueue_style( 'genericons' );
		wp_enqueue_style( 'bordingas-stylesheet' );
		
	}
}
add_action( 'wp_enqueue_scripts', 'reverie_enqueue_style' );
?>
