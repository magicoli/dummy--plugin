<?php
/**
 * Plugin Name:     Dummy Plugin
 * Plugin URI:      https://magiiic.com/wordpress/plugins/
 * Description:     Dummy plugin to test package updater
 * Author:          Magiiic
 * Author URI:      https://magiiic.com
 * Text Domain:     dummy-plugin
 * Domain Path:     /languages
 * Version:         0.1.4
 *
 * @package         Dummy_Plugin
 */

// Your code starts here.
$wppul_server = 'https://magiiic.com';
$wppul_licence_required = false; // optional
require_once 'vendor/autoload.php';

if(!defined('DUMMY_VERSION')) {
  define('DUMMY_VERSION', '0.1.4');
}
