<?php

//==============================================================================
// MAIN WORDPRESS CORE FUNCTIONS
// YOU SHOULD PROBABLY LEAVE THIS AS IT IS UNLESS YOU NEED CERTAIN FEATURES
//==============================================================================

add_action( 'after_setup_theme', 't_seed_ahoy', 16 );

//==============================================================================
// REMOVE A LOAD OF WORDPRESS CLUTTER
//==============================================================================

function t_seed_ahoy() {
    add_action( 'init', 't_seed_head_cleanup' );
    add_filter( 'the_generator', 't_seed_rss_version' );
    add_filter( 'wp_head', 't_seed_no_comment_widget', 1 );
    add_action( 'wp_head', 't_seed_remove_comments_style', 1 );
    add_filter( 'gallery_style', 't_seed_gallery_style' );
    add_filter( 'widget_text', 'do_shortcode');
    t_seed_theme_support();
    add_filter('body_class', 't_seed_body_class');
    add_filter( 'the_content', 't_seed_no_image_ptags' );
    add_filter( 'excerpt_more', 't_seed_excerpt_more' );
    add_action('admin_menu', 't_seed_remove_admin_menus');
}

//==============================================================================
// HEADER CLEANUP
//==============================================================================

function t_seed_head_cleanup() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
	add_filter( 'style_loader_src', 't_seed_remove_wp_ver', 9999 );
	add_filter( 'script_loader_src', 't_seed_remove_wp_ver', 9999 );
}

//==============================================================================
// REMOVE SCRIPTS/STYLE VERSIONS
//==============================================================================

function t_seed_remove_wp_ver( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

//==============================================================================
// RSS VERSION
//==============================================================================

function t_seed_rss_version() {
	return '';
}

//==============================================================================
// REMOVE COMMENT WIDGET
//==============================================================================

function t_seed_no_comment_widget() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}

//==============================================================================
// REMOVE COMMENT STYLING
//==============================================================================

function t_seed_remove_comments_style() {
	global $wp_widget_factory;
	if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
	}
}

//==============================================================================
// REMOVE GALLERY STYLING
//==============================================================================

function t_seed_gallery_style($css) {
	return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
}

//==============================================================================
// THEME SUPPORT
//==============================================================================

function t_seed_theme_support() {

	// wp thumbnails
	add_theme_support( 'post-thumbnails' );

	// Custom thumbnail sizes (add as many as you like) - Or use a plugin. It's easier.

	add_image_size( 'teaser-half', 524, 270, true );
	add_image_size( 'teaser-full', 1100, 400, true );
	add_image_size( 'teaser-main', 300, 300, true );

	// rss thingy
	add_theme_support('automatic-feed-links');

	// wp menus
	add_theme_support( 'menus' );

	// registering wp3+ menus

	register_nav_menus(
		array(
			'main-nav' => __( 'The Main Menu', 't_seed_theme' ),   // main nav in header
			'footer-links' => __( 'Footer Links', 't_seed_theme' ) // secondary nav in footer
		)
	);
}

//==============================================================================
// ASSORTED RANDOM CLEANUP ITEMS
//==============================================================================

function t_seed_no_image_ptags($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

//==============================================================================
// CUSTOM EXCERPT
//==============================================================================

function t_seed_excerpt_more($more) {
	global $post;
	// edit here if you like
	return '...  <a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __( 'Read', 't_seed_theme' ) . get_the_title($post->ID).'">'. __( '<p>&nbsp;</p><button class="btn btn-info">Read more <i class="fa fa-angle-double-right"></i></button>', 't_seed_theme' ) .'</a>';
}

//==============================================================================
// ADD BODY CLASSES
//==============================================================================

function t_seed_body_class($classes) {
	global $post;
	if (!$post) return $classes;
	$classes[] = 'page-'.$post->post_name;

	if ($post->post_parent) {
		$ppost = get_post($post->post_parent);
		$classes[] = 'section-'.$ppost->post_name;
	}
	return $classes;
}

//==============================================================================
// REMOVE TOP LEVEL ADMIN PAGES FROM SIDE MENU
//==============================================================================

function t_seed_remove_admin_menus() {
    // remove_menu_page( 'edit.php' ); // posts
    remove_menu_page( 'edit-comments.php' ); // comments
    // remove_menu_page( 'edit.php?post_type=page' ); // pages
}

//==============================================================================
// REMOVE TOP LEVEL ADMIN PAGES FROM NAV BAR
//==============================================================================

function t_seed_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 't_seed_admin_bar_render');

//==============================================================================
// CUSTOMISE TITLE TAG
//==============================================================================

add_filter( 'wp_title', 't_seed_rw_title', 10, 3 );
function t_seed_rw_title( $title, $sep, $seplocation ) {
    global $page, $paged;

    if ( is_feed() )
            return $title;

    // Add the blog name

    if ( 'right' == $seplocation )
            $title .= get_bloginfo( 'name' );
    else
            $title = get_bloginfo( 'name' ) . $title;

    // Add the blog description for the home/front page.

    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
            $title .= " {$sep} {$site_description}";

    // Add a page number if necessary:

    if ( $paged >= 2 || $page >= 2 )
            $title .= " {$sep} " . sprintf( __( 'Page %s', 't_seed_theme' ), max( $paged, $page ) );
            return $title;
}

//==============================================================================
// DASHBOARD WIDGET OVERRIDES
//==============================================================================

function t_seed_remove_dashboard_meta() {
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}

add_action( 'admin_init', 't_seed_remove_dashboard_meta' );

//==============================================================================
// REMOVE SOME USELESS MENU ITEMS UNDER APPEARANCE
//==============================================================================

function t_seed_remove_menu_items(){
	global $submenu;
	unset($submenu['themes.php'][6]); // remove customize link
}

add_action( 'admin_menu', 't_seed_remove_menu_items');

//==============================================================================
// REMOVE THE BACKGROUND IMAGE FUNCTIONALITY
//==============================================================================

function t_seed_remove_background_menu_item() {
	remove_theme_support( 'custom-background' );
}

add_action( 'after_setup_theme','t_seed_remove_background_menu_item', 100 );

//==============================================================================
// CUSTOM ADMIN LOGIN LOGO
//==============================================================================

function t_seed_custom_login_logo() {
	echo '<style type="text/css">h1 a { background-image: url('.get_template_directory_uri().'/build/images/custom-login-logo.png) !important; height:82px!important; background-size:164px!important; width:200px!important;}</style>';
}
add_action('login_head', 't_seed_custom_login_logo');

//==============================================================================
// ADD PAGE EXCERPTS
//==============================================================================

add_post_type_support( 'page', 'excerpt' );
