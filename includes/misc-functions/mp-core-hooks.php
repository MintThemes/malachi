<?php
/**
 * Set default width for the logo
 */
function mt_malachi_logo_width(){
	return 300;
}
add_filter( 'mp_core_logo_width', 'mt_malachi_logo_width'); 

/**
 * Set default width for the logo
 */
function mt_malachi_logo_height(){
	return 75;
}
add_filter( 'mp_core_logo_height', 'mt_malachi_logo_height'); 

/**
 * Remove labels from Name Email and Website for comment form
 */
function mt_malachi_comment_form_args($args, $commenter, $req, $aria_req){
	
	//Remove Name Label from Comment Form
	$args['fields']['author'] = '<p class="comment-form-author"><input id="author" name="author" placeholder="' . __('Name', 'mt_malachi') . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';
	
	//Remove Email Label from Comment Form
	$args['fields']['email'] = '<p class="comment-form-email"><input id="email" name="email" placeholder="' . __('Email', 'mt_malachi') . '" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';
	
	//Remove Website Label from Comment Form
	$args['fields']['url'] = '<p class="comment-form-url"><input id="url" name="url" placeholder="' . __('Website', 'mt_malachi') . '" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>' ;
	
	//Remove notes after comment
	$args['comment_notes_after'] = NULL;
	
	//Remove Comment label before the comment textarea
	$args['comment_field'] = '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="' . __('Comment', 'mt_malachi') . '" aria-required="true"></textarea></p>';
	
	return $args;
}
add_filter( 'mp_core_comment_form_args', 'mt_malachi_comment_form_args', 10, 4); 

/**
 * Make sure the home page is created, has page template, and is set to be front page
 */
add_action("after_switch_theme", "mp_core_make_home_page", 10, 2);
register_activation_hook( ABSPATH . 'wp-content/plugins/mp-core/mp-core.php', "mp_core_make_home_page" );