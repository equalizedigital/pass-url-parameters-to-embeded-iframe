/**
 * This script passes URL parameters to iframes with specified ids
 *
 * @author Equalize Digital
 * @link https://equalizedigital.com
 * @package Pass_Parameters_iframe
 * @version 1.1.0
 * @license GPL-2.0+
 */

jQuery(function($){
	$(window).on('load', function() {
		var iframe = $('#rwcGetParams');
		if (iframe.length) {
			var loc = window.location.toString(),
				params = loc.split('?')[1],
				query,
				newsrc;
			if (params){
				if( iframe.attr('src').indexOf('?') >= 0){
					query = '&';
				}else{
					query = '?';
				}
				newsrc = iframe.attr('src') + query + params;
				iframe.attr('src', newsrc);
			}
		}
	});
});