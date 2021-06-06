<?php
/**
 * Plugin Name:     Hari Acf Flexible Fields Addon
 * Plugin URI:      https://github.com/vanpariyar/hari-acf-flexible-fields-addon
 * Description:     Plugin contains template support for the ACF flexible fields layout
 * Author:          Ronak Vanpariya
 * Author URI:      https://vanpariyar.in
 * Text Domain:     hari-acf-flexible-fields-addon
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Hari_Acf_Flexible_Fields_Addon
 */

// Your code starts here.



if ( !function_exists( 'add_action' ) ) {
	echo __('Hi there!  I\'m just a plugin, not much I can do when called directly.', 'useful-custom-rule-for-automatewoo');
	exit;
}

/* Plugin Constants */
if (!defined('Hari_Acf_Flexible_Fields_Addon_URL')) {
    define('Hari_Acf_Flexible_Fields_Addon_URL', plugin_dir_url(__FILE__));
}

if (!defined('Hari_Acf_Flexible_Fields_Addon_PLUGIN_PATH')) {
    define('Hari_Acf_Flexible_Fields_Addon_PLUGIN_PATH', plugin_dir_path(__FILE__));
}

require_once Hari_Acf_Flexible_Fields_Addon_PLUGIN_PATH.'/includes/PageTemplater.php';

class Hari_Acf_Flexible_Fields_Addon {
    
	/**
	 * A reference to an instance of this class.
	 */
	private static $instance;

    public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new Hari_Acf_Flexible_Fields_Addon();
		}

		return self::$instance;

	}

    public function __construct(){

        add_action('plugins_loaded', array( $this,'check_some_other_plugin'), 10 );
        // PageTemplater::get_instance();
        add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );
    }

    public function check_some_other_plugin() {
		if ( ! class_exists( 'acf_pro' ) ) {
			add_action( 'admin_notices', function() {				
				echo '<div class="error"><p><strong>' . esc_html__( 'Hari Acf Flexible Fields Addon plugin require Advanced Cutom Field Pro Plugin installed / activated', 'useful-custom-rule-for-automatewoo' ) . '</strong><code>Link:- http://advancedcustomfields.com/pro/</code></p></div>';
			} );
			return;
		}
    }
    


}

Hari_Acf_Flexible_Fields_Addon::get_instance();