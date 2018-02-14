<?php
	/**
	 * Configurate clearfy plugins
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

	if( !class_exists('Wbcr_FactoryClearfy000_Configurate') ) {

		abstract class Wbcr_FactoryClearfy000_Configurate {

			public function __construct(Wbcr_Factory000_Plugin $plugin)
			{
				$this->plugin = $plugin;
				$this->registerActionsAndFilters();
			}

			/**
			 * Registers filters and actions
			 * @return mixed
			 */
			abstract protected function registerActionsAndFilters();

			/**
			 * Get options with namespace
			 *
			 * @param $option_name
			 * @param bool $default
			 * @return mixed|void
			 */
			public function getOption($option_name, $default = false)
			{
				return $this->plugin->getOption($option_name, $default);
			}

			/**
			 * @param $option_name
			 * @param $value
			 * @return bool
			 */
			public function updateOption($option_name, $value)
			{
				return $this->plugin->updateOption($option_name, $value);
			}

			/**
			 * @param $option_name
			 * @return bool
			 */
			public function deleteOption($option_name)
			{
				return $this->plugin->deleteOption($option_name);
			}
		}
	}
