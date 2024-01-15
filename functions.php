<?php
add_action('wp_enqueue_scripts', 'divi_child_enqueue_styles');
function divi_child_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_stylesheet_directory_uri() . '/style.css');
}
