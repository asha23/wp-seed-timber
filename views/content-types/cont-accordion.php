<?php

	// Accordion

	$page_id = $_SESSION['typeVar'];
	$accordions = get_sub_field('accordion', $page_id);

?>

<section class="container accordion-container">

<?php
	foreach($accordions as $accordion):
		$title = $accordion['title'];
		$content = $accordion['content'];
?>

		<div class="set">

			<a href="javascript:;" class="title">
				<h3><?php echo $title; ?> <i class="fa fa-plus"></i></h3>
			</a>

			<div class="content">
				<?php echo $content; ?>
			</div>

		</div>

<?php
	endforeach;
?>

</section>
