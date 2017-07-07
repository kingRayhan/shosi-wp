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


}(jQuery));	