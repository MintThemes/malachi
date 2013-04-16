<?php
/**
 * Install mp_core Plugin
 *
 */
 if (!function_exists('mt_malachi_software_check')){
	function mt_malachi_software_check() {
		$args = array(
			'software_name' => 'Malachi', //<- The name of this Software
			'software_slug' => 'malachi', //<- The slug (dir name) for this software. Make sure it matches the slug on the WP repo, edd, and mp_repo
			'software_license_setting' => 'mt_malachi_settings_updates',//<- the slug of the setting group containing the license. The sub item must be called 'license_key'
			'software_page_url' => 'http://mintthemes.com/themes/malachi',//<- The link a user will see when they click "View Details"
			'software_api_url' => 'http://staging.mintthemes.com/',//The URL where EDD and mp_repo are installed and checked
			'software_envato_api_url' => 'http://marketplace.envato.com/api/edge/mintthemes/w1vss9x62z5vkf08bzn5rkhwtxg7kji2/verify-purchase:',//<-Your Envato API URL
			'software_author' => 'Move Plugins'//<- Author of this software
		);
		
		//Since this is a theme, call the Theme Updater class
		$mt_malachi_theme_updater = new MP_CORE_Theme_Updater($args);
	}
 }
add_action( 'admin_init', 'mt_malachi_software_check' );
