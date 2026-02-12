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
	$(window).load(function() {
		var iframe = document.getElementById("rwcGetParams");
		if (document.contains(iframe)) {
			var loc = window.location.toString(),
					params = loc.split('?')[1],
					query;
			if (params){
				if( iframe.src.indexOf('?') >= 0){
					query = '&';
				}else{
					query = '?';
				}
				newsrc = iframe.src + query + params;
				$('#rwcGetParams').attr('src', newsrc);
			}
		}
	});
});