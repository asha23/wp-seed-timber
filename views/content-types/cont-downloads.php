<?php

	// Downloads

	$page_id = $_SESSION['typeVar'];
	$title = get_sub_field('title', $page_id);
	$downloads = get_sub_field('downloads', $page_id);

?>

<section class="container download-links">

<?php
	if($title):
?>
		<header>
			<h1><?php echo $title; ?></h1>
		</header>

<?php
	endif;

?>
	<div class="row">
<?php

	foreach($downloads as $download):
		$download_image = $download['download_image'];
		$download_text = $download['download_text'];
		$button_type = $download['button_type'];
		$link_title = $download['link_title'];

		switch($button_type):
			case "internal":
				$target = "";
				$url = $download['inturl'];
			break;
			case "external":
				$target = "target='_blank'";
				$url = $download['exturl'];
			break;
			case "file":
				$target = "target='_blank'";
				$url = $download['fileurl'];
			break;
		endswitch;

?>

		<article class="download-item match">
<?php
			if($download_image):
?>


					<div class="download-item-left">
						<figure>
							<img src="<?php echo $download_image['url']; ?>" class="img-respond" alt="<?php echo $link_title; ?>">
						</figure>
					</div>

					<div class="download-item-right">
						<h4><?php echo $link_title; ?></h4>
						<?php echo $download_text; ?>


<?php
						switch($button_type) :
							case "internal":
?>
								<a href="<?php echo $url; ?>" class="main-button-non-block" <?php echo $target; ?>>Download</a>
<?php
							break;
							case "external":
?>
								<a href="<?php echo $url; ?>" class="main-button-non-block" <?php echo $target; ?>>Download</a>
<?php
							break;
							case "file":
?>
								<a href="<?php echo $url; ?>" class="main-button-non-block" <?php echo $target; ?>>Download</a>
<?php
							break;
?>
						</li>
<?php
						endswitch;
?>

					</div>

<?php
			else:
?>
				<div class="download-item-full">
					<h4><?php echo $link_title; ?></h4>
					<?php echo $download_text; ?>
					<a href="<?php echo $url; ?>" class="button-download">Download now</a>
				</div>
<?php
			endif;
?>
		</article>
<?php
	endforeach;
?>
	</div>

</section>
