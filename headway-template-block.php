<?php
// THIS PHP CODE IS TO CONFIGURE THE PLUGIN INFO IN WORDPRESS DASHBOARD
/*
Plugin Name: Headway Template Block
Plugin URI: http://www.jonmather.info
Description: Template block for easy building of Headway Plugins.
Version: 1.0
Author: Jon Mather
Author URI: http://www.jonmather.info
License: GNU GPL v2
*/
	

define('TEMPLATE_BLOCK_VERSION', '1.0'); // change to suitable name and version number

add_action('after_setup_theme', 'register_template_block'); // change register_template_block to match your plugin
function register_template_block() { // must match the name change on the add_action line

	require_once 'block.php'; // loads the block.php file
	require_once 'block-options.php'; //loads the block-options.php file

	return headway_register_block('HeadwayTemplateBlock', substr(WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), '', plugin_basename(__FILE__)), 0, -1)); // change the name of the block so it matches what class was used in both block.php and block-options.php

}