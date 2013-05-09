<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage 
 * @since  3.0
 */

get_header(); ?>

<div id="main">

	<div id="main-inner">
    
		<div id="main-inner-inner">
        
			<div id="content">
            
				<div class="content-inner">

                    <div class="title">
                        <h2><?php echo __( 'Nothing Found. 404.', 'mt_malachi' ); ?></h2>
                    </div>
    
                    <div class="blog-post">
    
                        <div class="text">
    
                            <p><?php echo __( 'Nothing Found. 404.', 'mt_malachi' ); ?></p>
    
                        </div>
    
                    </div><!-- blog-post end -->               

				</div>
                
			</div><!-- content end -->

			<?php get_sidebar(); ?>
        
		</div>
	</div>
</div><!-- main end -->

<?php get_footer(); ?>