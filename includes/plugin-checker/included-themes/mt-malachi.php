<?php
/**
 * Check for updates for this Theme
 *
 */
 if (!function_exists('mt_malachi_software_check')){
	function mt_malachi_software_check() {
		$args = array(
			'software_name' => 'Malachi Theme', //<- The name of this Software in EDD
			'software_slug' => 'malachi', //<- The slug (directory name) for this software. Make sure it matches the slug on the WP repo, edd, and mp_repo
			'software_api_url' => 'http://staging.mintthemes.com/',//The URL where EDD and mp_repo are installed and checked
			'software_licenced' => true, //<-Boolean
		);
		
		//Since this is a theme, call the Theme Updater class
		$mt_malachi_theme_updater = new MP_CORE_Theme_Updater($args);
	}
 }
add_action( 'init', 'mt_malachi_software_check' );
