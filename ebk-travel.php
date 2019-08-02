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