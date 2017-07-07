(function ($) {
	"use strict";


	// Sticky Menu
	var windows = $(window);

	windows.scroll(function() {

	    var headerHeight = $("#nav").height();
	    var MenuWrapper = $('.menu');

	    var scrollH = windows.scrollTop();

	    if (scrollH >= headerHeight + 150) {

	        MenuWrapper.addClass("sticky-nav");
	    } else {
	        MenuWrapper.removeClass("sticky-nav");

	    }
	});

	$('.mobile-menu').meanmenu({
		meanScreenWidth: "768"
	});
	var feed = new Instafeed({
		get: 'user',
		userId: '2286603943',
		accessToken: '2286603943.89ebb40.4b20ded3bf0742c88bb5106bf7c4db24',
		template: '<div class="singleInst"><a target="_blank" href="{{link}}"><img src="{{image}}" alt=""></a></div>',
		limit: 8
	 });
	feed.run();
}(jQuery));	