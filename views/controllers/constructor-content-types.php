<?php

// Main content type constructor

$page_id = $_SESSION['typeVar'];

if( have_rows('global_content_types', $page_id) ):
	while ( have_rows('global_content_types', $page_id) ) : the_row();
		$layout = get_row_layout();

		switch ($layout) {
			case 'content_text_block':
				get_template_part('views/content-types/cont', 'text-block');
			break;
			case 'content_downloads':
				get_template_part('views/content-types/cont', 'downloads');
			break;
			case 'content_image_gallery':
				get_template_part('views/content-types/cont', 'image-gallery');
			break;
			case 'content_full_width_image':
				get_template_part('views/content-types/cont', 'full-width-image');
			break;
			case 'content_video':
				get_template_part('views/content-types/cont', 'video');
			break;
			case 'content_table':
				get_template_part('views/content-types/cont', 'table');
			break;
			case 'content_accordion':
				get_template_part('views/content-types/cont', 'accordion');
			break;
			case 'content_padding':
				get_template_part('views/content-types/cont', 'padding');
			break;
			case 'teasers_3x3':
				get_template_part('views/content-types/teasers', '3x3');
			break;
			case 'category_category_block':
				get_template_part('views/content-types/cont', 'cat-block');
			break;
		}

	endwhile;

endif;

?>
