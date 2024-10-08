<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://cozythemes.com/
 * @since      1.0.0
 *
 * @package    Cozy_Essential_Addons
 * @subpackage Cozy_Essential_Addons/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cozy_Essential_Addons
 * @subpackage Cozy_Essential_Addons/admin
 * @author     CozyThemes <support@cozythemes.com>
 */
class Cozy_Essential_Addons_Admin
{

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->cozy_essential_addons_admin();
	}

	private function cozy_essential_addons_admin()
	{
		/**
		 * Register custom post type
		 */
		require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cpt-init.php';

		/**
		 * Register meta box for custom post type
		 */
		require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/metabox/metaboxs.php';
	}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cozy_Essential_Addons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cozy_Essential_Addons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/cozy-essential-addons-admin.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cozy_Essential_Addons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cozy_Essential_Addons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/cozy-essential-addons-admin.js', array('jquery'), $this->version, false);
	}
}
