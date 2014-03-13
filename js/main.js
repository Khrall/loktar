jQuery(document).ready(function($) {

	var banner_toggler = $("#banner-content > h1 > span");
	var banner_list = $("#banner-content > ul");

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

    if(!Modernizr.cssvhunit) { $("#banner").height($(window).height()); }

});