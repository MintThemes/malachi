<?php
/**
 * Extends MP_CORE_Widget to create custom widget class.
 */
class MT_MALACHI_Widget extends MP_CORE_Widget {
		
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'mt_malachi_tri_slot_widget', // Base ID
			'Tri-Slot', // Name
			array( 'description' => __( 'This widget should be placed on your homepage', 'mt_malachi' ), ) // Args
		);
		
		//enqueue scripts defined in MP_CORE_Widget
		add_action( 'admin_enqueue_scripts', array( $this, 'mp_widget_enqueue_scripts' ) );
			
		$this->_form = array (
			"field1" => array(
				'field_id' 			=> 'slot_1_title',
				'field_title' 	=> __('Enter the title of slot #1:', 'mt_malachi_tri_slot'),
				'field_description' 	=> NULL,
				'field_type' 	=> 'textbox',
			),
			"field2" => array(
				'field_id' 			=> 'slot_1_source',
				'field_title' 	=> __('Select the source of slot #1:', 'mt_malachi_tri_slot'),
				'field_description' 	=> NULL,
				'field_type' 	=> 'select',
				//'field_select_values' =>  mp_core_get_all_post_types() + mp_core_get_all_tax_terms() ,
				'field_select_values' =>  array_merge(mp_core_get_all_post_types(), mp_core_get_all_tax_terms()),
			),
			"field3" => array(
				'field_id' 			=> 'slot_2_title',
				'field_title' 	=> __('Enter the title of slot #2:', 'mt_malachi_tri_slot'),
				'field_description' 	=> NULL,
				'field_type' 	=> 'textbox',
			),
			"field4" => array(
				'field_id' 			=> 'slot_2_source',
				'field_title' 	=> __('Select the source of slot #2:', 'mt_malachi_tri_slot'),
				'field_description' 	=> NULL,
				'field_type' 	=> 'select',
				//'field_select_values' =>  mp_core_get_all_post_types() + mp_core_get_all_tax_terms() ,
				'field_select_values' =>  array_merge(mp_core_get_all_post_types(), mp_core_get_all_tax_terms()),
			),
			"field5" => array(
				'field_id' 			=> 'slot_3_title',
				'field_title' 	=> __('Enter the title of slot #3:', 'mt_malachi_tri_slot'),
				'field_description' 	=> NULL,
				'field_type' 	=> 'textbox',
			),
			"field6" => array(
				'field_id' 			=> 'slot_3_source',
				'field_title' 	=> __('Select the source of slot #3:', 'mt_malachi_tri_slot'),
				'field_description' 	=> NULL,
				'field_type' 	=> 'select',
				//'field_select_values' =>  mp_core_get_all_post_types() + mp_core_get_all_tax_terms() ,
				'field_select_values' =>  array_merge(mp_core_get_all_post_types(), mp_core_get_all_tax_terms()),
			),
			
			
			
		);
		
		//print_r ( get_post_types(array( 'public' => true, '_builtin' => false ), 'objects' ) );
		
		//Filter for addons
		$this->_form = has_filter( 'mt_malachi_tri_slot_widget_form' ) ? apply_filters( 'mt_malachi_tri_slot_widget_form', $this->_form) : $this->_form;
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
		
		//Load the current number of the slider 
		global $global_slider_num;
		
		//Extract the args
		extract( $args );
		$title = apply_filters( 'mt_malachi_tri_slot_widget_title', isset($instance['title']) ? $instance['title'] : '' );
		
		/**
		 * Links Before Hook
		 */
		 do_action('mt_malachi_tri_slot_before_widget');
		
		/**
		 * Widget Start and Title
		 */
		echo $before_widget;
		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;
			
		/**
		 * Widget Body
		 */
		//$instance['slide_cat']
		
		?>
        <div class="tri-slot">
            <div class="col col1">
            
                <?php if ( !empty( $instance['slot_1_title'] )) { ?>
                    <div class="tri-slot-title">
            
                        <h3><?php echo $instance['slot_1_title'] ?></h3>
            
                    </div>
                <?php } 
                
                global $post;
            	
				//If this is a taxonomy term (they are stored as numbers)
				if ( strpos( $instance['slot_1_source'], '*' ) ){
					
					$termid_taxname = explode( '*', $instance['slot_1_source'] );
					
					$args = array(
                        'post_type' => "post",
						'posts_per_page' => 3,
						'tax_query' => array(
							'relation' => 'AND',
							array(
								'taxonomy' =>  $termid_taxname[1],
								'field'    => 'id',
								'terms'    => array( $termid_taxname[0] ),
								'operator' => 'IN'
							)
						)
                    );
					
										
					$slot_1_posts = get_posts($args);
					
					
				}
				//If this is a custom post type
				else{
					$args = array( 
						'post_type' => $instance['slot_1_source'],
						'showposts' => 3,
						'order' => 'ASC'
					);
					
					 $slot_1_posts = get_posts($args);
				}
           		
				//print_r ( $slot_1_posts );
                echo '<ul>';
                
                    foreach($slot_1_posts as $post) : 
                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                    endforeach;
                
                echo '</ul>';
            
                ?>
            
            </div>
        
        	<div class="col col2">
            
                <?php if ( !empty( $instance['slot_2_title'] )) { ?>
                    <div class="tri-slot-title">
            
                        <h3><?php echo $instance['slot_2_title'] ?></h3>
            
                    </div>
                <?php } 
                
                global $post;
            
                //If this is a taxonomy term (they are stored as numbers)
				if ( strpos( $instance['slot_2_source'], '*' ) ){
					
					$termid_taxname = explode( '*', $instance['slot_2_source'] );
					
					$args = array(
                        'post_type' => "post",
						'posts_per_page' => 3,
						'tax_query' => array(
							'relation' => 'AND',
							array(
								'taxonomy' =>  $termid_taxname[1],
								'field'    => 'id',
								'terms'    => array( $termid_taxname[0] ),
								'operator' => 'IN'
							)
						)
                    );
					
										
					$slot_2_posts = get_posts($args);
					
					
				}
				//If this is a custom post type
				else{
					$args = array( 
						'post_type' => $instance['slot_2_source'],
						'showposts' => 3,
						'order' => 'ASC'
					);
					
					 $slot_2_posts = get_posts($args);
				}
                
                echo '<ul>';
                
                    foreach($slot_2_posts as $post) : 
                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                    endforeach;
                
                echo '</ul>';
            
                ?>
            
            </div>

        
        	<div class="col col3">
            
                <?php if ( !empty( $instance['slot_3_title'] )) { ?>
                    <div class="tri-slot-title">
            
                        <h3><?php echo $instance['slot_3_title'] ?></h3>
            
                    </div>
                <?php } 
                
                global $post;
            
                //If this is a taxonomy term (they are stored as numbers)
				if ( strpos( $instance['slot_3_source'], '*' ) ){
					
					$termid_taxname = explode( '*', $instance['slot_3_source'] );
					
					$args = array(
                        'post_type' => "post",
						'posts_per_page' => 3,
						'tax_query' => array(
							'relation' => 'AND',
							array(
								'taxonomy' =>  $termid_taxname[1],
								'field'    => 'id',
								'terms'    => array( $termid_taxname[0] ),
								'operator' => 'IN'
							)
						)
                    );
					
										
					$slot_3_posts = get_posts($args);
					
					
				}
				//If this is a custom post type
				else{
					$args = array( 
						'post_type' => $instance['slot_3_source'],
						'showposts' => 3,
						'order' => 'ASC'
					);
					
					 $slot_3_posts = get_posts($args);
				}
                
                echo '<ul>';
                
                    foreach($slot_3_posts as $post) : 
                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                    endforeach;
                
                echo '</ul>';
            
                ?>
            
            </div>
        
        </div>
        
        <?php
			
					
		/**
		 * Widget End
		 */
		echo $after_widget;
		
		/**
		 * Links After Hook
		 */
		 do_action('mt_malachi_tri_slot_after_widget');
	}
}

add_action( 'register_sidebar', create_function( '', 'register_widget( "MT_MALACHI_Widget" );') );