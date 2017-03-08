<?php


//==============================================================================
// ENQUEUE SCRIPTS AND STYLES FOR THEME OPTIONS
//==============================================================================

function admin_styles() {
	wp_register_style('theme-options-styles', get_bloginfo('template_url') . '/includes/css/theme-options.css');
	wp_enqueue_style('theme-options-styles');
}

// SETUP GLOBAL ACF Options

if( function_exists('acf_add_options_page') ) {

	$parent = acf_add_options_page(
		array(
			'page_title' => 'Site Options',
			'menu_title' => 'Site Options',
			'redirect' => true
		)
	);

	acf_add_options_sub_page( array( 'page_title' => 'General', 'menu_title' => 'General', 'parent_slug' => $parent['menu_slug'] ) );
	acf_add_options_sub_page( array( 'page_title' => 'Header', 'menu_title' => 'Header', 'parent_slug' => $parent['menu_slug'] ) );
	acf_add_options_sub_page( array( 'page_title' => 'Footer', 'menu_title' => 'Footer', 'parent_slug' => $parent['menu_slug'] ) );

}
