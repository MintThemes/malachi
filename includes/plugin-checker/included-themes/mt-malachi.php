<?php
/**
 * Install mp_core Plugin
 *
 */
 if (!function_exists('mt_malachi_software_check')){
	function mt_malachi_software_check() {
		$args = array(
			'software_type' => 'theme', 
			'software_name' => 'Malachi Theme', 
			'software_slug' => 'malachi',
			'software_licence_option_tab' => 'mt_malachi_settings_updates',
			'software_page_url' => 'http://mintthemes.com/themes/malachi',
			'software_api_url' => 'http://staging.mintthemes.com/',
			'software_author' => 'Move Plugins'
		);
		$mt_malachi_theme_updater = new MP_CORE_Theme_Updater($args);
	}
 }
add_action( 'init', 'mt_malachi_software_check' );

