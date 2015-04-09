<?php
/*
Plugin Name: Your Block Name
Plugin URI: http://yourdomain.com
Description: What is your block going to do
Version: 1.0
Author: Your name
Author URI: http://www.yourdomain.com
License: GNU GPL v2
*/

define('YOUR_BLOCK_VERSION', '1.0'); //defines your block version for updates, only required if it gets used in Headway Extend


add_action('after_setup_theme', 'register_your_block'); //Change the register_your_block to a name more relative to your block
function register_your_block() {
    if ( !class_exists('Headway') )
		return;
	require_once 'block.php';
	require_once 'block-options.php';
	
	
	if (!class_exists('HeadwayBlockAPI') )
	{
		return false;
	}
	return headway_register_block('HeadwayYourBlock', substr(WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), '', plugin_basename(__FILE__)), 0, -1));

}
