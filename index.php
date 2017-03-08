<?php
$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$templates = array( 'index.twig' );
Timber::render( $templates, $context );
