<?php
/*
	Template Name: Page with content blocks
*/

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$templates = array( 'page-content-blocks.twig' );
Timber::render( $templates, $context );
