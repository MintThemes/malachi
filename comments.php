<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to temp_comment() which is
 * located in the mp-core/includes/theme-specific/comments/template-tag.php file.
 *
 * @package WordPress
 * @subpackage Malachi
 * @since Malachi 3.0
 */

//Call the mp_core_comments_template function if it exists
if ( function_exists ( 'mp_core_comments_template' ) ) {
	mp_core_comments_template();
}else{
	wp_list_comments(); comment_form(); paginate_comments_links();
}