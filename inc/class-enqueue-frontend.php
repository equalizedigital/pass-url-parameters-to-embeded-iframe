<?php
/**
 * Class file for enqueueing frontend styles and scripts.
 *
 * @package Accessibility_Checker
 */

namespace EDPPI\Inc;

/**
 * Class that initializes and handles enqueueing styles and scripts for the frontend.
 */
class Enqueue_Frontend {

	/**
	 * Constructor
	 */
	public function __construct() {
	}

	/**
	 * Initialize the class
	 *
	 * @return void
	 */
	public function init() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	/**
	 * Enqueue styles and scripts
	 *
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'edppi-frontend-script', EDPPI_PLUGIN_URL . 'build/js/frontend.js', array( 'jquery' ), EDPPI_VERSION, false );
	}
}
