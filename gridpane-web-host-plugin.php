<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://designanddevelop.io
 * @since             1.0.0
 * @package           Gridpane_Web_Host_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       GridPane Web Host Plugin
 * Plugin URI:        https://designanddevelop.io
 * Description:       Do not de-activate! This plugin is to improve performance and security on your website from your hosting service.
 * Version:           1.0.0
 * Author:            design & develop
 * Author URI:        https://designanddevelop.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gridpane-web-host-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GRIDPANE_WEB_HOST_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gridpane-web-host-plugin-activator.php
 */
function activate_gridpane_web_host_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gridpane-web-host-plugin-activator.php';
	Gridpane_Web_Host_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gridpane-web-host-plugin-deactivator.php
 */
function deactivate_gridpane_web_host_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gridpane-web-host-plugin-deactivator.php';
	Gridpane_Web_Host_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gridpane_web_host_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_gridpane_web_host_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gridpane-web-host-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gridpane_web_host_plugin() {

	$plugin = new Gridpane_Web_Host_Plugin();
	$plugin->run();

}
run_gridpane_web_host_plugin();
