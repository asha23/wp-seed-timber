<?php
$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$templates = array( 'single-examples.twig' );
Timber::render( $templates, $context );
