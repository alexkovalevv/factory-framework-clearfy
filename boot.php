<?php
	/**
	 * Factory clearfy
	 *
	 * @author Webcraftic <wordpress.webraftic@gmail.com>
	 * @copyright (c) 2017 Webcraftic Ltd
	 *
	 * @package core
	 * @since 1.0.0
	 */

	// module provides function only for the admin area
	if( !is_admin() ) {
		return;
	}

	if( defined('FACTORY_CLEARFY_000_LOADED') ) {
		return;
	}
	define('FACTORY_CLEARFY_000_LOADED', true);

	define('FACTORY_CLEARFY_000_DIR', dirname(__FILE__));
	define('FACTORY_CLEARFY_000_URL', plugins_url(null, __FILE__));

	if( defined('FACTORY_PAGES_000_LOADED') ) {
		require(FACTORY_CLEARFY_000_DIR . '/pages/more-features.php');
	}