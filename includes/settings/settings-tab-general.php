<?php			
/**
 * This is the code that will create a new tab of settings for your page.
 * To create a new tab and set up this page:
 * Step 1. Duplicate this page and include it in the "class initialization function".
 * Step 1. Do a find-and-replace for the term 'mt_malachi_settings' and replace it with the slug you set when initializing this class
 * Step 2. Do a find and replace for 'general' and replace it with your desired tab slug
 * Step 3. Go to line 17 and set the title for this tab.
 * Step 4. Begin creating your custom options on line 30
 * Go here for full setup instructions: 
 * http://moveplugins.com/settings-class/
 */

/**
* Create new tab
*/
$mt_malachi_settings->mp_core_new_tab(__('Malachi Settings' , 'my_plugin'), 'general');

/**
* Create the options for this tab
*/
function mt_malachi_settings_general_create(){
	
	register_setting(
		'mt_malachi_settings_general',
		'mt_malachi_settings_general',
		'mp_core_settings_validate'
	);
	
	add_settings_section(
		'general_settings',
		__( 'General Settings', 'mt_malachi' ),
		'__return_false',
		'mt_malachi_settings_general'
	);
	
	add_settings_field(
		'logo_image',
		__( 'Logo', 'mt_malachi' ), 
		'mp_core_mediaupload',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'logo_image',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'logo_image' ),
			'description' => __( 'Upload your logo. Recomended Size: 305px by 63px', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	add_settings_field(
		'phone_number',
		__( 'Phone Number', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'phone_number',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'phone_number' ),
			'description' => __( 'Enter your phone number', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	add_settings_field(
		'phone_number',
		__( 'Phone Number', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'phone_number',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'phone_number' ),
			'description' => __( 'Enter your phone number', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	add_settings_field(
		'fax_number',
		__( 'Fax Number', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'fax_number',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'fax_number' ),
			'description' => __( 'Enter your fax number', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	add_settings_field(
		'email',
		__( 'Email Address', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'email',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'email' ),
			'description' => __( 'Enter your email address', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	add_settings_field(
		'worship_times',
		__( 'Worship Times', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'worship_times',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'worship_times' ),
			'description' => __( 'Enter your worship times.', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	add_settings_field(
		'address',
		__( 'Address', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'address',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'address' ),
			'description' => __( 'Enter your address.', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	add_settings_field(
		'map_link',
		__( 'Header Map Link', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'map_link',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'map_link' ),
			'description' => __( 'Enter a URL to an online map of your location.', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	add_settings_field(
		'privacypolicy',
		__( 'Privacy Policy Page URL', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'privacypolicy',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'privacypolicy' ),
			'description' => __( 'Enter the URL for your privacy policy page. If you do not want one, don\'t touch this.', 'mt_malachi' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	add_settings_field(
		'sitemap',
		__( 'Site Map URL', 'mt_malachi' ), 
		'mp_core_textbox',
		'mt_malachi_settings_general',
		'general_settings',
		array(
			'name'        => 'sitemap',
			'value'       => mp_core_get_option( 'mt_malachi_settings_general',  'sitemap' ),
			'description' => __( 'Enter the URL for your site map page. If you do not want one, don\'t touch this.' ),
			'registration'=> 'mt_malachi_settings_general',
		)
	);
	
	
	//additional general settings
	do_action('mt_malachi_settings_additional_general_settings_hook');
}
add_action( 'admin_init', 'mt_malachi_settings_general_create' );