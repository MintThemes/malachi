<?php			
/**
 * This is the code that will create a new tab of settings for your page.
 * To create a new tab and set up this page:
 * Step 1. Duplicate this page and include it in the "class initialization function".
 * Step 1. Do a find-and-replace for the term 'mt_malachi_responsive_settings' and replace it with the slug you set when initializing this class
 * Step 2. Do a find and replace for 'general' and replace it with your desired tab slug
 * Step 3. Go to line 17 and set the title for this tab.
 * Step 4. Begin creating your custom options on line 30
 * Go here for full setup instructions: 
 * http://moveplugins.com/settings-class/
 */

/**
* Create new tab
*/
$mt_malachi_responsive_settings->mp_core_new_tab(__('Malachi Responsive Settings' , 'my_plugin'), 'general');

/**
* Create the options for this tab
*/
function mt_malachi_responsive_settings_general_create(){
	
	register_setting(
		'mt_malachi_responsive_settings_general',
		'mt_malachi_responsive_settings_general',
		'mp_core_settings_validate'
	);
	
	add_settings_section(
		'general_settings',
		__( 'Responsive Settings', 'mt_malachi' ),
		'__return_false',
		'mt_malachi_responsive_settings_general'
	);
	
	add_settings_field(
		'responsive_check',
		__( 'Turn Reponsive Off?', 'mt_malachi' ), 
		'mp_core_checkbox',
		'mt_malachi_responsive_settings_general',
		'general_settings',
		array(
			'name'        => 'responsive_check',
			'value'       => mp_core_get_option( 'mt_malachi_responsive_settings_general',  'responsive_check' ),
			'description' => __( 'Check this if you do NOT want to use the responsive layout for the Malachi Theme.', 'mt_malachi' ),
			'registration'=> 'mt_malachi_responsive_settings_general',
		)
	);
	
	//additional general settings
	do_action('mt_malachi_responsive_settings_additional_general_settings_hook');
}
add_action( 'admin_init', 'mt_malachi_responsive_settings_general_create' );