<?php
/**
 * Factory clearfy
 *
 * @author        @author        Alex Kovalev <alex.kovalevv@gmail.com>, repo: https://github.com/alexkovalevv
 * @since         1.0.0
 * @package       clearfy
 * @copyright (c) 2018, Webcraftic Ltd
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( defined( 'FACTORY_CLEARFY_000_LOADED' ) ) {
	return;
}

define( 'FACTORY_CLEARFY_000_LOADED', true );

define( 'FACTORY_CLEARFY_000', '2.0.8' );

define( 'FACTORY_CLEARFY_000_DIR', dirname( __FILE__ ) );
define( 'FACTORY_CLEARFY_000_URL', plugins_url( null, __FILE__ ) );

load_plugin_textdomain( 'wbcr_factory_clearfy_000', false, dirname( plugin_basename( __FILE__ ) ) . '/langs' );

require( FACTORY_CLEARFY_000_DIR . '/includes/class-clearfy-helpers.php' );
require( FACTORY_CLEARFY_000_DIR . '/includes/class-clearfy-configurate.php' );

// module provides function only for the admin area
if ( is_admin() ) {
	/**
	 * Подключаем скрипты для установки компонентов Clearfy
	 * на все страницы админпанели.
	 */
	add_action( 'admin_enqueue_scripts', function () {
		wp_enqueue_script( 'wbcr-factory-clearfy-000-global', FACTORY_CLEARFY_000_URL . '/assets/js/globals.js', [ 'jquery' ], FACTORY_CLEARFY_000 );
	} );

	if ( defined( 'FACTORY_PAGES_000_LOADED' ) ) {
		require( FACTORY_CLEARFY_000_DIR . '/pages/class-pages.php' );
		require( FACTORY_CLEARFY_000_DIR . '/pages/class-pages-more-features.php' );
	}
}