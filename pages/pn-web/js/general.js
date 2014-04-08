/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *	SCRIPT: General.js
 *	AUTHOR: Khrall
 *	UPDATED: 24.02.2014
 *	DESCRIPTION: Holds script relevant to all pages	
 *	TOC:
 *		- Initialization
 *		- Header Shadow On Scrolling
 *		- Event Listeners
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
jQuery(document).ready(function($) {
  	
	





  	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *	
  	 *						INITIALIZATION
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
	var header = $("header");
	






	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *	
  	 *				  HEADER SHADOW ON SCROLLING
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  	 *
  	 *	Creates a shadow from the header when the user scrolls
  	 *	the main content. Not tested across many browsers.
  	 *
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
	function onScrollHeaderShadow() {

		//Check the topOffset
		var topOffset = $(window).scrollTop();
		if(topOffset > 0) {
			if(topOffset <= 60) {
				//Set gradient shadow based on offset from top
				header.css({ 
					boxShadow: '0px 6px 11px rgba(50, 50, 50, '+(topOffset/100)+')',
					borderBottom: '1px solid #AEAEAE'
				});
			} else {
				header.css({ 
					boxShadow: '0px 6px 11px rgba(50, 50, 50, 0.6)',
					borderBottom: '1px solid #AEAEAE'
				});
				
			}
		} else {
			header.css({
				boxShadow: 'none',
				borderBottom: 'none'
			});
		}
	}
	






	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * *	
  	 *						EVENT LISTENERS
  	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

  	// WINDOW LISTENERS
	$(window).bind('scroll', onScrollHeaderShadow ) // Scrolling
			 .bind('touchmove', onScrollHeaderShadow ); // Touchmove (scrolling)
	

	// SOCIAL ICON LISTENERS
	$("#social > li").hover(
		function() { $(this).stop().animate({backgroundColor: '#c7a853'}, 200); },
		function() { $(this).stop().animate({backgroundColor: '#616161'}, 200); }
	);

});