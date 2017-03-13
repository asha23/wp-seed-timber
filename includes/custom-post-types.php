<?php

// Use this file to create custom post types.
// Example post type - Change this or delete it

function example_post_type() {

    $labels = array(
        'name'                  => _x( 'Example', 'Post Type General Name', 't_seed_theme' ),
        'singular_name'         => _x( 'Example', 'Post Type Singular Name', 't_seed_theme' ),
        'name_admin_bar'        => __( 'Example', 't_seed_theme' ),
        'parent_item_colon'     => __( 'Parent Example:', 't_seed_theme' ),
        'all_items'             => __( 'All Examples', 't_seed_theme' ),
        'add_new_item'          => __( 'Add New Example', 't_seed_theme' ),
        'add_new'               => __( 'Add New', 't_seed_theme' ),
        'new_item'              => __( 'New Item', 't_seed_theme' ),
        'edit_item'             => __( 'Edit Item', 't_seed_theme' ),
        'update_item'           => __( 'Update Item', 't_seed_theme' ),
        'view_item'             => __( 'View Item', 't_seed_theme' ),
        'search_items'          => __( 'Search Item', 't_seed_theme' ),
        'not_found'             => __( 'Not found', 't_seed_theme' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 't_seed_theme' ),
        'items_list'            => __( 'Items list', 't_seed_theme' ),
        'items_list_navigation' => __( 'Items list navigation', 't_seed_theme' ),
        'filter_items_list'     => __( 'Filter items list', 't_seed_theme' ),
    );
    $args = array(
        'label'                 => __( 'Example', 't_seed_theme' ),
        'description'           => __( 'Example Custom Post', 't_seed_theme' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'revisions', 'thumbnail', 'excerpt', 'page-attributes'),
        'taxonomies'            => array( ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-images-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page'
    );
    register_post_type( 'examples', $args );
}
add_action( 'init', 'example_post_type', 0 );

// Example taxonomy

function example_taxonomy() {
	$labels = array(
		'name'              => _x( 'Example Types', 'taxonomy general name', 't_seed_theme' ),
		'singular_name'     => _x( 'Example Types', 'taxonomy singular name', 't_seed_theme' ),
		'search_items'      => __( 'Search Example Types', 't_seed_theme' ),
		'all_items'         => __( 'All Example Types', 't_seed_theme' ),
		'parent_item'       => __( 'Parent Example Type', 't_seed_theme' ),
		'parent_item_colon' => __( 'Parent Example Type:', 't_seed_theme' ),
		'edit_item'         => __( 'Edit Example Type', 't_seed_theme' ),
		'update_item'       => __( 'Update Example Type', 't_seed_theme' ),
		'add_new_item'      => __( 'Add New Example Type', 't_seed_theme' ),
		'new_item_name'     => __( 'New Example Type', 't_seed_theme' ),
		'menu_name'         => __( 'Example Type', 't_seed_theme' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical'  => true,
		'public'        => true,
		'has_archive'   => true,
	);

	register_taxonomy( 'example_category', 'examples', $args );
}
add_action( 'init', 'example_taxonomy', 0 );
