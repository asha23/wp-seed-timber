<?php
/*
	Template Name: Example Custom Posts
*/

$context = Timber::get_context();

$examples  = array(
  'post_type' => 'examples',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);

$context['posts'] = Timber::get_posts();
$context['examples'] = Timber::get_posts($examples);
$templates = array( 'examples.twig' );
Timber::render( $templates, $context );
