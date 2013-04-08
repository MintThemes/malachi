<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Malachi
 * @since Malachi 3.0
 */

get_header(); ?>

<div id="main">

					<div class="visual">

						<?php dynamic_sidebar( 'homepage-widget-area' ); ?>


					</div><!-- visual end -->
                    
   					<div class="event-box">

						<div class="box-t"></div>

						<div class="box-holder">

							<div class="holder">

								<div class="col">

									<div class="title">

										<h3>Upcoming Events</h3>

									</div>

									<ul>
                                    
									<?php
                                    $args = array( 'post_type' => 'cpt_events',
                                    'post_status' => 'future',
                                    'showposts' => 3,
                                    'order' => 'ASC');
                                    $the__events_query = new WP_Query($args);	
                                    
                                    
                                    global $post;
                                    $eventsposts = get_posts($args);
                                    foreach($eventsposts as $post) : ?>
										<a href="<?php the_permalink(); ?>"><li><?php the_time('M j, Y'); ?> - <?php the_title(); ?> <?php the_time(); ?></li></a>
									<?php endforeach; ?>
										

									</ul>

								</div>

								<div class="col2">

									<div class="title">

										<h3>News &amp; Announcements</h3>

									</div>

									<ul>
									<?php 
                                    $args = array( 'post_type' => 'cpt_news',
                                    'showposts' => 3);
                                    $the__news_query = new WP_Query($args);	
                                    
                                    
                                    global $post;
                                    $newsposts = get_posts($args);
                                    foreach($newsposts as $post) : ?>
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> posted on <?php the_time('M j, Y'); ?></a></li>
									<?php endforeach; ?>

									</ul>

								</div>

								<div class="col3">

									<div class="title">

										<h3>Contact Details</h3>

									</div>

									<ul>

										<li><?php bloginfo( 'name' ); ?></li>

										<li><?php echo get_option('cap_address'); ?></li>

										<?php if (get_option('cap_phone_number') != "eg: 111-111-1111") { ?><li>P: <?php echo get_option('cap_phone_number'); ?></li><?php } ?>

										<?php if (get_option('cap_phone_number') != "eg: 111-111-1111") { ?><li>F: <?php echo get_option('cap_fax_number'); ?></li><?php } ?>

										<li>Email: <?php echo get_option('cap_email'); ?></li>

									</ul>

									<a class="btn-map" target="_blank" href="http://maps.google.com/?q=<?php echo get_option('cap_address'); ?>">map</a>

								</div>

							</div>

						</div>

						<div class="box-b"></div>

					</div><!-- event-box end -->

				</div><!-- main end -->
<?php get_footer(); ?>