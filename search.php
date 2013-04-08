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
					<div class="main-container">
						<div class="box-t"></div>
						<div class="box-holder">
							<div id="content">
								<div class="title">
									<h2>Search Results for "<?php echo get_search_query(); ?>"</h2>
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
											<a href="<?php the_permalink(); ?>" class="img-post"><img src="<?php bloginfo( 'template_directory' ); ?>/thumb.php?src=<?php if (is_multisite()){echo get_current_site(1)->path; echo str_replace(get_blog_option($blog_id,'fileupload_url'),get_blog_option($blog_id,'upload_path'),$image_url); }else{ echo $image_url;}?>&h=134&w=254&zc=1" alt="" /></a>
                                            <?php } ?>
										</div>
										<div class="text">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<em><?php echo get_the_date('F j, Y'); ?>  //  <a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></em>
											<p><?php the_excerpt(); ?></p>
										</div>
									</li>
                                    
								<?php endwhile; // end of the loop. ?>
                                <?php else : ?>
                                <div class="article">No results matched that search.</div>
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
