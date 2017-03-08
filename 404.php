<?php
/**
 * The main front page template file
 *
 */

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();

$templates = array( '404.twig' );

Timber::render( $templates, $context );
