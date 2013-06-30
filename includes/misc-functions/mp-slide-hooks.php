<?php
/**
 * Add styling before the mp-slide widget
 */
function mt_malachi_mp_slide_before_widget(){
	echo '<div class="latest-box">
            <div class="box-t"></div>
            <div class="box-holder">';
				
}
//add_action( 'mp_slide_before_widget', 'mt_malachi_mp_slide_before_widget');

/**
 * Add styling before the mp-slide widget
 */
function mt_malachi_mp_slide_after_widget(){
	echo '</div>
            <div class="box-b"></div>
        	</div><!-- latest-box end -->';
}
//add_action( 'mp_slide_after_widget', 'mt_malachi_mp_slide_after_widget');

/**
 * Modify the default width of the images for the sliders
 */
function mt_malachi_mp_slide_width($width){
	$width = 940;
	return $width;
}
//add_filter( 'mp_slide_slider_width_widget', 'mt_malachi_mp_slide_width'); //<-- the hook is mp_slide_slider_height_'slider_id'

/**
 * Modify the default height of the images for the sliders
 */
function mt_malachi_mp_slide_height($height){
	$height = 529;
	return $height;
}
//add_filter( 'mp_slide_slider_height_widget', 'mt_malachi_mp_slide_height'); //<-- the hook is mp_slide_slider_height_'slider_id'