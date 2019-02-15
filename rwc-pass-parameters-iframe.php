<?php

/**
 * @link              https://roadwarriorcreative.com
 * @since             1.0.1
 * @package           RWC_Pass_Parameters_iframe
 *
 * @wordpress-plugin
 * Plugin Name:       Pass URL Parameters to Embedded iFrame
 * Description:       Allows parameters to pass from the embedded page URL to iframe source URL
 * Version:           1.0.1
 * Author:            Road Warrior Creative
 * Author URI:        https://roadwarriorcreative.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rwc-pass-parameters-iframe
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define current plugin version.
define( 'RWC_Pass_Parameters_iframe', '1.0.1' );

// Load necesary JS
function rwc_pass_parameters_enqueue_script() { 

	wp_enqueue_script( 'rwc_pass_parameters_script', plugin_dir_url( __FILE__ ) . 'js/rwc-pass-parameters.js', array('jquery'), '1.0' );
}
add_action('wp_enqueue_scripts', 'rwc_pass_parameters_enqueue_script');


//* That's all!
