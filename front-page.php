<?php
/**
 * The main front page template file
 *
 */

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();

$templates = array( 'front-page.twig' );

Timber::render( $templates, $context );
