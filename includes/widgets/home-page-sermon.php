<?php
/**
 * Extends MP_CORE_Widget to create custom widget class.
 */
class MALACHI_HOMEPAGE_SERMON extends MP_CORE_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'malachi_homepage_sermon_widget', // Base ID
			'Homepage Sermon Widget', // Name
			array( 'description' => __( 'Display Latest Sermon', 'mt_malachi' ), ) // Args
		);
		
		//enqueue scripts defined in MP_CORE_Widget
		add_action( 'admin_enqueue_scripts', array( $this, 'mp_widget_enqueue_scripts' ) );
		
		$this->_form = array (
			"field1" => array(
				'field_id' 			=> 'title',
				'field_title' 	=> __('Title:', 'mt_malachi'),
				'field_description' 	=> NULL,
				'field_type' 	=> 'textbox',
			),
		);
	
	}
	
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', isset($instance['title']) ? $instance['title'] : '' );
		
		/**
		 * Links Before Hook
		 */
		do_action('malachi_homepage_sermon_before_widget');
		
		?>
		<div class="latest-box">
            <div class="box-t"></div>
            <div class="box-holder">
				<?php
                
                /**
                 * Widget Start and Title
                 */
                echo $before_widget;
                if ( ! empty( $title ) )
                    echo $before_title . $title . $after_title;
                    
                /**
                 * Widget Body
                 */
                //echo $instance['link_cat'];
                
                //Set the args for the new query
                $sermon_args = array(
                    'post_type' => "mp_sermon",
                    'show_posts' => 1,
                );	
                
                //Create new query for stacks
                $sermons = new WP_Query( apply_filters( 'sermon_args', $sermon_args ) );
                    
                //Loop through the stack group		
                if ( $sermons->have_posts() ) : 
                    while( $sermons->have_posts() ) : $sermons->the_post(); 
						?>
                        
						<a class="btn-listen" href="<?php the_permalink(); ?>">Listen</a>
						
						<a class="btn-podcast" href="<?php echo mp_sermons_podcast_url('itpc://', 'mp_sermon'); ?>"><?php _e('Podcast', 'mt_malachi'); ?></a>
						
						<strong><?php the_title(); ?>  - <?php the_time('F j, Y'); ?></strong>
										   
						<a class="btn-view-all" href="<?php echo get_post_type_archive_link( 'mp_sermon' ); ?>"><?php _e('View All' , 'malachi'); ?></a>
							
						<?php
                    endwhile;
                endif;
                
                /**
                 * Widget End
                 */
                echo $after_widget;
                
                ?>
            </div>
            <div class="box-b"></div>
        </div><!-- latest-box end -->
        <?php
		/**
		 * Links After Hook
		 */
		 do_action('malachi_homepage_sermon_after_widget');
	}
}

add_action( 'register_sidebar', create_function( '', 'register_widget( "MALACHI_HOMEPAGE_SERMON" );' ) );
