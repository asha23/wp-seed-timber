<?php

//==============================================================================
// MENUS & NAVIGATION
//==============================================================================

// the main menu
function t_seed_main_nav() {
	// display the wp3 menu if available - Suppress errors.
	if ( has_nav_menu( "main-nav" ) ) {
	    wp_nav_menu(array(
	    	'container' => false,                           // remove nav container
	    	'container_class' => 'menu clearfix',           // class of container (should you choose to use it)
	    	'menu' => __( 'Main Menu', 'timber_seed_theme' ),  	// nav name
	    	'menu_class' => 'nav navbar-nav',  				// adding custom nav class
	    	'theme_location' => 'main_nav',                 // where it's located in the theme
	    	'before' => '',                                 // before the menu
			'after' => '',                                  // after the menu
			'link_before' => '',                            // before each link
			'link_after' => '',                             // after each link
			'depth' => 2,                                   // limit the depth of the nav
	    	//'walker' => new wp_bootstrap_navwalker()        // for bootstrap nav
		));
	};
}

// the footer menu (should you choose to use one)
function t_seed_footer_links() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    	'menu' => __( 'Footer Menu', 'timber_seed_theme' ),   	// nav name
    	'menu_class' => 'nav footer-nav clearfix',      // adding custom nav class
    	'theme_location' => 'footer_menu',             // where it's located in the theme
    	'before' => '',                                 // before the menu
		'after' => '',                                  // after the menu
		'link_before' => '',                            // before each link
		'link_after' => '',                             // after each link
		'depth' => 0,                                   // limit the depth of the nav
	));
}
