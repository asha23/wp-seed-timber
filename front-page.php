<?php
	$pageId = get_the_ID();
	$_SESSION['typeVar'] = $pageId;
	get_header();
	get_template_part( 'views/loops/loop', 'generic' );
	get_footer();
?>
