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
        echo '<strong class="map"><a href="' . get_theme_mod('mt_malachi_top_bar_map_url') . '">Map &amp; Directions</a></strong>';
		
		
		//Show the times
        echo '<strong class="time">' . get_theme_mod('mt_malachi_top_bar_times') . '</strong>';
		
		?>
    
        <div class="form-search">
    
            <form action="<?php echo home_url( '/' ); ?>">
    
                <fieldset>
    
                    <input type="text" class="text" name="s" id="s"/>
    
                    <input class="btn-search" type="submit" value="Search" />
    
                </fieldset>
    
            </form>
    
        </div><!-- form-search end -->
        
	</div>
</div> 

<div class="container">
<div class="container-top">

			<div id="wrapper">

				<div id="header">

					<div class="holder">

                    <strong class="logo"><?php mp_core_logo_image(); ?></strong>

					<ul id="nav">
                    <?php
					
					$options = array(
					'echo' => false,
					'container' => false,
					'theme_location'  => 'primary' 
					);
					
					$menu = wp_nav_menu($options);
					echo preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
					
					?>
           
					</ul>
					</div>

				</div><!-- header end -->








