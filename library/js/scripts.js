// Base Javascript

// Suppress Lint semicolon warnings
/* jshint asi: true */

jQuery(document).ready(function($) {

	// Galleries
	// ============================================

	// Video

	$('.light-gallery-videos').lightGallery({
		selector: '.video-item',
		mode: 'lg-fade',
		youtubePlayerParams: {
			modestbranding: 1,
			showinfo: 0,
			rel: 0,
			controls: 1
		},
		vimeoPlayerParams: {
			byline : 0,
			portrait : 0,
			color : 'A90707'
		}
	});

	// Images

	$('.light-gallery-images').lightGallery({
		selector: '.gallery-item',
		mode: 'lg-fade'
	});


	// Element matching (matchheight.js)
	// ============================================


	// Navbar animated hamburger
	// ============================================

	$('.navbar-toggle').click(function() {
        $(this).children('div').toggleClass('active');
        $(this).toggleClass('active');
    });

});
