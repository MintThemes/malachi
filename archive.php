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
    <div class="main-container">
        <div class="box-t"></div>
        <div class="box-holder">
            <div id="content">
                <div class="title">
                    <h2>
					<?php
						if ( is_category() ) {
							printf( '<span>' . single_cat_title( '', false ) . '</span>' );
	
						} elseif ( is_tag() ) {
							printf( __( 'Tag Archives: %s', 'armonico' ), '<span>' . single_tag_title( '', false ) . '</span>' );
	
						} elseif ( is_author() ) {
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author Archives: %s', 'armonico' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();
						} elseif ( get_post_type() ) {
							printf( '<span>' . post_type_archive_title() . '</span>' );
						} elseif ( is_day() ) {
							printf( __( 'Daily Archives: %s', 'armonico' ), '<span>' . get_the_date() . '</span>' );
	
						} elseif ( is_month() ) {
							printf( __( 'Monthly Archives: %s', 'armonico' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
	
						} elseif ( is_year() ) {
							printf( __( 'Yearly Archives: %s', 'armonico' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
	
						} else {
							_e( 'Archives', 'armonico' );
	
						}
					?>
                    </h2>
                </div>
                                
                <ul class="media-list">

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
        
        
                    <li>
                        <div class="img">
                            <?php
                            //get the post thumbnail for this post
                            $image_id = get_post_thumbnail_id();  
                            if ($image_id != ""){ 
                            $image_url = wp_get_attachment_image_src($image_id,'full');  
                            $image_url = $image_url[0];  
                            ?>
                            <a href="<?php the_permalink(); ?>" class="img-post"><img src="<?php echo mp_aq_resize($image_url, 254, 134, true); ?>" width="254px" height="134px" alt="<?php the_title(); ?>" /></a>
                            <?php } ?>
                        </div>
                        <div class="text">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <em><?php echo get_the_date('F j, Y'); ?>  //  <a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></em>
                            <?php the_excerpt(); ?>
                        </div>
                    </li>
                    
                <?php endwhile; // end of the loop. ?>
                <?php endif; ?>
        
                </ul><!-- media-list end -->
                 <?php get_template_part ('includes/pagination'); ?>
            </div><!-- content end -->

    <?php get_sidebar(); ?>
    
    </div>
        <div class="box-b"></div>
    </div>
</div><!-- main end -->
                               
<?php get_footer(); ?>
