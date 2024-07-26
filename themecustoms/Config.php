<?php

/**
 * @package Theme Customs
 * @author Diego Andrés <diegoandres_cortes@outlook.com>
 * @copyright Copyright (c) 2023, SMF Tricks
 * @license MIT
 */

namespace ThemeCustoms;

use ThemeCustoms\Theme\Init;

class Config extends Init
{
	/**
	 * @var string Theme Name
	 */
	protected string $name = 'MinDI';

	/**
	 * @var string Theme Version
	 */
	protected string $version = '2.0';

	/**
	 * @var string Theme Author
	 */
	protected string $author = 'Diego Andrés';

	/**
	 * @var int Theme Author SMF ID
	 */
	protected int $authorId = 254071;

	/**
	 * @var string Theme Default Color
	 */
	protected string $color = '#ffffff';

	/**
	 * @var string GitHub URL
	 */
	protected string $github = 'https://github.com/SMFTricks/MinDI';

	/**
	 * @var int SMF Customization Site ID
	 */
	protected int $customizationId = 2734;

	/**
	 * @var string Theme Support Topic ID
	 */
	protected int $customizationSupport = 514629;

	/**
	 * @var string Custom Support URL
	 */
	protected string $supportURL = 'https://smftricks.com/index.php?topic=426.0';

	/**
	 * @var bool Add the quick new topic button
	 */
	public bool $quickNewTopic = true;

	/**
	 * @var bool Wheter to include bootstrap
	 */
	public bool $bootstrap = true;

	/** 
	 * @var bool Enable Compat with SMF 3.0 styles
	 */
	public bool $stylesCompat = true;

	/**
	 * @var bool Wheter to enable Carousel Addon
	 */
	public bool $addonCarousel = true;

	/**
	 * @var bool Wheter to enable Profile Cover Addon
	 */
	public bool $addonProfileCover = true;

	/**
	 * Init::loadHooks()
	 */
	public function loadHooks() : void
	{
		// // Info Center
		// add_integration_function('integrate_customtheme_settings', 'ThemeCustoms\Custom\Settings::info_center#', false, '$themedir/themecustoms/Custom/Settings.php');

		// // Other Settings
		// add_integration_function('integrate_customtheme_settings', 'ThemeCustoms\Custom\Settings::settings', false, '$themedir/themecustoms/Custom/Settings.php');

		// // Load Custom CSS
		// add_integration_function('integrate_pre_css_output', __CLASS__ . '::css', false, '$themedir/themecustoms/Init.php');

		// // Load Custom JS
		// add_integration_function('integrate_pre_javascript_output', __CLASS__ . '::js', false, '$themedir/themecustoms/Init.php');

		// // Custom Styles?
		// add_integration_function('integrate_customtheme_style_settings', 'ThemeCustoms\Custom\Styles::set', false, '$themedir/themecustoms/Custom/Styles.php');

	}

	/**
	 * Load custom css
	 */
	public static function css() : void
	{
		global $settings;

		// Nunito Font
		loadCSSFile(!empty($settings['st_fonts_source']) ? 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;700&display=swap' : 'font.css', ['external' => !empty($settings['st_fonts_source']), 'order_pos' => -800]);
	}

	/**
	 * Load custom javascript
	 */
	public static function js() : void
	{
		// Custom js
		loadJavascriptFile('custom.js', [
			'force_current' => true,
			'defer' => true,
		], 'themecustom_js');
	}
}