<?php
/**
 * The Template for displaying all single posts.
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
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <div class="title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="blog-post">
                        
                        <div class="text">
                                   
                            <?php echo mp_core_the_featured_image( get_the_id() , 254, 134, '<div class="single-featured-image"><img src="', '" width="254px" height="134px" /></div>');  ?>         
                                                                  
                            <?php the_content(); ?>
    						
                            <?php echo mp_people_links_list(); ?>   
                             
                            <?php
                            wp_link_pages( array( 'before' => '' . __( 'Pages:', 'malachi' ), 'after' => '' ) ); 
                            edit_post_link( __( 'Edit', 'malachi' ), '', '' ); 
                            ?>
                            
                        </div>
                        
                    </div>
                    
                    <div class="comments">
                    	<?php comments_template( '', true ); ?>
                    </div><!-- comments end -->
                    
                    <?php endwhile; ?>
            	</div>
            </div><!-- content end -->
            
            <?php get_sidebar(); ?>
        
        </div>
        
    </div>
    
</div><!-- main end -->	

<?php get_footer(); ?>