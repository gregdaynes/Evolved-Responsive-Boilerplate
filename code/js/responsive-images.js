/**
 Responsive Images
  
 joomla plugin controls content changes img src attribute to data-src. Replaces src with a placeholder link
 javascript intercept read data-src attrib re-write src attrib 
 rewrite src url to specify size filename.small.ext
 htaccess / nginx rewrite rules if file does not exist
 to point to component with file and size
 */

(function( $ ){
	
	$.fn.responsiveImage = function ( option ) {
		if (this !== null) {
			
			this.each(function(i,el) {
				el.setAttribute('src', el.dataset.src);			
			});
		}
	}

	$(function () {
		$('img.responsive').responsiveImage();
	})

})( window.jQuery );