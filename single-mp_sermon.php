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
					<div class="main-container">
						<div class="box-t"></div>
						<div class="box-holder">
                        
							<div id="content">
								<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        		<div class="title">
									<h2><?php the_title(); ?></h2>
								</div>
								<div class="blog-post">
									
									<?php 	
                                    //get the post thumbnail for this post
                                    $image_id = get_post_thumbnail_id();  
                                    
									if (isset($image_id)){ ?>
                                    
                                        <div class="top-img">
                                            <?php
                                            $image_url = wp_get_attachment_image_src($image_id,'full');  
                                            $image_url = $image_url[0];  
                                            ?>
                                            <img src="<?php echo mp_aq_resize( $image_url , 604, 272, true); ?>" alt="article_image_full" width="604" height="272" />
                                        </div>
                                        
                                    <?php } ?>
									
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
							</div><!-- content end -->
							<?php get_sidebar(); ?>
						</div>
						<div class="box-b"></div>
					</div>
				</div><!-- main end -->
						
						
						

<?php get_footer(); ?>