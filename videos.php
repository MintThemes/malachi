<?php
/*
Template Name: Videos
*/


get_header(); ?>

<div id="main">
					<div class="section">
						<div class="box-t">&nbsp;</div>
						<div class="box-holder">
							<div class="heading-box">
								<h2><?php the_title(); ?></h2>
							</div>
							<ul class="album-list-2">
                            <?php wp_reset_query(); ?>
                        
							<?php
                            $num = 0;
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array('paged' => $paged, 'post_type' => 'cpt_videos', 'showposts' => 6);
                            query_posts($args);		
                            ?>
                            <div class="news-post-holder">
                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>                
                            
								<li>
									<div class="video-overlay">
                                    <a href="<?php the_permalink(); ?>" ><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/css/images/video-icon.png"/></a>
                                    </div>
                                    <div class="img">
									
									<?php
                                    //get the post thumbnail for this post
                                    $image_id = get_post_thumbnail_id();  
                                    if ($image_id != ""){ 
                                   	 	$image_url = wp_get_attachment_image_src($image_id,'full');  
                                    	$image_url = $image_url[0];  
                                    ?>
                                    <a href="<?php the_permalink(); ?>" ><img src="<?php bloginfo( 'template_directory' ); ?>/thumb.php?src=<?php if (is_multisite()){echo get_current_site(1)->path; echo str_replace(get_blog_option($blog_id,'fileupload_url'),get_blog_option($blog_id,'upload_path'),$image_url); }else{ echo $image_url;}?>&h=134&w=254&zc=1" alt="<?php the_title(); ?>" /></a>
                                    <?php } ?>
                                    </div>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<div class="meta"><em class="date"><?php echo get_the_date('F j, Y'); ?></em><a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></div>
									<p><?php the_excerpt(); ?></p>
								</li>
                            <?php endwhile; // end of the loop. ?>							
							<?php endif; ?>
							</ul>
                            <?php get_template_part ('includes/pagination'); ?>
						
						</div>
						<div class="box-b">&nbsp;</div>
					</div><!-- section end -->
				</div><!-- main end -->

            <?php get_footer(); ?>