<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Malachi
 * @since Malachi 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="top" class="top">
	<div class="top-inner">
		
        <?php 
		//Show the map		
        echo '<strong class="map mt-malachi-icon-address"><a href="' . get_theme_mod('mt_malachi_top_bar_map_url') . '">' . __('Map &amp; Directions', 'mt_malachi') . '</a></strong>';
		
		
		//Show the times
        echo '<strong class="time mt-malachi-icon-calendar">' . get_theme_mod('mt_malachi_top_bar_times') . '</strong>';
		
		//Show Phone Number
        echo '<strong class="mt-malachi-icon-phone">' . get_theme_mod('mt_malachi_top_bar_phone') . '</strong>';
		
		?>
    
        <div class="form-search">
    
			<?php //Show search form
            	echo get_search_form();
            ?>
    
        </div><!-- form-search end -->
        
	</div>
</div> 

<div class="container">
<div class="container-top">

			<div id="wrapper">

				<div id="header">

					<div class="holder">

                    <strong class="logo"><?php function_exists( 'mp_core_logo_image' ) ? mp_core_logo_image() : ''; ?></strong>

					<ul id="nav">
                                       
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'mp_core_link_to_menu_editor' ) ); ?>
           
					</ul>
					</div>

				</div><!-- header end -->