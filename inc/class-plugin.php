<?php
/**
 * Class file for the plugin.
 *
 * @package Accessibility_Checker
 */

namespace EDPPI\Inc;

use EDPPI\Admin\Admin;

/**
 * Main plugin functionality class.
 */
class Plugin {

	/**
	 * Class constructor.
	 */
	public function __construct() {
		if ( \is_admin() ) {
			$admin = new Admin();
			$admin->init();
		} else {
			$this->init();
		}
	}

	/**
	 * Initialize.
	 *
	 * @return void
	 */
	private function init() {
		$enqueue_frontend = new Enqueue_Frontend();
		$enqueue_frontend->init();
	}
}
