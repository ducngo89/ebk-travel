<?php
/**
 * Plugin Name:       EBK Travel
 * Plugin URI:        https://ebk.vn
 * Description:       Tours, vehicel, hotels, visa, services...
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            EBK TEAM
 * Author URI:        https://ebk.vn
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ebk.vn
 * Domain Path:       /languages
 */

define( 'EBKTRAVEL_PLUGIN', __FILE__ );

define( 'EBKTRAVEL_PLUGIN_BASENAME', plugin_basename( EBKTRAVEL_PLUGIN ) );

define( 'EBKTRAVEL_PLUGIN_NAME', trim( dirname( EBKTRAVEL_PLUGIN_BASENAME ), '/' ) );

define( 'EBKTRAVEL_PLUGIN_DIR', untrailingslashit( dirname( EBKTRAVEL_PLUGIN ) ) );

 //Exit if accessed directly
if(!defined('ABSPATH')){
    die;
}

//Load scripts
require_once(EBKTRAVEL_PLUGIN_DIR.'/includes/ebk-travel-scripts.php');

//Load shortcodes
require_once(EBKTRAVEL_PLUGIN_DIR.'/includes/ebk-travel-shortcodes.php');

function text_ajax_process_request() {
	// first check if data is being sent and that it is the data we want
  	if ( isset( $_POST["post_var"] ) ) {
		// now set our response var equal to that of the POST var (this will need to be sanitized based on what you're doing with with it)
		$response = $_POST["post_var"];
		// send the response back to the front end
		echo $response;
		die();
	}
}
add_action('wp_ajax_test_response', 'text_ajax_process_request');