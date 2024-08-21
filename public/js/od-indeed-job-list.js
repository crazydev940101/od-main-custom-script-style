(function( $ ) {
	'use strict';

    jQuery(document).ready(function ($) {
        var observer = new MutationObserver(function(mutations) {
            // Check if the modal is loaded
            var fa_clock = $('.fa-clock');
						
            if (fa_clock) {
                $('.fa-clock').addClass('fa-clock-o');
            }
        });

        // Configure the observer to observe changes to the body element
        observer.observe(document.body, { childList: true, subtree: true });
    });

})( jQuery )