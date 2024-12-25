<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://buddydevelopers.com
 * @since             1.0.0
 * @package           Geobuddy
 *
 * @wordpress-plugin
 * Plugin Name:       GeoBuddy
 * Plugin URI:        https://https://buddydevelopers.com
 * Description:       GeoBuddy is the ultimate companion for the GeoDirectory plugin, designed to extend its core functionality and unlock new possibilities for directory-based WordPress websites. 
 * Version:           1.0.0
 * Author:            BuddyDevelopers
 * Author URI:        https://https://buddydevelopers.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       geobuddy
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
define( 'GEOBUDDY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-geobuddy-activator.php
 */
function activate_geobuddy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-geobuddy-activator.php';
	Geobuddy_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-geobuddy-deactivator.php
 */
function deactivate_geobuddy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-geobuddy-deactivator.php';
	Geobuddy_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_geobuddy' );
register_deactivation_hook( __FILE__, 'deactivate_geobuddy' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-geobuddy.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_geobuddy() {

	$plugin = new Geobuddy();
	$plugin->run();

}
run_geobuddy();
