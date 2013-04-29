<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Malachi
 * @since Malachi 3.0
 */
?>

<div id="footer">
					<?php dynamic_sidebar( 'footer-widget-area' ); ?>

					
					<div class="holder">

						<div class="powered">

							<strong class="logo-powered"><a href="http://mintthemes.com"></a></strong>

						</div>

						<ul class="footer-nav">
							<?php
                            
                            $options = array(
                            'echo' => false
                            ,'container' => false
                            );
                            
                            $menu = wp_nav_menu($options);
                            echo preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
                            
                            ?>
						</ul>

						<p><?php echo __('Copyright', 'mt_malachi'); ?> &copy; <?php echo date('Y') . ' ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '. ' . __('All rights reserved.', 'mt_malachi'); ?> 
					</div>

				</div><!-- footer end -->

			</div><!-- wrapper end -->

		</div><!-- container-top end -->
        
        </div><!-- container end -->

			

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

	</body>

</html>