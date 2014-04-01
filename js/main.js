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

    banner_toggler.bind('click', toggle_banner_on);     

    if(!Modernizr.cssvhunit) { 
    	if(Math.abs(window.orientation) == 90) { $("#top-content").height('214px'); } // IS LANDSCAPE
    	else { $("#top-content").height(window.innerHeight); }
    }

    var onOrientationChange = function() {
    	$("#top-content").height(window.innerHeight);
    }

    $(window).bind('resize orientationchange', onOrientationChange);

    var names = ['tracks', 'underground']
    var imageElements = {};
    var loadParallax = function(callback) {
    	var loaded = 0;
    	var width = window.innerWidth;
    	var height = width * 1080 / 1920;

    	for(var i = 0; i < names.length; i++) {
    		var url = themeURL + '/img/' + names[i] + '.png';
    		var offset = - (height + window.innerHeight) * i - 250;
    		
    		var element = $('<img src="'+ url + '">')
    		.addClass('parallax')
    		.attr('data-stellar-vertical-offset', offset)
    		.attr('data-stellar-ratio', 0.5);

    		imageElements[names[i]] = element;
			element.load( function() {
    			$(this).width(width).height(height);
    			loaded++;
    			if(loaded == names.length) callback(height);
    		});
    	}
    }

    loadParallax(function(height) {
    	for(var i = 0; i < names.length; i++) {
			imageElements[names[i]].appendTo('body');
    	}
    	$.stellar();

    	$("#showcase ul.descriptions li[project-id!='0']").hide();
    	$("#showcase .profiles").bxSlider({
    		onSlideBefore: function($slideElement, oldIndex, newIndex) {
    			$("#showcase ul.descriptions li[project-id='"+oldIndex+"']").fadeOut(250, function() {
    				$("#showcase ul.descriptions li[project-id='"+newIndex+"']").fadeIn(250);
    			});
    		}
    	})
    })

});
