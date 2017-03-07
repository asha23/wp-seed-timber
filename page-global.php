<?php
	/*
		Template Name: Global Page
	*/

	get_header();
	$pageId = get_the_ID();
	$_SESSION['typeVar'] = $pageId;

	get_template_part( 'views/controllers/constructor', 'content-types' );

	get_footer();
?>
