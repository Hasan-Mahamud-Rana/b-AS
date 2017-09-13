<?php

if ( ! function_exists( 'bordingweb_scripts' ) ) :
	function bordingweb_scripts() {

	// Enqueue Main Stylesheet
		wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/css/foundation.css' );
		wp_enqueue_style( 'theme-stylesheet', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'scroller-stylesheet', get_template_directory_uri() . '/css/scroller.css' );

	// Deregister the jquery version bundled with wordpress
		wp_deregister_script( 'jquery' );

	// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
		wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', false );

	// Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required)
		wp_register_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.0', false );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

		wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js' );
		wp_register_script( 'foundation-topbar', get_template_directory_uri() . '/js/foundation/foundation.topbar.js' );
		


	// Enqueue all registered scripts
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'fastclick' );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'foundation' );
		wp_enqueue_script( 'foundation-topbar' );
	}
	add_action( 'wp_enqueue_scripts', 'bordingweb_scripts' );
	endif;
?>