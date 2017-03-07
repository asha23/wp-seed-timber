<?php

// Use this file to create custom post types.

/*

// Example post type

function example_post_type() {

    $labels = array(
        'name'                  => _x( 'Galleries', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Example', 'Post Type Singular Name', 'text_domain' ),
        'name_admin_bar'        => __( 'Galleries', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Galleries', 'text_domain' ),
        'add_new_item'          => __( 'Add New Example', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Galleries', 'text_domain' ),
        'description'           => __( 'Galleries Custom Post', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'revisions'),
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
        'capability_type'       => 'page',
    );
    register_post_type( 'example', $args );
}
add_action( 'init', 'example_post_type', 0 );

// Example taxonomy

function example_taxonomy() {
	$labels = array(
		'name'              => _x( 'Example Types', 'taxonomy general name' ),
		'singular_name'     => _x( 'Example Types', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Example Types' ),
		'all_items'         => __( 'All Example Types' ),
		'parent_item'       => __( 'Parent Example Type' ),
		'parent_item_colon' => __( 'Parent Example Type:' ),
		'edit_item'         => __( 'Edit Example Type' ),
		'update_item'       => __( 'Update Example Type' ),
		'add_new_item'      => __( 'Add New Example Type' ),
		'new_item_name'     => __( 'New Example Type' ),
		'menu_name'         => __( 'Example Type' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public'        => true,
		'has_archive'   => true,
	);

	register_taxonomy( 'example_category', 'example', $args );
}
add_action( 'init', 'example_taxonomy', 0 );

*/
