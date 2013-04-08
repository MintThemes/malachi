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
                    <h2><?php echo single_cat_title( '', false );?></h2>
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
