<?php
/**
 * @link              https://equalizedigital.com
 * @since             1.0.0
 * @package           Pass_Parameters_iframe
 *
 * @wordpress-plugin
 * Plugin Name:       Pass URL Parameters to Embedded iFrame
 * Description:       Allows parameters to pass from the embedded page URL to iframe source URL
 * Version:           1.1.0
 * Author:            Road Warrior Creative
 * Author URI:        https://equalizedigital.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pass-url-parameters-to-embeded-iframe
 */

/**
 * Exit if accessed directly.
 *
 * @since 1.0.0
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 *
 * @since 1.0.0
 */
define( 'EDPPI_VERSION', '1.1.0' );

/**
 * Enqueue the JavaScript file for passing URL parameters to iframes.
 *
 * This function enqueues the rwc-pass-parameters.js script which handles
 * parsing URL parameters and passing them to iframes with the rwcGetParams ID.
 *
 * @since 1.0.0
 * @return void
 */
function edppi_enqueue_script() { 
	wp_enqueue_script( 'edppi_script', plugin_dir_url( __FILE__ ) . 'js/rwc-pass-parameters.js', array('jquery'), EDPPI_VERSION, true );
}
add_action('wp_enqueue_scripts', 'edppi_enqueue_script');
