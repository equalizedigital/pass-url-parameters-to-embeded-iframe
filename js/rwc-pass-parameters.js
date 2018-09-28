/**
 * This script passes URL parameters to iframes with specified ids
 *
 * @author Road Warrior Creative
 * @link https://roadwarriorcreative.com
 * @package RWC_Pass_Parameters_iframe
 * @version 1.0
 * @license GPL-2.0+
 */
 
 jQuery(function($){
    $(window).load(function() {

		$(function() {
		    var loc = window.location.toString(),
		    params = loc.split('?')[1],
		    iframe = document.getElementById("rwcGetParam");
		    newsrc = iframe.src + '&' + params;

		    $('#rwcGetParam').attr('src', newsrc);
		    
		});



    });
});