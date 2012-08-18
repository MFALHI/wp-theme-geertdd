(function ($) {

	// Load syntax highlighter if needed
	Modernizr.load({
		test: $('code[class*="language-"]').length,
		yep: [
			GEERTDD.theme_url + '/css/prism.css',
			GEERTDD.theme_url + '/js/prism.js'
		],
		complete: function () {
			Prism.highlightAll();
		}
	});

}(jQuery));
