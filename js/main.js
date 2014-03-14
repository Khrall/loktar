jQuery(document).ready(function($) {

	var banner_toggler = $("#banner-content h1 > span");
	var banner_list = $("#banner-content ul");

	var toggle_banner_on = function() {
		banner_toggler.unbind();
		banner_toggler.html('-');
		banner_list.show(
			'slide', 
			{ direction: 'up', easing: 'easeOutBounce' }, 
			700, 
			function() { banner_toggler.bind('click', toggle_banner_off); }
		);
	}

	var toggle_banner_off = function() {
		banner_toggler.unbind();
		banner_toggler.html('+');
		banner_list.hide(
			'slide', 
			{ direction: 'up' },
			250,
			function() { banner_toggler.bind('click', toggle_banner_on); }
		);
	}

	/*
	var toggle_banner = function() {
		if(banner_toggler.isToggled) {
			banner_toggler.html('+');
			banner_list.hide('slide', {direction: 'up'});
			banner_toggler.isToggled = false;
		} else {
			banner_toggler.html('-');
			banner_list.show('slide', {direction: 'up', easing: 'easeOutBounce'}, 1000);
			banner_toggler.isToggled = true;
		}
	}*/

	//THIS IS A TEST, COME ON

    banner_toggler.bind('click', toggle_banner_on);     

    if(!Modernizr.cssvhunit) { $("#top-content").height(window.innerHeight); }
    $("#slideshow").responsiveSlides();

    var onOrientationChange = function() {
    	if(window.innerHeight > 320) { $("#top-content").height('320px'); }
    	else { $("#top-content").height('100vh'); }
    }

    var onResize = function() {
    	$("#slideshow img").position({my: 'center center', at:'center center', of: '#banner-content'});
    }

    $(window).bind('orientationchange', onOrientationChange);
    $(window).bind('resize', onResize);

});
