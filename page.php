<?php

$pageId = get_the_ID();
$_SESSION['typeVar'] = $pageId;

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();

$templates = array( 'page.twig' );

Timber::render( $templates, $context );
