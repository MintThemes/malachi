<?php
/**
 * The Home Page template file.
 *
 * @package WordPress
 * @subpackage Malachi
 * @since Malachi 3.0
 */

get_header(); ?>

    <div id="main">
    
        <div class="visual">
    
            <?php dynamic_sidebar( 'homepage-widget-area' ); ?>
            
        </div><!-- visual end -->
                        
    </div><!-- main end -->

<?php get_footer(); ?>