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
                                <div class="top">
										<p>Written by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> - <?php comments_number('0','1','%'); ?> Comments</p>
								</div>
									<?php 	
                                    //get the post thumbnail for this post
                                    $image_id = get_post_thumbnail_id();  
                                    if ($image_id != ""){ ?>
									<div class="top-img">
                                        <?php
                                        $image_url = wp_get_attachment_image_src($image_id,'full');  
                                        $image_url = $image_url[0];  
                                        ?>
										<img src="<?php bloginfo( 'template_directory' ); ?>/thumb.php?src=<?php if (is_multisite()){echo get_current_site(1)->path; echo str_replace(get_blog_option($blog_id,'fileupload_url'),get_blog_option($blog_id,'upload_path'),$image_url); }else{ echo $image_url;}?>&h=272&w=604&zc=1" alt="article_image_full" width="604" height="272" />
									</div>
                                     <?php } ?>
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
							</div><!-- content end -->
							<?php get_sidebar(); ?>
						</div>
						<div class="box-b"></div>
					</div>
				</div><!-- main end -->
						
						
						

<?php get_footer(); ?>