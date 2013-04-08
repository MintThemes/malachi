<?php 
/**
 * Customize
 *
 * Theme options are lame! Manage any customizations through the Theme
 * Customizer. Expose the customizer in the Appearance panel for easy access.
 * This uses the customizer class in the mp-core plugin
 *
 * @package mt_malachi
 * @since mt_malachi 3.0
 */
 
function mt_malachi_customizer(){
	
	$theme = wp_get_theme(); // $theme->Name
	
	$args = array(
		array( 'section_id' => 'mt_malachi_top_bar', 'section_title' => __( 'Top Bar', 'mp_core' ),'section_priority' => 1,
			'settings' => array(
				'mt_malachi_top_bar' => array(
					'label'      => __( 'Show Top Bar?', 'mp_core' ),
					'type'       => 'checkbox',
					'default'    => '',
					'priority'   => 1,
					'element'    => '#top',
					'jquery_function_name' => 'css',
					'arg' => 'display'
				),
				'mt_malachi_top_bar_bg_image' => array(
					'label'      => __( 'Background Image', 'mp_core' ),
					'type'       => 'image',
					'default'    => 'css/images/bg-container.gif',
					'priority'   => 100,
					'element'    => '#top',
					'jquery_function_name' => 'css',
					'arg' => 'background-image'
				),
				'mt_malachi_topbar_bg_image_disabled' => array(
					'label'      => __( 'Disable Background Image', 'mp_core' ),
					'type'       => 'checkbox',
					'default'    => '',
					'priority'   => 100,
					'element'    => '#top',
					'jquery_function_name' => 'css',
					'arg' => 'background-disabled'
				),
				'mt_malachi_top_bar_bg_color' => array(
					'label'      => __( 'Background Color', 'mp_core' ),
					'type'       => 'color',
					'default'    => '000000',
					'priority'   => 101,
					'element'    => '#top',
					'jquery_function_name' => 'css',
					'arg' => 'background-color'
				),
				'mt_malachi_top_bar_map_url' => array(
					'label'      => __( 'Map URL', 'mp_core' ),
					'type'       => 'text',
					'default'    => '',
					'priority'   => 2,
					'element'    => '#top .map a',
					'jquery_function_name' => 'attr',
					'arg' => 'href'
				),
				'mt_malachi_top_bar_display_map_url' => array(
					'label'      => __( 'Display Map?', 'mp_core' ),
					'type'       => 'checkbox',
					'default'    => '',
					'priority'   => 3,
					'element'    => '#top .map',
					'jquery_function_name' => 'css',
					'arg' => 'display'
				),
				'mt_malachi_top_bar_map_text_color' => array(
					'label'      => __( 'Map Text Color', 'mp_core' ),
					'type'       => 'color',
					'default'    => '#000000',
					'priority'   => 4,
					'element'    => '.top .map a',
					'jquery_function_name' => 'css',
					'arg' => 'color'
				),
				'mt_malachi_top_bar_times' => array(
					'label'      => __( 'Meeting Times', 'mp_core' ),
					'type'       => 'text',
					'default'    => '',
					'priority'   => 5,
					'element'    => 'body #top .time',
					'jquery_function_name' => 'html',
					'arg' => NULL,
				),
				'mt_malachi_top_bar_display_times' => array(
					'label'      => __( 'Display Times?', 'mp_core' ),
					'type'       => 'checkbox',
					'default'    => '',
					'priority'   => 6,
					'element'    => '#top .time',
					'jquery_function_name' => 'css',
					'arg' => 'display'
				),
				'mt_malachi_top_bar_map_times_color' => array(
					'label'      => __( 'Times Text Color', 'mp_core' ),
					'type'       => 'color',
					'default'    => '',
					'priority'   => 10,
					'element'    => '.top .time',
					'jquery_function_name' => 'css',
					'arg' => 'color'
				),
				'mt_malachi_top_bar_display_search' => array(
					'label'      => __( 'Display Search?', 'mp_core' ),
					'type'       => 'checkbox',
					'default'    => '',
					'priority'   => 6,
					'element'    => '#top .form-search',
					'jquery_function_name' => 'css',
					'arg' => 'display'
				),
			)
		),
		array( 'section_id' => 'mt_malachi_header_navigation', 'section_title' => __( 'Header Navigation', 'mp_core' ),'section_priority' => 2,
			'settings' => array(
				'mt_malachi_header_nav_text_color' => array(
					'label'      => __( 'Navigation Text Color', 'mp_core' ),
					'type'       => 'color',
					'default'    => '#ffffff',
					'priority'   => 1,
					'element'    => '#header #nav a',
					'jquery_function_name' => 'css',
					'arg' => 'color'
				),
			)
		),
		array( 'section_id' => 'mt_malachi_links', 'section_title' => __( 'Text Colors', 'mp_core' ),'section_priority' => 3,
			'settings' => array(
				'mt_malachi_text_color' => array(
					'label'      => __( 'Text Color', 'mp_core' ),
					'type'       => 'color',
					'default'    => '',
					'priority'   => 10,
					'element'    => 'body',
					'jquery_function_name' => 'css',
					'arg' => 'color'
				),
				'mt_malachi_link_color' => array(
					'label'      => __( 'Link Color', 'mp_core' ),
					'type'       => 'color',
					'default'    => '',
					'priority'   => 10,
					'element'    => '#main a',
					'jquery_function_name' => 'css',
					'arg' => 'color'
				),
				'mt_malachi_link_hover_color' => array(
					'label'      => __( 'Link Hover Color', 'mp_core' ),
					'type'       => 'color',
					'default'    => '',
					'priority'   => 10,
					'element'    => '#main a:hover',
					'jquery_function_name' => 'css',
					'arg' => 'color'
				),
			)
		),
		array( 'section_id' => 'mt_malachi_background', 'section_title' => sprintf( __( '%s Options', 'mp_core' ), 'Background' ),'section_priority' => 2,
			'settings' => array(
				'mt_malachi_background_color' => array(
					'label'      => __( 'Background Color', 'mp_core' ),
					'type'       => 'color',
					'default'    => '#ffffff',
					'priority'   => 10,
					'element'    => '.container',
					'jquery_function_name' => 'css',
					'arg' => 'background-color'
				),
				'mt_malachi_background_image' => array(
					'label'      => __( 'Background Image', 'mp_core' ),
					'type'       => 'image',
					'default'    => '',
					'priority'   => 10,
					'element'    => '.container',
					'jquery_function_name' => 'css',
					'arg' => 'background-image'
				),
				'mt_malachi_background_image_disabled' => array(
					'label'      => __( 'Disable Background Image', 'mp_core' ),
					'type'       => 'checkbox',
					'default'    => '',
					'priority'   => 10,
					'element'    => '.container',
					'jquery_function_name' => 'css',
					'arg' => 'background-disabled'
				),
				'mt_malachi_background_repeat' => array(
					'label'      => __( 'Background Image Repeat', 'mp_core' ),
					'type'       => 'radio',
					'default'    => '',
					'priority'   => 10,
					'choices'    => array(
						'no-repeat'  => __('No Repeat', 'mp_core'),
						'repeat'     => __('Tile', 'mp_core'),
						'repeat-x'   => __('Tile Horizontally', 'mp_core'),
						'repeat-y'   => __('Tile Vertically', 'mp_core'),
					),
					'element'    => '.container',
					'jquery_function_name' => 'css',
					'arg' => 'background-repeat'
				),	
				'mt_malachi_background_position' => array(
					'label'      => __( 'Background Image Position', 'mp_core' ),
					'type'       => 'radio',
					'default'    => '',
					'priority'   => 10,
					'choices'    => array(
						'inherit'  => __('None', 'mp_core'),
						'left'  => __('Left', 'mp_core'),
						'center'     => __('Center', 'mp_core'),
						'right'   => __('Right', 'mp_core'),
					),
					'element'    => '.container',
					'jquery_function_name' => 'css',
					'arg' => 'background-position'
				),
			)
		)
	);
	
	$args = has_filter('mt_malachi_customizer_args') ? apply_filters('mt_malachi_customizer_args', $args) : $args;
	
	new MP_CORE_Customizer($args);
}

add_action ('init', 'mt_malachi_customizer');