<?php

	// Full width images

	$page_id = $_SESSION['typeVar'];
	$image = get_sub_field('image', $page_id);
	$parallax = get_sub_field('parallax_this', $page_id);
	$title = get_sub_field('title', $page_id);
	$text = get_sub_field('text', $page_id);

	if($parallax):
?>
		<section class="container-fluid full-width-image img-respond" data-parallax="scroll" data-image-src="<?php echo $image['url']; ?>" style="background-size: 100% auto;"></section>
<?php
	else:
?>
		<section class="container-fluid full-width-image img-respond">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-respond">
		</section>
<?php
	endif;
?>
