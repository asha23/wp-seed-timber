<?php

$page_id = $_SESSION['typeVar'];
$cat_name = get_sub_field('category_name', $page_id);

$category_name = $cat_name->name;
$category_slug = $cat_name->slug;
$category_taxonomy = $cat_name->taxonomy;

$list_type = get_sub_field('list_type', $page_id);

?>

<section class="container category-listing">
<?php if ($list_type == "teaser"): ?>
	<div class="row">
<?php endif; ?>
<?php
		$args = array( 'post_type' => 'employees', $category_taxonomy => $category_slug, 'posts_per_page' => -1 );
		$category_post = new WP_Query($args);
		if($category_post->have_posts()):
			while($category_post->have_posts()):
				$category_post->the_post();


					switch($list_type) :
						case 'block':
							get_template_part('views/content-types/cont', 'people-full');
						break;
						case 'teaser':
							get_template_part('views/content-types/cont', 'people-teasers');
						break;
					endswitch;

			endwhile;
		endif;
		wp_reset_postdata();
?>
<?php if ($list_type == "teaser"): ?>
	</div>
<?php endif; ?>

</section>
