/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {

if($("#homepage-flag").length > 0) {	
 if (document.cookie.indexOf('visited=true') == -1) {
        var fifteenDays = 1000*60*60*24*15;
        var expires = new Date((new Date()).valueOf() + fifteenDays);
        document.cookie = "visited=true;expires=" + expires.toUTCString();
        $.colorbox({width:"60%", inline:true, href:"#mc_embed_signup"});
    }
}
// 		Search Toggle 
//__________________________________________

$( '.search-icon' ).click(function() {
  $( 'input.search-field' ).toggle( 100, function() {
    // Animation complete.
	//$('input.search-field').animate({"width":"0px"}, 100);
  });
});


// 		front page slider 
// ________________________________________

	$('.flexslider').flexslider({
       animation: "slide",
    });
	
	/*$('.productslider').flexslider({
       animation: "slide",
	   controlNav: "thumbnails"
    });*/
    
// 		Single Product Page
// ________________________________________
	$('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 50,
    itemMargin: 5,
    asNavFor: '.productslider'
  });
 
  $('.productslider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
  
    // 		Newsletter Signup
// ________________________________________
  
  $(".newsletter").colorbox({
	  	inline:true, width:"60%"
	  });
	  
	  $(".devotional-pop").colorbox({
	  	inline:true, width:"100%"
	  });
  





});// END #####################################    END

jQuery(window).on('load', function($) {
      // 		Equal Heights Divs
// ________________________________________
$('.blocks').matchHeight();
});