<?php			
/**
 * This is the code that will create a new tab of settings for your page.
 * To create a new tab and set up this page:
 * Step 1. Duplicate this page and include it in the "class initialization function".
 * Step 1. Do a find-and-replace for the term 'mt_malachi_settings' and replace it with the slug you set when initializing this class
 * Step 2. Do a find and replace for 'updates' and replace it with your desired tab slug
 * Step 3. Go to line 17 and set the title for this tab.
 * Step 4. Begin creating your custom options on line 30
 * Go here for full setup instructions: 
 * http://moveplugins.com/settings-class/
 */

/**
* Create new tab
*/
$mt_malachi_settings->mp_core_new_tab(__('Theme Updates' , 'my_plugin'), 'updates');

/**
* Create the options for this tab
*/
function mt_malachi_settings_updates_create(){
	
	register_setting(
		'mt_malachi_settings_updates',
		'mt_malachi_settings_updates',
		'mp_core_settings_validate'
	);
	
	add_settings_section(
		'updates_settings',
		__( 'General Settings', 'mt_malachi' ),
		'__return_false',
		'mt_malachi_settings_updates'
	);
	
	add_settings_field(
		'edd_licence_key',
		__( 'Licence Key', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_updates',
		'updates_settings',
		array(
			'name'        => 'edd_licence_key',
			'value'       => mp_core_get_option( 'mt_malachi_settings_updates',  'edd_licence_key' ),
			'description' => __( 'Enter your License Key to enable automatic updates for this theme', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_updates',
		)
	);
	
	
	//additional updates settings
	do_action('mt_malachi_settings_additional_updates_settings_hook');
}
add_action( 'admin_init', 'mt_malachi_settings_updates_create' );