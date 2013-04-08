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
			'software_page_url' => 'http://mintthemes.com/themes/malachi',
			'software_version_url' => 'http://moveplugins.com/repo/mt-malachi/?version=true',
			'software_download_url' => 'http://moveplugins.com/repo/mp-core/?download=true'
		);
		$mt_malachi_theme_updater = new MP_CORE_Updater($args);
	}
 }
add_action( 'init', 'mt_malachi_software_check' );

