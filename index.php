<?php
/* In the name of God */
/*
Plugin Name: نام پلاگین
Plugin URI: http://Adress_Plugin/
Description: توضیحات در مورد پلاگین
Author: نام نویسنده پلاگین
Version: 1.7.2
Author URI: http://Adress_zamany/
*/


/*
 *Costants
 */
define( 'NAME_PLUGIN_VERSION', '0.0.1' );
define( 'NAME_PLUGIN_WP_VERSION', '5.0' );
define( 'NAME_PLUGIN_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'NAME_PLUGIN_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'NAME_PLUGIN_CSS_URL', NAME_PLUGIN_PLUGIN_URL.'/assets/css');
define( 'NAME_PLUGIN_JS_URL', NAME_PLUGIN_PLUGIN_URL.'/assets/js');
define( 'NAME_PLUGIN_IMAGE_URL', NAME_PLUGIN_PLUGIN_URL.'/assets/image');
// define( 'NAME_PLUGIN_DELETE_LIMIT', 100000 );

/*
 * Includes
 */

include 'vendor/cmb2/cmb2/init.php';
include 'include/NAME_PLUGIN_MANAGER.php';
include 'include/NAME_PLUGIN_MANAGER_POST_TYPES.php';
include 'include/NAME_PLUGIN_MANAGER_POST_METAS.php';
include 'include/NAME_PLUGIN_MANAGER_POST_METAS_CMB2.php';



/*
 * Active/Deactive
 */
function NAME_PLUGIN_activate() {
    require_once NAME_PLUGIN_PLUGIN_PATH . '/include/class-plugin-name-activator.php';
    Plugin_Name_Activator::activate();
}
function NAME_PLUGIN_deactivate() {
    require_once NAME_PLUGIN_PLUGIN_PATH . '/include/class-plugin-name-deactivator.php';
    Plugin_Name_Deactivator::deactivate();
}
register_activation_hook( __FILE__ , 'NAME_PLUGIN_activate');
register_deactivation_hook( __FILE__ , 'NAME_PLUGIN_deactivate');

/*
 * Run
 */

NAME_PLUGIN_MANAGER::run();
?>