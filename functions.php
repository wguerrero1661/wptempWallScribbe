<?php

// adds theme support
add_theme_support('title-tag');
//featured images
add_theme_support('post-thumbnails');
//formats for features
add_theme_support('post_format',['aside', 'gallery', 'link', 'image', 'quote',
'status', 'video', 'audio', 'chat'] );
//supports html5 features
add_theme_support('html5');
//helps with meta data
add_theme_support('automatic-feed-links');
//
add_theme_support('custom-background');
//
add_theme_support('custom-header');
//
add_theme_support('custom-logo');
//
add_theme_support('customize-selective-refresh-widgets');
//mock of how to use/setup theme
add_theme_support('starter-content');

//load in CSS
function wpwallscribe_enqueue_styles(){
  wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [],
  time() , 'all' );

}

add_action('wp_enqueue_scripts', 'wpwallscribe_enqueue_styles');



?>
