<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://operationdental.com
 * @since      1.0.0
 *
 * @package    Od_Main_Custom_Script_Style
 * @subpackage Od_Main_Custom_Script_Style/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Od_Main_Custom_Script_Style
 * @subpackage Od_Main_Custom_Script_Style/includes
 * @author     Ariel Cruz <ariel@operationdental.com>
 */
class Od_Main_Custom_Script_Style_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'od-main-custom-script-style',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
