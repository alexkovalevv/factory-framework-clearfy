<?php

	/**
	 * The page Settings.
	 *
	 * @since 1.0.0
	 */
	class FactoryClearfy000_MoreFeaturesPage extends FactoryPages000_ImpressiveThemplate {

		/**
		 * The id of the page in the admin menu.
		 *
		 * Mainly used to navigate between pages.
		 * @see FactoryPages000_AdminPage
		 *
		 * @since 1.0.0
		 * @var string
		 */
		public $id = "more_features";

		public $page_menu_dashicon = 'dashicons-star-filled wbcr-factory-premium-color';

		public $page_menu_position = 5;

		public $type = 'page';

		public function __construct(Factory000_Plugin $plugin)
		{
			$this->menuTitle = __('More features (<b>free</b>)', 'factory_clearfy_000');

			parent::__construct($plugin);
		}

		public function getPageTitle()
		{
			return __('install the ultimate version of the plugin for free!', 'factory_clearfy_000');
		}

		public function showPageContent()
		{
			?>
			<div class="row">
				<div class="col-sm-4">
					<div class="wbcr-factory-feature-box">
						<i class="fa fa-check-circle" aria-hidden="true"></i>

						<h3><?php _e('Code cleaning', 'factory_clearfy_000')?></h3>

						<p><?php _e('Clears the source code of the page from unused code.', 'factory_clearfy_000')?></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="wbcr-factory-feature-box">
						<i class="fa fa-line-chart" aria-hidden="true"></i>

						<h3><?php _e('Improve SEO', 'factory_clearfy_000')?></h3>

						<p><?php _e('Removes duplicate pages, closes external links, changes the headers of the server.', 'factory_clearfy_000')?></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="wbcr-factory-feature-box">
						<i class="fa fa-shield" aria-hidden="true"></i>

						<h3><?php _e('Site ptotection', 'factory_clearfy_000')?></h3>

						<p><?php _e('Enables and disables features that improve the protection of your site.', 'factory_clearfy_000')?></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="wbcr-factory-feature-box">
						<i class="fa fa-comments" aria-hidden="true"></i>

						<h3><?php _e('Disable comments', 'factory_clearfy_000')?></h3>

						<p><?php _e('Disables comments on the entire site or on specific pages.', 'factory_clearfy_000')?></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="wbcr-factory-feature-box">
						<i class="fa fa-cloud-upload" aria-hidden="true"></i>

						<h3><?php _e('Manage updates', 'factory_clearfy_000')?></h3>

						<p><?php _e('Enables or disables automatically updates for plugins, themes and core. It is also possible
							to disable all updates.', 'factory_clearfy_000')?></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="wbcr-factory-feature-box">
						<i class="fa fa-puzzle-piece" aria-hidden="true"></i>

						<h3><?php _e('Manage widgets', 'factory_clearfy_000')?></h3>

						<p><?php _e('Allows you to remove unused widgets.', 'factory_clearfy_000')?></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="wbcr-factory-feature-box">
						<i class="fa fa-fighter-jet" aria-hidden="true"></i>

						<h3><?php _e('Speed Optimization', 'factory_clearfy_000')?></h3>

						<p><?php _e('Increases performance by disabling unused functions and reducing the number of requests.', 'factory_clearfy_000')?></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="wbcr-factory-feature-box">
						<i class="fa fa-eye-slash" aria-hidden="true"></i>

						<h3><?php _e('Site privacy', 'factory_clearfy_000')?></h3>

						<p><?php _e('Allows you to hide the version of the site and plugins. Allows you to hide your
							WordPress.', 'factory_clearfy_000')?></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="wbcr-factory-feature-box">
						<i class="fa fa-cogs" aria-hidden="true"></i>

						<h3><?php _e('Easy setup', 'factory_clearfy_000')?></h3>

						<p><?php _e('In quick mode, you can easily configure the plugin according to your needs.', 'factory_clearfy_000')?></p>
					</div>
				</div>
			</div>

			<div class="wbcr-factory-buttons-wrap">
				<a href="https://goo.gl/TcMcS4" class="wbcr-factory-premium-button" target="_blank">
					<?php _e('Get the ultimate plugin 100% FREE', 'factory_clearfy_000')?>
				</a>
			</div>
		<?php
		}
	}
