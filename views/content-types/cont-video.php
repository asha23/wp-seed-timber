<?php

$page_id = $_SESSION['typeVar'];
$block_title = get_sub_field('block_title', $page_id);
$videos = get_sub_field('videos', $page_id);
$video_text = get_sub_field('video_title_text', $page_id);

?>

<section class="container video-gallery">
	<?php
		if($block_title):
	?>
			<header>
				<h1><?php echo $block_title; ?></h1>
			</header>
	<?php
		endif;

		if($video_text):
	?>
			<article class="gallery-text">
				<?php echo $video_text; ?>
			</article>
	<?php
		endif;
	?>
	<div class="light-gallery-videos row">
<?php
		foreach($videos as $video):
			$poster = $video['video_poster'];
			$title = $video['video_title'];
			$description = $video['video_text'];
			$url = $video['video_url'];
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

				<img src="<?php echo $poster['sizes']['employee-square']; ?>" class="img-respond" alt="<?php echo $title; ?>">

			</figure>
<?php
		endforeach;
?>
	</div>

</section>
