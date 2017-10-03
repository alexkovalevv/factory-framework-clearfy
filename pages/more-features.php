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

		public $dashicon = 'dashicons-star-filled wbcr-factory-premium-color';

		public $type = 'page';

		public function __construct(Factory000_Plugin $plugin)
		{
			$this->menuTitle = __('More features (<b>free</b>)', 'factory-clearfy');

			parent::__construct($plugin);
		}

		/*public function getPageTitle()
		{
			return __('Get more features free', 'updates-services');
		}*/

		public function showPageContent()
		{
			echo 'dsfsf';
		}
	}
