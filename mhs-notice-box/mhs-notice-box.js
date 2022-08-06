// MHS Notice Box jQuery
jQuery(document).ready(function($) {
	// Set up close button functionality
	$('.mhs-notice-close').on('click', function(){
			$(this).parents('.mhs-notice-box').remove();
	});
});
