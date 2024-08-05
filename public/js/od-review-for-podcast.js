(function ($) {
    'use strict';

    jQuery(document).ready(function ($) {
       $('.wpmtst-testimonial').each(function () {
            if ($(this).find('.readmore-excerpt').length === 0) {
                $(this).find('.readmore-toggle').hide();
            }
        });        
    });
})(jQuery);