(function( $ ) {
	'use strict';

    jQuery(document).ready(function ($) {

        const ele_facebook_links = $('a[href*="facebook.com"]');
        ele_facebook_links.attr('aria-label', "To Facebook");

        const ele_id_jump_linkes = $('#jumptotop');
        ele_id_jump_linkes.attr('aria-label', "Jump to top");

        const ele_instagram_links = $('a[href*="instagram.com"]');
        ele_instagram_links.attr('aria-label', "To Instagram");

        const ele_google_links = $('a[href*="https://g"], a[href*="google.com"], a[href*="maps.app.goo.gl"]');
        ele_google_links.attr('aria-label', "To Google");

    });

})( jQuery )