/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *	SCRIPT: Home.js
 *	AUTHOR: Khrall
 *	UPDATED: 24.02.2014
 *	DESCRIPTION: Holds script relevant only to the home page	
 *	TOC:
 *		- Initialization
 *		- Banner Area Resize
 *		- Header Navigation
 *		- Hash Check
 *		- Event Listeners
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
jQuery(document).ready(function($) {
	






	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *	
  	 *						INITIALIZATION
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
  	var header = $("header");
	var slogan = $("#slogan");
	var slogan_mobile = $("#slogan_mobile");
	var featured_house = $("#featured-house");
	var featured_house_textbox = $("#featured-house > p");
	var featured_house_image = $("#featured-house img");
	var screenWidth = 0;

	resizeBannerArea();
	checkForHash();



	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *	
  	 *					   BANNER AREA RESIZE
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  	 *
  	 *	Resizes the banner area (featured house image) to fit
  	 *	different screen sizes.
  	 *
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
	function resizeBannerArea() {
		//Check if screen is below wide screen width format
		screenWidth = $(document).width();
		if(screenWidth < 1200) {
			
			//Hide standard slogan + textbox below featured house
			slogan.hide();
			featured_house_textbox.hide();

			//Center mobile slogan and display it
			slogan_mobile.position({ of: "#featured-house img"}).show();

			//Fix for iPhone 5
			if(screenWidth == 580) { slogan_mobile.offset({top: slogan_mobile.offset().top - 35}) }
		} else {

			//Hide mobile slogan
			slogan_mobile.hide();

			//Show standard slogan
			slogan.show();
			featured_house_textbox.show();
		}
		
		//Make sure div tightly contains image
		featured_house.height( featured_house_image.innerHeight() );
	}







	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *	
  	 *					    HEADER NAVIGATION
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  	 *
  	 *		Enables smooth navigation to the page sections
  	 *
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
	function navigate( destination ) {
		var offset = $("#"+destination).offset().top - header.height() * 1.4; //Magic number: The offset - 3% of document height
		var duration = 1200; //Preferences
		$("body, html").stop().animate({ scrollTop: offset }, duration, 'easeOutQuart');
	}







	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *	
  	 *					  CHECK FOR HASH
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  	 *
  	 *	Checks if any hash passed in the URL. If a hash was
  	 *	passed we should navigate to the appropriate section.
  	 *
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
	function checkForHash() {
		var hash = $(location).attr('hash');
		if(hash != null) {
			destination = hash.split("#")[1]; // Get destination by splitting hash

			// Use a timeout for smoother transition
			window.setTimeout(
				function() { navigate(destination); },
				20
			);
		}
	}







	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *	
  	 *						EVENT LISTENERS
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
  	
  	 // NAV LISTENERS
	$("header .wrapper > a, header nav a") // Header navigation buttons
		.removeAttr("href")	// Avoid standard id-navigation
		.click( function() { 
			navigate( $(this).attr("to") ); // On click navigate() to this section
		});

  	// WINDOW LISTENERS
  	$(window).bind('resize', resizeBannerArea ) // Resizing


  	// SLIDESHOW LISTENERS
  	/*
	$(".rslides").responsiveSlides({
		auto: false,
        pager: true,
        nav: true,
        speed: 500,
        prevText: "",
        nextText: "",
        namespace: "slide"
	});
	*/


});