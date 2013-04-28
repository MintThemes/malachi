<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Malachi
 * @since Malachi 3.0
 */

get_header(); ?>

<div id="main">

            <?php while ( have_posts() ) : the_post(); ?>
            
			<div id="content">
            
                <div class="content-inner">
    
                    <div class="title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    
                    <div class="blog-post">
                    
                        <div class="text">
                            
                            <?php the_content(); ?>
                            
                            <?php edit_post_link( __( 'Edit', 'malachi' ), '', '' ); ?>
                            
                        </div>
                    
                    </div><!-- blog-post end -->               
                
                    <div class="comments">
        
                        <?php comments_template(); ?>
        
                    </div><!-- comments end -->
                
                </div><!-- content inner -->
            
			</div><!-- content end -->
            
            <?php endwhile; ?>
		
			<?php get_sidebar(); ?>

</div><!-- main end -->

<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'malachi' ), 'after' => '' ) ); ?>


<?php get_footer(); ?>