// Base Javascript

// Suppress Lint semicolon warnings
/* jshint asi: true */

jQuery(document).ready(function($) {

    // Nav hamburgler toggler
    // ===========================================================

    $('.navbar-toggle').click(function() {
        $(this).children('div').toggleClass('active');
        $(this).toggleClass('active');
    });

});
