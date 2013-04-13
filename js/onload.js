/**
 * Functions on load
 */
var navigation = null;
jQuery(window).load(function() {
	
	// the back to top link
	jQuery("a[href='#top']").click(function() {
	  jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});
	
	loadBasedOnMoreDisplay();
	empty_comment();
}); // end of DOM ready

jQuery(window).resize(function() {
	loadBasedOnMoreDisplay();
}); // end of window resize

function loadBasedOnMoreDisplay() {
	// is it mobile?
	var mobile = false;

	if(jQuery('#more').css('display') == 'block') {
		mobile = true;
	}

	if(mobile) {
		if(navigation == null) {
			navigation = jQuery("#nav-menu-wrapper ul").tinyNav({active: 'current_page_item'});
		}
	} else {
		primary_height();
	}
}

function primary_height() {
	var leftContainer = document.getElementById('secondary');
	var thirdContainer = document.getElementById('tertiary');
	var rightContainer = document.getElementById('primary');

	if((leftContainer || thirdContainer) && rightContainer) {
		var leftContainerHeight = leftContainer.offsetHeight;
		var thirdContainerHeight = 0;
		if(thirdContainer) {
			thirdContainerHeight = thirdContainer.offsetHeight;
		}
		var rightContainerHeight = rightContainer.offsetHeight;

		if(thirdContainerHeight > leftContainerHeight) {
			leftContainerHeight = thirdContainerHeight;
		}
		
		var height = 0;
		if(leftContainerHeight > rightContainerHeight) {
			height = leftContainerHeight;
		}

		if(jQuery.browser.msie && jQuery.browser.version == '6.0') {
			jQuery("#primary").height(height);
		} else {
			jQuery("#primary").attr("style", "min-height: "+height+"px");
		}
	}
}

function empty_comment() {
	var comments = jQuery('#comments');

	if(jQuery.trim(jQuery(comments).html()) == '') {
		jQuery(comments).css({'background' : 'none'});
	}
}