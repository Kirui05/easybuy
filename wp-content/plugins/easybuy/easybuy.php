<?php
/**
 * @package easybuy
 */
/**
 * plugin name: easybuy
 * plugin URI: https://easybuy.com
 * description: easybuy plugin is the best go-to-tool for e-commerce sites
 * version: 1.0
 * author: Nicholas Kirui
 * author URI: https://nicholaskirui.com
 * licence: GPL V2 or later
 * licence URI: https://www.gnu.org/licences/gpl-2.0.txt
 */

//security
defined('ABSPATH') or die("Blocked"); // This line checks if the constant ABSPATH is defined. ABSPATH represents the absolute path to the root directory of the WordPress installation. If it's not defined, it means the code is not being executed within a WordPress environment, and the script is terminated with the "Blocked" message. This is a security measure to ensure that the code is only executed within the context of WordPress.

use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Init;


if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once(dirname(__FILE__) . '/vendor/autoload.php'); //This code checks if an autoloader file (autoload.php) exists in the vendor directory and includes it if found. Autoloaders are used to automatically load classes and dependencies, making it easier to manage and use third-party libraries in your plugin.
}

function activate_easybuy_plugin()
{
    Activate::activate();
}
register_activation_hook(__FILE__, 'activate_easybuy_plugin');

function deactivate_easybuy_plugin()
{
    Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_easybuy_plugin');
//These lines define a function (activate_EasyManage_plugin) that is called when the plugin is activated. The Activate::activate() method is executed during activation. Similarly, there is a deactivation hook that calls Deactivate::deactivate() when the plugin is deactivated. These hooks allow you to perform specific actions when your plugin is activated or deactivated.

if (class_exists('Inc\\Init')) {
    Init::register_services();
}
//This code checks if the class Inc\Init exists (presumably part of your plugin's code structure). If it does, it registers services using the Init::register_services() method. This typically initializes various components or services provided by your plugin, ensuring they are available for use.
?>

