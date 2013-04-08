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
					<div class="section">
						<div class="box-t">&nbsp;</div>
						<div class="box-holder">
                        	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
							<div class="heading-box">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="article">
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
								<?php the_content(); ?>
							</div>
							<div class="comments">
                                <?php comments_template( '', true ); ?>
                     		</div><!-- comments end -->
                             <?php endwhile; ?>
						</div>
						<div class="box-b">&nbsp;</div>
					</div><!-- section end -->
				</div><!-- main end -->

<?php get_footer(); ?>