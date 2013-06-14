<?php
/**
 * Install Sermon Manager Plugin
 *
 */
 if (!function_exists('mp_sermons_plugin_check')){
	function mp_sermons_plugin_check() {
		$args = array(
			'plugin_name' => __('MP Sermons', 'mt_malachi'), 
			'plugin_message' => __('To create sermons, you require the Sermons plugin. Install it here.', 'mt_malachi'), 
			'plugin_slug' => 'mp-sermons', 
			'plugin_subdirectory' => 'mp-sermons/', 
			'plugin_filename' => 'mp-sermons.php',
			'plugin_required' => false,
			'plugin_download_link' => 'http://repo.moveplugins.com/repo/mp-sermons/?downloadfile=true'
		);
		$mp_sermons_plugin_check = new MP_CORE_Plugin_Checker($args);
	}
 }
add_action( '_admin_menu', 'mp_sermons_plugin_check' );

