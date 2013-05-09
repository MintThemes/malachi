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
                                    
                                    <div class="podcast-holder">
           
                                        <a href="<?php echo mp_sermons_podcast_url('itpc://', 'mp_sermon'); ?>"><?php _e('Subscribe to Podcast', 'mt_malachi'); ?></a>
                                       
                                    </div>
								</div>
								<div class="blog-post">
									
                                    <div class="text">
                                                                        
                                        <?php echo mp_jplayer($post->ID, 'jplayer'); ?>
                                      
										<?php the_content(); ?>
                                        
                                        <div class="bible_verse">
											<?php _e('Scripture: ', 'mt_malachi'); ?><?php echo get_post_meta($post->ID, 'sermon_bible_verses', true); ?>
                                        </div>
	
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