<?php

function portfolio_resources() {

  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'portfolio_resources');

// Theme Setup

function theme_setup() {


  // Navigation Menu
  register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
  ));

  // Add feature image support
 add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'theme_setup');
