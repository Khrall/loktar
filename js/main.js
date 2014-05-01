var ua = navigator.userAgent, isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);

Modernizr.addTest('ipad', function () {
  return !!navigator.userAgent.match(/iPad/i);
});

jQuery(document).ready(function($) {
    
	var banner_toggler = $("#banner h1 > span");
	var banner_list = $("#banner ul");

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

    var resizePage = function() {
    	$(".page-content").each(function() {
    		var parentHeight = $(this).height();
    		var childHeight = $(this).find('.wrapper').height();
    		if(parentHeight < childHeight) $(this).height(childHeight) + 100;
    	});
    }

    $(window).bind('resize', resizePage);
    resizePage();

    var names = ['tracks', 'underground']
    var imageElements = {};
    var loadParallax = function(callback) {
    	var loaded = 0;
    	var width = window.innerWidth;
    	var height = width * 1080 / 1920;

    	for(var i = 0; i < names.length; i++) {
    		var url = themeURL + '/img/' + names[i] + '.png';
    		var ratio = 300/height;
            var offset = - (height * ratio) * i - (i+1) * window.innerHeight;

    		var element = $('<img src="'+ url + '">')
    		.addClass('parallax')
            .css('z-index', 4-i)
    		.attr('data-stellar-vertical-offset', offset)
    		.attr('data-stellar-ratio', ratio);

    		imageElements[names[i]] = element;
			element.load( function() {
    			$(this).width(width).height(height);
    			loaded++;
    			if(loaded == names.length) callback(height);
    		});
    	}
    }

    var loadImages = function(callback) {
    	var loaded = 0;
    	var width = window.innerWidth;
    	var height = width * 1080 / 1920;

    	for(var i = 0; i < names.length; i++) {
    		var url = themeURL + '/img/' + names[i] + '.png';
    		var element = $('<img src="'+ url + '">')
    		imageElements[names[i]] = element;
			element.load( function() {
    			$(this).width(width).height(height);
    			loaded++;
    			if(loaded == names.length) callback(height);
    		});
    	}
    }

    if(Modernizr.ipad) {
        var height = window.innerHeight;
        var width = window.innerWidth;
        $(".page-content").height(height > width ? height : width);
    }

    var section = 0;
    if (!isMobileWebkit) {
	    loadParallax(function(height) {
	    	for(var i = 0; i < names.length; i++) {
				imageElements[names[i]].appendTo('body');
	    	}
	    	$.stellar();
            $(document).bind('scroll', function() {
                if(section == 0 && $(document).scrollTop() - $('#about').offset().top > 0) {
                    section = 1;
                    imageElements[names[0]].css('z-index', 1);
                    imageElements[names[1]].css('z-index', 2);
                } else if(section == 1 && $(document).scrollTop() - $('#about').offset().top <= 0) {
                    section = 0;
                    imageElements[names[0]].css('z-index', 2);
                    imageElements[names[1]].css('z-index', 1);
                }
            })
	    });
	} else {
		loadImages(function(height) {
			for(var i = 0; i < names.length; i++) {
				$('.content-breaker:eq('+i+')')
				.height(height)
				.append(imageElements[names[i]])
	    	}
		})
	}

    
    /*
	$("#showcase .profiles").bxSlider({
		onSlideBefore: function($slideElement, oldIndex, newIndex) {
			$("#showcase ul.descriptions li[project-id='"+oldIndex+"']").fadeOut(250, function() {
				$("#showcase ul.descriptions li[project-id='"+newIndex+"']").fadeIn(250);
			});
		}
	})*/
    
    var oldSliderIndex = 0;
    $("#showcase ul.descriptions li[project-id!='0']").hide();

    window.unoSlider = $('#profile-slider').unoSlider({
        callback: function() {
            var newIndex = this;
            $("#showcase ul.descriptions li[project-id='"+oldSliderIndex+"']").fadeOut(250, function() {
                $("#showcase ul.descriptions li[project-id='"+newIndex+"']").fadeIn(250);
                oldSliderIndex = newIndex;
            });
        }
    });



});
