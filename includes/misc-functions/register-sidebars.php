<?php
/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override malachi_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since Twenty Ten 1.0
 * @uses register_sidebar
 */
function malachi_widgets_init() {
	// Home page area, located on the main area of the homepage template
	register_sidebar( array(
		'name' => __( 'Home Page', 'mt_malachi' ),
		'id' => 'homepage-widget-area',
		'description' => __( 'Widgets for the homepage', 'mt_malachi' ),
		'before_widget' => '<div class="homepage-widget"><div class="homepage-widget-inner">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div>',
	) );
	
	// Footer area, located in the footer.php template
	register_sidebar( array(
		'name' => __( 'Footer', 'mt_malachi' ),
		'id' => 'footer-widget-area',
		'description' => __( 'Widgets for the footer', 'mt_malachi' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div>',
	) );
	
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'mt_malachi' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'mt_malachi' ),
		'before_widget' => '<div class="sidebar-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div>',
	) );

	
}
/** Register sidebars by running malachi_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'malachi_widgets_init' );	