// global variables 
	var compareWidth, //previous width used for comparison
		detector, //the element used to compare changes
		smallScreen; // Size of maximum width of single column media query
	jQuery(document).ready(function(){
	
	    //set the initial values
	    detector = jQuery('.js');
	    compareWidth = detector.width();
		smallScreen = '820'; 
	
		if ($(window).width() < smallScreen) {
			$("body").addClass("one-column");		
		}
		else {
			$("body").addClass("two-column");	
		}
	
		// Toggle for nav menu
		$('.js .menu-button').click(function() {
			$('[role="navigation"]').slideToggle('fast', function() {});			
		});	
		// Toggle click for sub-menus on touch and or small screens
		$('.touch .item-with-ul, .one-column .item-with-ul').click(function() {
			$(this).find('.sub-menu').slideToggle('fast', function() {});
		});
		// Credit: http://webdeveloper2.com/2011/06/trigger-javascript-on-css3-media-query-change/
	    jQuery(window).resize(function(){
	        //compare everytime the window resize event fires
	        if(detector.width()!=compareWidth){
	
	            //a change has occurred so update the comparison variable
	            compareWidth = detector.width();
				
				if (compareWidth < smallScreen) {
					$("body").removeClass("two-column").addClass("one-column");				
				}
				else {
					$("body").removeClass("one-column").addClass("two-column");	
				}
				if (compareWidth >= smallScreen) {
					$('[role="navigation"]').show();
				}
	        }
	
	    });	
		
	 });
	 
// Tools
$(function() {	
	$("#homebkg-nav").tabs("#homebkg > .slide", {			
		effect: 'fade',
		fadeOutSpeed: 'slow',			
		rotate: true
	}).slideshow({autoplay: true, interval:5000, clickable: false});
	$("#flowtabs").tabs("#menu-slider > .slide", {		
		fadeOutSpeed: 'slow',
		rotate: true
	});
	$("a[rel]").overlay({top: '-3px'});
	$("ul.tab-nav").tabs("div.panes > .tab", {effect:'fade'});
	$("#myform").validator({position: 'top left', offset: [-12, 0], message: '<div><em/></div>'});
});

// Mailing List
$(document).ready(function() {
	$('#signup').submit(function() {
		// update user interface
		$('#response').html('Adding email address...');
		
		// Prepare query string and send AJAX request
		$.ajax({
			url: 'inc/store-address.php',
			data: 'ajax=true&email=' + escape($('#email').val()),
			success: function(msg) {
				$('#response').html(msg);
			}
		});
	
		return false;
	});
});


$(function() {    
    $(".scroll").click(function() {
        $.scrollTo($($(this).attr("href")), {
            duration: 750,
        });
        return false;
    });
});

$(function() {    
	$('#flowtabs').stickyfloat({ duration: 200 });	
});

(jQuery);
 
 $.fn.stickyfloat = function(options, lockBottom) {
 var $obj                 = this;
 var parentPaddingTop     = parseInt($obj.parent().css('padding-top'));
 var startOffset         = $obj.parent().offset().top;
 var opts                 = $.extend({ startOffset: startOffset, offsetY: parentPaddingTop, duration: 200, lockBottom:true }, options);
 
 $obj.css({ position: 'absolute' });
 
 if(opts.lockBottom){
 var bottomPos = $obj.parent().height() - $obj.height() + parentPaddingTop; //get the maximum scrollTop value
 if( bottomPos < 0 )
 bottomPos = 200;
 }
 
 $(window).scroll(function () {
 $obj.stop(); // stop all calculations on scroll event
 
 var pastStartOffset            = $(document).scrollTop() > opts.startOffset;    // check if the window was scrolled down more than the start offset declared.
 var objFartherThanTopPos    = $obj.offset().top > startOffset;    // check if the object is at it's top position (starting point)
 var objBiggerThanWindow     = $obj.outerHeight() < $(window).height();    // if the window size is smaller than the Obj size, then do not animate.
 
 // if window scrolled down more than startOffset OR obj position is greater than
 // the top position possible (+ offsetY) AND window size must be bigger than Obj size
 if( (pastStartOffset || objFartherThanTopPos) && objBiggerThanWindow ){
 var newpos = ($(document).scrollTop() -startOffset + opts.offsetY );
 if ( newpos > bottomPos )
 newpos = bottomPos;
 if ( $(document).scrollTop() < opts.startOffset ) // if window scrolled < starting offset, then reset Obj position (opts.offsetY);
 newpos = parentPaddingTop;
 
 $obj.animate({ top: newpos }, opts.duration );
 }
 });
 };
 
 $('#sidemenu').stickyfloat({ duration: 200 });