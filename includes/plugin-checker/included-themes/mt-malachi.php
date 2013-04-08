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
			'software_message' => 'You require the Malachi Theme. Install it here.', 
			'software_download_link' => 'http://moveplugins.com/repo/mp-core/?download=true'
		);
		$mt_malachi_theme_updater = new MP_CORE_Updater($args);
	}
 }
add_action( 'init', 'mt_malachi_software_check' );

