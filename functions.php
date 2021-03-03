<?php  



/*



Plugin Name: Voucher Tec - Shortcode



Plugin URI: https://github.com/TravelTec/shortcode



GitHub Plugin URI: https://github.com/TravelTec/shortcode



Description: Voucher Tec - Shortcode é um plugin destinado a geração de códigos rápidos para inserção dos plugins de roteiros e aéreo da Travel Tec.



Version: 1.0.0



Author: Travel Tec



Author URI: https://traveltec.com.br



License: GPLv2



*/







/*



 * Plugin Update Checker



 * 



 * Note: If you're using the Composer autoloader, you don't need to explicitly require the library.



 * @link https://github.com/YahnisElsts/plugin-update-checker



 */



require_once 'plugin-update-checker-4.10/plugin-update-checker.php';



require_once plugin_dir_path(__FILE__) . 'includes/code-functions.php';











/*



 * Plugin Update Checker Setting



 *



 * @see https://github.com/YahnisElsts/plugin-update-checker for more details.



 */



function shortcode_update_checker_setting() {



    if ( ! is_admin() || ! class_exists( 'Puc_v4_Factory' ) ) { 

        return; 

    } 



    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker( 

        'https://github.com/TravelTec/shortcode', 

        __FILE__, 

        'shortcode' 

    ); 



    // (Opcional) Set the branch that contains the stable release. 

    $myUpdateChecker->setBranch('vouchertec-shortcode');



}







add_action( 'admin_init', 'shortcode_update_checker_setting' );







 