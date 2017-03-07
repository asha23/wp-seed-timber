<?php


//==============================================================================
// SCRIPTS & ENQUEUEING
//==============================================================================

add_action( 'wp_enqueue_scripts', 'seed_scripts_and_styles', 999 );

function seed_scripts_and_styles() {
	global $wp_styles;
	if (!is_admin()) {

		// Load asset manifest
		$assetstr = file_get_contents(dirname(dirname(__FILE__))."/build/manifest.json");
		$assets = json_decode($assetstr, true);
		$assets     = array(
			'css' => '/build/css/styles.min.css' . '?' . $assets['build/css/styles.min.css']['hash'],
			'js'  => '/build/js/scripts.min.js' . '?' . $assets['build/js/scripts.min.js']['hash'],
		);

		wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/build/js/modernizr.min.js' );

		wp_register_style( 'seed-stylesheet', get_stylesheet_directory_uri() . $assets['css'], array(), '', 'all' );
		wp_enqueue_style( 'seed-stylesheet' );

		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3', true);
		wp_register_script( 'scripts', get_stylesheet_directory_uri() . $assets['js'], array(), '', true );

		// Do it.
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'scripts' );

	}
}
