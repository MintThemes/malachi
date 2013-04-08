<?php
/*
Template Name: Events
*/


get_header(); ?>
	
    
    <div id="main">
					<div class="main-container">
						<div class="box-t"></div>
						<div class="box-holder">
							<div id="content">
								<div class="title">
									<h2><?php the_title(); ?></h2>
								</div>
								<div class="sermons-holder">
									                                    
									<?php wp_reset_query(); ?>
                                    
                                    <?php
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    $args = array('paged' => $paged, 'post_type' => 'cpt_events', 'post_status' => 'future');
                                    query_posts($args);		
                                    ?>
                                    
                                     <?php if (have_posts()) : ?>
           							 <?php while (have_posts()) : the_post(); ?>
									<div class="post">
										<div class="img">
											<?php
                                    //get the post thumbnail for this post
                                    $image_id = get_post_thumbnail_id();  
                                    if ($image_id != ""){ 
                                    $image_url = wp_get_attachment_image_src($image_id,'full');  
                                    $image_url = $image_url[0];  
                                    ?>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/thumb.php?src=<?php if (is_multisite()){echo get_current_site(1)->path; echo str_replace(get_blog_option($blog_id,'fileupload_url'),get_blog_option($blog_id,'upload_path'),$image_url); }else{ echo $image_url;}?>&h=119&w=119&zc=1" alt="" /></a>
                                    <?php } ?>
										</div>
										<div class="text">
											
											<div class="text">
												<h3>Title: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
												<p>Date: <?php echo get_the_date('F j, Y'); ?></p>
												<p>Location: <?php echo get_post_meta($post->ID, 'address', true); ?></p>
												<p><a href="<?php echo get_post_meta($post->ID, 'map', true); ?>">Map</a></p>
											</div>
										</div>
									</div><!-- post end -->
									
                                    <?php endwhile; // end of the loop. ?>
                      				<?php endif; ?>
                                    
								</div><!-- sermons-holder end -->
								<?php get_template_part ('includes/pagination'); ?>
							</div><!-- content end -->
							<?php get_sidebar(); ?>
						</div>
						<div class="box-b"></div>
					</div>
				</div><!-- main end -->							
                               
                <?php get_footer(); ?>
