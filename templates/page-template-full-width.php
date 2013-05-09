<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
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
						
                        	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
							<div class="heading-box">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="article">
								<?php the_content(); ?>
							</div>
							<div class="comments">
                                <?php comments_template( '', true ); ?>
                     		</div><!-- comments end -->
                             <?php endwhile; ?>
						
					</div>
							</div><!-- content end -->
							
						
						</div>
					</div>
				</div><!-- main end -->
						

<?php get_footer(); ?>