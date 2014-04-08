/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *	SCRIPT: Projects.js
 *	AUTHOR: Khrall
 *	UPDATED: 24.02.2014
 *	DESCRIPTION: Holds script relevant only to project pages	
 *	TOC:
 *		- Event Listeners
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
jQuery(document).ready(function($) {

  var $images = $(".slideshow img")
  var images = []
  var numImages = $images.length;

  
  $images.each( function() {
    var img = new Image();
    img.onload = function() { 
      images.push([this.width, this.height])
      if(images.length == numImages) { resizeSlideShow(); }
    }
    img.src = $(this).attr("src");
  })

  function resizeSlideShow() {
    var availableHeight = $(window).height() - $("header").height() - 40;
    var availableWidth = $(".slideshow").width();
    var maxHeight = availableHeight;

    for(var i = 0; i < numImages; i++) {
      var width = images[i][0]
      var height = images[i][1]
      if(width > availableWidth) { height = (height * availableWidth)/width; }
      if(height < maxHeight) { maxHeight = height; }
    }

    $images.css('height', maxHeight)

    //////////////////////////////////////
    $(".nav_holder").height( $(".span8").height() )
    var screenWidth = $(window).width();

    if(screenWidth > 767) {
      $(".slide_nav.prev").position({
        my: 'center',
        at: 'center center-5%',
        of: $(".nav_holder.prev")
      })

      $(".slide_nav.next").position({
        my: 'center',
        at: 'center center-5%',
        of: $(".nav_holder.next")
      })
    } else {
      $(".slide_nav.prev").position({
        my: 'right bottom',
        at: 'center-5% bottom+15',
        of: $(".slideshow")
      })

      $(".slide_nav.next").position({
        my: 'left bottom',
        at: 'center+5% bottom+15',
        of: $(".slideshow")
      })
    }

  }


  /* * * * * * * * * * * * * * * * * * * * * * * * * * * * *	
   *						          EVENT LISTENERS
   * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

  $(window).bind('resize', resizeSlideShow)

  // SLIDESHOW LISTENERS
	$(".rslides").responsiveSlides({
		auto: true,
        pager: false,
        nav: true,
        speed: 500,
        prevText: "&larr;",
        nextText: "&rarr;",
        namespace: "slide"
	});

});