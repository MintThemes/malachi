<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Malachi
 * @since Malachi 3.0
 */


get_header(); ?>
			
            
            
<div id="main">

	<div id="main-inner">
    
   		<div id="main-inner-inner">
       
            <div id="content">
            
            	<div class="content-inner">
             
                    <div class="title">
                        <h2>Search Results for "<?php echo get_search_query(); ?>"</h2>
                    </div>
                                
                	<ul class="media-list">

                	<?php if (have_posts()) : ?>
                		<?php while (have_posts()) : the_post(); ?>
        
                            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                
								<?php 
                                if ( function_exists( 'mp_core_the_featured_image' ) ) {
                                    echo mp_core_the_featured_image( get_the_ID(), 254, 134, '<div class="img"><a href="' . get_permalink() . 
                                    '"><img src="', '" width="254px" height="134px" /></a></div>'); 
                                }?>
                                                        
                                <div class="text">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <em><?php echo get_the_date('F j, Y'); ?>  //  <a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></em>
                                    <?php the_excerpt(); ?>
                                </div>
                            </li>
                    
                		<?php endwhile; // end of the loop. ?>
                	<?php endif; ?>
        
                	</ul><!-- media-list end -->
                
        			<?php function_exists( 'mp_core_paginate_links' ) ? mp_core_paginate_links() : paginate_links(); ?>      
                 
                 </div>
            </div><!-- content end -->

    		<?php get_sidebar(); ?>
    	</div>
    </div>
</div><!-- main end -->
                               
<?php get_footer(); ?>