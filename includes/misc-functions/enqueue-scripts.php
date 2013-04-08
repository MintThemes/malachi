<?php
/**
 * Enqueue scripts and styles
 */
if ( ! function_exists( 'malachi_scripts' ) ):
	function malachi_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		
		wp_enqueue_style( 'googledroidsans', 'http://fonts.googleapis.com/css?family=Droid+Sans:400,700' );
		wp_enqueue_style( 'googledroidsans', 'http://fonts.googleapis.com/css?family=Droid+Serif:400italic' );
	
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	
		if ( is_singular() && wp_attachment_is_image() ) {
			wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
		}
		
		wp_enqueue_script( 'jquery' );
	}
endif; //malachi_scripts
add_action( 'wp_enqueue_scripts', 'malachi_scripts' );