<?php

	/**
	 * Core plugin
	 * @author Webcraftic <wordpress.webraftic@gmail.com>
	 * @copyright (c) 2017 Webraftic Ltd
	 * @version 1.0
	 */
	abstract class WbcrFactoryClearfy_Configurate {

		public function __construct(Factory000_Plugin $plugin)
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
		 * @param $option_name
		 * @param bool $default
		 * @return mixed|void
		 */
		public function getOption($option_name, $default = false)
		{
			return get_option($this->plugin->pluginName . '_' . $option_name, $default);
		}
	}
