<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://designanddevelop.io
 * @since      1.0.0
 *
 * @package    Gridpane_Web_Host_Plugin
 * @subpackage Gridpane_Web_Host_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Gridpane_Web_Host_Plugin
 * @subpackage Gridpane_Web_Host_Plugin/includes
 * @author     design & develop <webmaster@designanddevelop.io>
 */
class Gridpane_Web_Host_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gridpane-web-host-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
