<?php

$page_id = $_SESSION['typeVar'];

$block_title = get_sub_field('title', $page_id);
$block_type = get_sub_field('block_type', $page_id);
$full_content = get_sub_field('full_width_content', $page_id);

// Left block

$l_image_or_plain_text = get_sub_field('left_image_or_plain_text', $page_id);
$l_column_width = get_sub_field('left_column_width', $page_id);
$l_text = get_sub_field('left_text', $page_id);
$l_image = get_sub_field('left_image', $page_id);

// Right block

$r_image_or_plain_text = get_sub_field('right_image_or_plain_text', $page_id);
$r_column_width = get_sub_field('right_column_width', $page_id);
$r_text = get_sub_field('right_text', $page_id);
$r_image = get_sub_field('right_image', $page_id);

?>

<section class="container text-block">

<?php
		if($block_title):
?>
			<header>
				<h1><?php echo $block_title; ?></h1>
			<header>
<?php
		endif;

		switch($block_type) :
			case "full-width":
?>
				<article class="full-width">
					<?php echo $full_content; ?>
				</article>
<?php
			break;
			case "split":
?>
			<div class="row">
				<article class="col-md-<?php echo $l_column_width; ?> col-sm-6">
<?php
					if($l_image_or_plain_text == "plain-text"):
						echo $l_text;
					else:
?>
					<figure>
						<img src="<?php echo $l_image['url']; ?>" class="img-respond" alt="">
					</figure>
<?php
					endif;
?>
				</article>

				<article class="col-md-<?php echo $r_column_width; ?> col-sm-6">
<?php
					if($r_image_or_plain_text == "plain-text"):
						echo $r_text;
					else:
?>
					<figure>
						<img src="<?php echo $r_image['url']; ?>" class="img-respond" alt="">
					</figure>
<?php
					endif;
?>
				</article>
			</div>
<?php
		break;
	endswitch;
?>

</section>
