(function ($) {
    'use strict';

    jQuery(document).ready(function ($) {
		            
            // Access the individual data attributes
            let rating = $('.glsr-field-rating');
            let content = $('.glsr-field-textarea');
            let name = $('.glsr-field-text');
            let email = $('.glsr-field-email'); 
		
			rating.find('label').hide();
			content.find('label').hide();
		    name.find('label').hide();
		    email.find('label').hide();
		
		    content.find('textarea').attr('placeholder', 'Tell us your thought');
		
            console.log('Rating:', rating); // Outputs: "Rating"
            console.log('Content:', content); // Outputs: "Content"
            console.log('Name:', name); // Outputs: "Name"
		    console.log('Email:', email); // Outputs: "Email"

    });
})(jQuery);