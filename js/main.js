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

    if(!Modernizr.cssvhunit) { 
    	if(Math.abs(window.orientation) == 90) { $("#top-content").height('214px'); } // IS LANDSCAPE
    	else { $("#top-content").height(window.innerHeight); }
    }

    var onOrientationChange = function() {
    	$("#top-content").height(window.innerHeight);
    	$("#slideshow img").position({my: 'center center', at:'center center', of: '#banner-content'});
    }

    $(window).bind('resize orientationchange', onOrientationChange);

    var names = ['tracks']
    var offsets = [0]
    var imageElements = {};
    var loadParallax = function(callback) {
    	var loaded = 0;
    	var width = window.innerWidth;
    	var height = width * 1080 / 1920;
    	
    	for(var i = 0; i < names.length; i++) {
    		var url = themeURL + '/img/' + names[i] + '.png';
    		var element = $('<img src="'+ url + '">')
    		var offset = 340 + offsets[i] - height;
    		imageElements[names[i]] = element;
			element.load( function() {
    			$(this).width(width)
    				   .height(height)
    				   .attr('data-stellar-vertical-offset', offset)
    				   .attr('data-stellar-ratio', 0.5)
    				   .addClass('parallax')
    				   .css('z-index', i+1);
    			loaded++;
    			if(loaded == names.length) callback();
    		});
    	}
    }

    loadParallax(function() {
    	for(var i = 0; i < names.length; i++) {
			imageElements[names[i]].appendTo('body');
    	}
    	$.stellar();
    })

});
