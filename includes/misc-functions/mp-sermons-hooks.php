<?php
/**
 * Add styling before the mp-sermons-latest widget
 */
function mt_malachi_mp_sermons_latest_start_widget(){
	echo '<div class="latest-sermon">';
}
add_action( 'mp_sermons_latest_widget_start', 'mt_malachi_mp_sermons_latest_start_widget');

/**
 * Add styling before the mp-links widget
 */
function mt_malachi_mp_sermons_latest_end_widget(){
	echo '</div>';
}
add_action( 'mp_sermons_latest_widget_end', 'mt_malachi_mp_sermons_latest_end_widget');
