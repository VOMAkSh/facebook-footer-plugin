<?php

 /*
    Plugin Name: Facebook Footer Link
    Description: Adds Facebook Profile Link in Footer
    Version: 0.0.1
    Author: VOMAkSh
 */

    if (!defined('ABSPATH')) {
        exit ;
    }

    require_once(plugin_dir_path(__FILE__) . "/includes/" . "fb-link-footer.php");
    require_once(plugin_dir_path(__FILE__) . '/includes/' . "fb-link-footer-content.php");
    require_once(plugin_dir_path(__FILE__) . '/includes/' . "fb-link-footer-settings.php");


?>