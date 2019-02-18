=== Pass URL Parameters to Embedded iFrame ===
Contributors: roadwarriorwp, alh0319, stevejonesdev
Donate link: https://roadwarriorcreative.com/donate/
Tags: Eventbrite, parameters, iframe
Requires at least: 3.0.1
Tested up to: 5.0.3
Stable tag: 4.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Pass URL parameters from the embedded page URL to iframe source URL.  

== Description ==

This plugin will parse the web address on page load looking for parameters, and add those parameters to the source URL for any iframe with a specific ID.  

Example use case: pass discount and affiliate codes via page URL to embedded Eventbrite tickets widgets.   

== Installation ==

1. Install via WordPress.org plugin directory (coming soon!)...or...
2. Download zip file, unzip, and upload rwc-pass-parameters-to-iframe directory to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Add id="rwcGetParams" to any iframes you want to retrive parameters from page URL

== Frequently Asked Questions ==

= How do I make an iframe source URL get the parameters from the page URL? =

In order for this plugin to pass the parameters to an iframe's source URL, you have to add a specific id, rwcGetParams, to the iframe.  For example

`<iframe src="https://wordpress.org"></iframe>`

should become

`<iframe id="rwcGetParams" src="https://wordpress.org"></iframe>`

Once you have added that id to the iframe, the plugin will automatically find any parameters in the URL and pass them on.

= Will this work with multiple iframes on the same page? =

No. Currently, this plugin will NOT support multiple iframes on the same page, unless you want them all to load the same content.

= Will this work with many different iframes throughout the website? =

Yes, this plugin will function with different iframes loading unique content, so long as they are on different pages of your website.

= What if the iframe source URL already has paramters? =

If your iframe source URL already has parameters we take that into account and don't add another question mark. Everything will work as expected.

== Changelog ==

= 1.0 =
* Everything is shiny and new!

= 1.0.1 =
* Added support for iFrame URLs that already contain parameters.
