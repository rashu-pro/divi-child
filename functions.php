<?php 
	 add_action( 'wp_enqueue_scripts', 'twenty_twenty_four_child_enqueue_styles' );
	 function twenty_twenty_four_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>