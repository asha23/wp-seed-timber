<?php

$page_id = $_SESSION['typeVar'];
$title = get_sub_field('block_title', $page_id);
$image_gallery = get_sub_field('image_gallery', $page_id);
$image_gallery_text = get_sub_field('image_gallery_text', $page_id);
?>

<section class="container image-gallery">
<?php
	if($title):
?>
		<header>
			<h1><?php echo $title; ?></h1>
		</header>
<?php
	endif;

	if($image_gallery_text):
?>
		<article class="gallery-text">
			<?php echo $image_gallery_text; ?>
		</article>
<?php
	endif;
?>
	<div class="light-gallery-images row">
<?php

	foreach($image_gallery as $image):
		$img = $image['url'];
		$caption = $image['caption'];
		$title = $image['title'];
		$description = $image['description'];
		$url = $image['url'];
?>
		<figure class="gallery-item" data-src="<?php echo $url; ?>">

			<div class="inner-overlay">
				<div class="overlay-text">
					<h4><?php echo $title; ?></h4>
					<p><?php echo $description; ?></p>
				</div>
			</div>

			<div class="view-button">
				<div class="inner">
					<h4><i class="fa fa-expand"></i></h4>
				</div>
			</div>

			<img src="<?php echo $img; ?>" class="img-respond" alt="<?php echo $title; ?>">

		</figure>
<?php
	endforeach;
?>
	</div>
</section>
