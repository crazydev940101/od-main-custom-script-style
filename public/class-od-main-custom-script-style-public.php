<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://operationdental.com
 * @since      1.0.0
 *
 * @package    Od_Main_Custom_Script_Style
 * @subpackage Od_Main_Custom_Script_Style/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Od_Main_Custom_Script_Style
 * @subpackage Od_Main_Custom_Script_Style/public
 * @author     Ariel Cruz <ariel@operationdental.com>
 */
class Od_Main_Custom_Script_Style_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Od_Main_Custom_Script_Style_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Od_Main_Custom_Script_Style_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/od-main-custom-script-style-public.css', array(), $this->version, 'all' );

		wp_enqueue_style( 'od-review-for-podcast', plugin_dir_url( __FILE__ ) . 'css/od-review-for-podcast.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Od_Main_Custom_Script_Style_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Od_Main_Custom_Script_Style_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/od-main-custom-script-style-public.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script( 'od-review-for-podcast', plugin_dir_url( __FILE__ ) . 'js/od-review-for-podcast.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script( 'od-seo-accessibility-improvement', plugin_dir_url( __FILE__ ) . 'js/od-seo-accessibility-improvement.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script( 'od-indeed-job-list', plugin_dir_url( __FILE__ ) . 'js/od-indeed-job-list.js', array( 'jquery' ), $this->version, false );

	}

}
