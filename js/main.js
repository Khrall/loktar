jQuery(document).ready(function($) {

	var banner_toggler = $("#banner-content > h1 > span");
	var banner_list = $("#banner-content > ul");
	banner_toggler.isToggled = false;

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
	}

	banner_toggler.bind('click', toggle_banner)


	console.log($(window).height())

})