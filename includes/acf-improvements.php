<?php

// Add Flexible Content layout title

function my_layout_title($title, $field, $layout, $i) {
	if($value = get_sub_field('layout_title')) {
		return $value;
	} else {
		foreach($layout['sub_fields'] as $sub) {
			if($sub['name'] == 'layout_title') {
				$key = $sub['key'];
				if(array_key_exists($i, $field['value']) && $value = $field['value'][$i][$key])
					return $value;
			}
		}
	}
	return $title;
}

add_filter('acf/fields/flexible_content/layout_title', 'my_layout_title', 10, 4);

add_action('acf/input/admin_head', 'my_acf_admin_head');

// Stop instant deletion of items

function my_acf_admin_head() {

	?>
	<script type="text/javascript">
	(function($) {

		acf.add_action('ready', function(){

			$('body').on('click', '.acf-icon.-minus.small', function( e ){

				return confirm("Do you really want to delete this?");

			});

		});

	})(jQuery);
	</script>

	<?php

}
