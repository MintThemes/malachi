<?php
/**
 * Install Sermon Manager Plugin
 *
 */
 if (!function_exists('sermon_manager_plugin_check')){
	function sermon_manager_plugin_check() {
		$args = array(
			'plugin_name' => __('Sermon Manager', 'mt_malachi'), 
			'plugin_message' => __('To create sermons, you require the Sermons plugin. Install it here.', 'mt_malachi'), 
			'plugin_slug' => 'mp-sermons', 
			'plugin_subdirectory' => 'mp-sermons/', 
			'plugin_filename' => 'mp-sermons.php',
			'plugin_required' => false,
			'plugin_download_link' => 'http://moveplugins.com/repo/mp-sermons/?download=true'
		);
		$sermon_manager_plugin_check = new MP_CORE_Plugin_Checker($args);
	}
 }
add_action( 'init', 'sermon_manager_plugin_check' );

