/**
 * This script passes URL parameters to iframes with specified ids
 *
 * @author Road Warrior Creative
 * @link https://roadwarriorcreative.com
 * @package RWC_Pass_Parameters_iframe
 * @version 1.0.1
 * @license GPL-2.0+
 */
 
 jQuery(function($){
	$(window).load(function() {
		var iframe = document.getElementById("rwcGetParams");
		if (document.contains(iframe)) {
			var loc = window.location.toString();
			var params = loc.split('?')[1];
			if( iframe.src.indexOf('?') >= 0){
				var query = '&';
			}else{
				var query = '?';
			}
			newsrc = iframe.src + query + params;
			$('#rwcGetParams').attr('src', newsrc);
		}
	});
});