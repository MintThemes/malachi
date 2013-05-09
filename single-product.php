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
                                
                                <div class="post-date">
                                	Written by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> - <?php comments_number('0','1','%'); ?> Comments
                                </div>
                                
								<div class="blog-post">

                                <div class="text">
                                    <?php the_content(); ?>
                                    <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'malachi' ), 'after' => '' ) ); ?>
                                    <?php edit_post_link( __( 'Edit', 'malachi' ), '', '' ); ?>
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