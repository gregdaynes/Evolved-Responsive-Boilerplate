(function( $ ){
	
	$.fn.deferError = function ( option ) {
		if (this !== null) {
			
			var dt = this.children('dt');
			var dd = this.children('dd');
			var lg = dt.length;
			
			for (i=0; i<lg; i++) {
				icon = null;
				if (dt[i].className === 'error') {
					icon = $(document.createElement('i').addClass('icon-ban-circle'));
				}
				else if (dt[i].className === 'notice') {
				 icon = $(document.createElement('i').addClass('icon-exclamation-sign'));
				}
				else {
					icon = $(document.createElement('i').addClass('icon-warning-sign'));
				}
				
				
				
				msg = $(document.createElement('div').addClass(dt[i].className));
				msg.append(icon);
				msg.append(dt[i]).append(dd[i]);
				
				
				
				this.append(msg);
			}
		}
	}

	$(function () {
		$('#system-message').deferError();
	})

})( window.jQuery );