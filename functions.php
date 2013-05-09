<?php
/**
 * Malachi functions and definitions
 *
 * @package WordPress
 * @subpackage Malachi
 * @since Malachi 3.0
 */

/*
|--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/
// Theme version
if( !defined( 'MT_MALACHI_VERSION' ) )
	define( 'MT_MALACHI_VERSION', '1.0.0.0' );

// Theme Folder Path
if( !defined( 'MT_MALACHI_THEME_DIR' ) )
	define( 'MT_MALACHI_THEME_DIR', get_template_directory() );
	
// Theme Root File
if( !defined( 'MT_MALACHI_THEME_FILE' ) )
	define( 'MT_MALACHI_THEME_FILE', __FILE__ );

/*
|--------------------------------------------------------------------------
| INTERNATIONALIZATION
|--------------------------------------------------------------------------
*/

function mt_malachi_textdomain() {

	// Set filter for plugin's languages directory
	$mt_malachi_lang_dir = dirname(  MT_MALACHI_THEME_FILE ) . '/languages/';
	$mt_malachi_lang_dir = apply_filters( 'mt_malachi_languages_directory', $mt_malachi_lang_dir );

	// Traditional WordPress plugin locale filter
	$locale        = apply_filters( 'plugin_locale',  get_locale(), 'malachi' );
	$mofile        = sprintf( '%1$s-%2$s.mo', 'malachi', $locale );
		
	// Setup paths to current locale file
	$mofile_local  = $mt_malachi_lang_dir . $mofile;
	$mofile_global = WP_LANG_DIR . '/malachi/' . $mofile;
		
	if ( file_exists( $mofile_global ) ) {
		// Look in global /wp-content/languages/malachi folder
		load_textdomain( 'mt_malachi', $mofile_global );
	} elseif ( file_exists( $mofile_local ) ) {
		
		// Look in local /wp-content/themes/malachi/languages/ folder
		load_textdomain( 'mt_malachi', $mofile_local );
	} else {
		// Load the default language files
		load_theme_textdomain( 'mt_malachi', $mt_malachi_lang_dir );
	}

}
add_action( 'init', 'mt_malachi_textdomain', 1 );

/*
|--------------------------------------------------------------------------
| INCLUDES
|--------------------------------------------------------------------------
*/

/**
 * If mp_core isn't active, stop and install it now
 */
if (!function_exists('mp_core_textdomain')){
	
	
	/**
	 * Include Plugin Checker
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/plugin-checker/class-plugin-checker.php' );
	/**
	 * Check if wp_core in installed
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/plugin-checker/included-plugins/mp-core-check.php' );
	
}
/**
 * Otherwise, if mp_core is active, carry out the plugin's functions
 */
else{
	
	/**
	 * Check Malachi Theme for updates
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/updater/mt-malachi-update.php' );
	
	/**
	 * Include all the theme specific scripts from the mp_core
	 */
	add_action( 'after_setup_theme', 'mp_core_theme_specific_scripts' );
	
	/**
	 * Check if mp_slide is installed
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/plugin-checker/included-plugins/mp-slide.php' );
	
	/**
	 * Check if mp_sermons is installed
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/plugin-checker/included-plugins/mp-sermons.php' );
	
	/**
	 * Check if mp_people is installed
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/plugin-checker/included-plugins/mp-people.php' );

	/**
	 * Initial Theme Setup
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/misc-functions/theme-setup.php' );
	
	/**
	 * Register Sidebars
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/misc-functions/register-sidebars.php' );
	
	/**
	 * Include customizer arguments
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/misc-functions/customizer.php' );
	
	/**
	 * Include hook functions for the mp_core
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/misc-functions/mp-core-hooks.php' );
	
	/**
	 * Include hook functions for styling the links widget
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/misc-functions/mp-links-hooks.php' );
	
	/**
	 * Include hook functions for styling the slide widget
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/misc-functions/mp-slide-hooks.php' );
	
	/**
	 * Include hook functions for styling the sermon widget
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/misc-functions/mp-sermons-hooks.php' );

	/**
	 * Enqueue Scripts
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/misc-functions/enqueue-scripts.php' );
	
	/**
	 * Include Responsive Options
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/settings/responsive-options.php' );
	
	/**
	 * Include Tri Slot Widget
	 */
	require( MT_MALACHI_THEME_DIR . '/includes/widgets/tri-slot.php' );
	
	
}
