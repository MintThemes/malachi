<?php
/**
 * This file contains a function which checks if the MP Sermons plugin is installed.
 *
 * @since 1.0.0
 *
 * @package    Malachi Theme
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2013, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */
 
/**
* Check to make sure the MP Sermons Plugin is installed.
*
* @since    1.0.0
* @link     http://mintplugins.com/doc/plugin-checker-class/
* @return   array $plugins An array of plugins to be installed. This is passed in through the mp_core_check_plugins filter.
* @return   array $plugins An array of plugins to be installed. This is passed to the mp_core_check_plugins filter. (see link).
*/
if (!function_exists('mp_sermons_plugin_check')){
	function mp_sermons_plugin_check( $plugins ) {
		
		$add_plugins = array(
			array(
				'plugin_name' => 'MP Sermons',
				'plugin_message' => __('You require the MP Sermons plugin. Install it here.', 'mp_knapstack'),
				'plugin_filename' => 'mp-sermons.php',
				'plugin_download_link' => 'http://mintplugins.com/repo/mp-sermons/?downloadfile=true',
				'plugin_info_link' => 'http://mintplugins.com/plugins/mp-sermons',
				'plugin_group_install' => true,
				'plugin_required' => true,
				'plugin_wp_repo' => true,
			)
		);
		
		return array_merge( $plugins, $add_plugins );
	}
}
add_filter( 'mp_core_check_plugins', 'mp_sermons_plugin_check' );