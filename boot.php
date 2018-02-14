<?php
	/**
	 * Factory clearfy
	 *
	 * @author Alex Kovalev <alex.kovalevv@gmail.com>
	 * @copyright (c) 2018, Webcraftic Ltd
	 *
	 * @package clearfy
	 * @since 1.0.0
	 */

	// Exit if accessed directly
	if( !defined('ABSPATH') ) {
		exit;
	}

	if( defined('FACTORY_CLEARFY_000_LOADED') ) {
		return;
	}
	define('FACTORY_CLEARFY_000_LOADED', true);

	define('FACTORY_CLEARFY_000_DIR', dirname(__FILE__));
	define('FACTORY_CLEARFY_000_URL', plugins_url(null, __FILE__));

	load_plugin_textdomain('wbcr_factory_clearfy_000', false, dirname(plugin_basename(__FILE__)) . '/langs');

	require(FACTORY_CLEARFY_000_DIR . '/includes/functions.php');
	require(FACTORY_CLEARFY_000_DIR . '/includes/class.configurate.php');

	// module provides function only for the admin area
	if( !is_admin() ) {
		return;
	}

	if( defined('FACTORY_PAGES_000_LOADED') ) {
		require(FACTORY_CLEARFY_000_DIR . '/pages/more-features.php');
	}