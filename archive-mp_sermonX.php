<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Malachi
 * @since Malachi 3.0
 */

get_header(); ?>
			   
<div id="main">

 	<div id="main-inner" class="full-width">
    
		<div id="main-inner-inner">
    
            <div id="content">
                <div class="content-inner">
            
					 <div class="title sermon-archives-title">
                        <h2><?php function_exists ( 'mp_core_archive_page_title' ) ? mp_core_archive_page_title() : _e( 'Archives', 'mt_malachi' ); ?></h2>
                        
                        <div class="podcast-holder">
               
                           <a href="<?php echo mp_sermons_podcast_url('itpc://', 'mp_sermon'); ?>"><?php _e('Subscribe to Podcast', 'mt_malachi'); ?></a>
                           
                        </div>
                        
                    </div>
            
        		</div>
                
            </div><!-- content end -->  
              
        </div>
        
	</div>
    
    <div class="visual">

	<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class('homepage-widget'); ?> >
                <div class="homepage-widget-inner">
                    <div class="sermon">				
                                                                                                                                                                               
                        <a class="mp-sermons-widget-btn-listen" href="<?php the_permalink(); ?>"><?php echo __('Listen', 'mp_sermons' ); ?></a>
        
                        <a class="mp-sermons-widget-btn-podcast" href="<?php echo mp_sermons_podcast_url('itpc://', 'mp_sermon'); ?>"><?php echo __('Podcast', 'mp_sermons'); ?></a>
                        
                        <div class="mp-sermons-widget-title"><?php the_title(); ?></div>
                        
                        <div class="mp-sermons-widget-date"><?php the_time('F j, Y'); ?></div>
                                                           
                        <a class="mp-sermons-widget-btn-view-all" href="<?php the_permalink(); ?>"><?php _e('View' , 'mp_sermons'); ?></a>
                
                    </div>
                </div>
            </div>
           
        <?php endwhile; // end of the loop. ?>
    <?php endif; ?>

    <?php function_exists( 'mp_core_paginate_links' ) ? mp_core_paginate_links() : paginate_links(); ?>    

    </div>
</div><!-- main end -->
                               
<?php get_footer(); ?>
