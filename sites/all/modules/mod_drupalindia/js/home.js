jQuery(function() {
	jQuery("#slider1").carouFredSel({
		scroll	: {	duration: Drupal.settings.slide_timeout },
		auto	: true,
		prev 	: {	
			button: "#slider_prev",
			key: "left"
		},
		next 	: { 
			button: "#slider_next",
			key: "right"
		},
		pagination: "ul.pagination"
	});
});