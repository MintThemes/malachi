<?php
/**
 * Install mp_core Plugin
 *
 */
 if (!function_exists('mp_core_plugin_check')){
	function mp_core_plugin_check() {
		$args = array(
			'plugin_name' => 'Move Plugins Core', 
			'plugin_message' => 'You require the Move Plugins Core plugin. Install it here.', 
			'plugin_slug' => 'mp_core', 
			'plugin_subdirectory' => 'mp_core/', 
			'plugin_filename' => 'mp_core.php',
			'plugin_required' => true,
			'plugin_download_link' => 'http://moveplugins.com/repo/move-plugins-core/?download=true'
		);
		$mp_core_theme_updater = new MP_CORE_Plugin_Checker($args);
	}
 }
add_action( 'init', 'mp_core_plugin_check' );

