<?php
/**
 * Pass URL Parameters to Embeded iframe
 * 
 * @package           Pass_Parameters_iframe
 * @link              https://equalizedigital.com
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Pass URL Parameters to Embedded iFrame
 * Description:       Allows parameters to pass from the embedded page URL to iframe source URL
 * Version:           1.0.3
 * Author:            Equalize Digital
 * Author URI:        https://equalizedigital.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pass-url-parameters-to-embeded-iframe
 * Domain Path:       /languages
 */

use EDPPI\Inc\Plugin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Current plugin version.
if ( ! defined( 'EDPPI_VERSION' ) ) {
	define( 'EDPPI_VERSION', '1.0.3' );
}

// Plugin Folder Path.
if ( ! defined( 'EDPPI_PLUGIN_DIR' ) ) {
	define( 'EDPPI_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

// Plugin Folder URL.
if ( ! defined( 'EDPPI_PLUGIN_URL' ) ) {
	define( 'EDPPI_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

// Autoload.
if ( file_exists( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php' ) ) {
	include_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
}

// Plugin Root File.
if ( class_exists( 'EDAC\Inc\Plugin' ) ) {
	new Plugin();
}
