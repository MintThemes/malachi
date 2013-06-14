<?php
/**
 * Install Move Plugins - People Plugin
 *
 */
 if (!function_exists('mp_people_plugin_check')){
	function mp_people_plugin_check() {
		$args = array(
			'plugin_name' => __('MP People', 'mt_malachi'), 
			'plugin_message' => __('To create a staff section you will need the People plugin.', 'mt_malachi'), 
			'plugin_slug' => 'mp-people', 
			'plugin_filename' => 'mp-people.php',
			'plugin_required' => false,
			'plugin_download_link' => 'http://repo.moveplugins.com/repo/mp-people/?downloadfile=true'
		);
		$mp_people_plugin_check = new MP_CORE_Plugin_Checker($args);
	}
 }
add_action( '_admin_menu', 'mp_people_plugin_check' );

