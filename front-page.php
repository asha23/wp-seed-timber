<?php
/**
 * The main front page template file
 *
 */
 $page_id = get_the_ID();
 $_SESSION['page_id'] = $page_id;

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();

$templates = array( 'front-page.twig' );

Timber::render( $templates, $context );
