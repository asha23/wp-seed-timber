<?php

//==============================================================================
// INCLUDE NEEDED FILES
// This includes all the core functionality for the base theme
// Don't remove the any of these files or you will burn in hell
//==============================================================================

require_once( 'includes/core.php' ); 					// This is all the core base functions in one place.
require_once( 'includes/option-pages.php' ); 			// Add theme options and general options pages.
require_once( 'includes/navwalker.php' ); 				// Add a navigation walker for the main menu.
require_once( 'includes/scripts-styles.php' ); 			// Enqueue scripts and styles.
require_once( 'includes/menus.php' ); 					// Add Menu functions.
require_once( 'includes/custom-post-types.php' ); 		// Create useful custom post types. Can be changed or removed
require_once( 'includes/default-pages.php' ); 			// Create default pages on theme activation (and only the first time).
require_once( 'includes/acf-fix.php' ); 				// Fix for the delete function in Advanced Custom Fields (Adds an alert when you try and delete a section)
require_once( 'includes/custom-functions.php' ); 		// Custom functions - Use this to create your own functions

// .. Add your own here

?>
