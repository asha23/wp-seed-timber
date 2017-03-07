<?php

$page_id = $_SESSION['typeVar'];
$teasers = get_sub_field('teaser_component');
?>

<section class="container teaser-block">

	<div class="row">
<?php
	if($teasers):
		foreach($teasers as $post):
			setup_postdata($post);
			$teaser = get_field('teaser_text', $post);
?>
			<article class="teaser-item match">

				<a href="<?php the_permalink(); ?>">
					<div class="inner">
						<div class="text">
							<header>
								<h2><?php the_title(); ?></h2>
							</header>
<?php
							if($teaser):
?>
							<div class="teaser-text">
								<?php echo $teaser; ?>
							</div>
<?php
							endif;
?>
						</div>
						<div class="overlay"></div>

					</div>
				</a>
			</article>
<?php
		endforeach;
		wp_reset_postdata();
	endif;
?>
	</div>
</section>
