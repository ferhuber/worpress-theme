<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

 <div class="container">
  <header class="site-header">
    <!-- <h1><?php bloginfo('name'); ?></h1> -->
    <!-- <h5><?php bloginfo('description'); ?></h5> -->
    <nav >

      <div class="logo">
        <p>page logo</p>

      </div>

    <div class="site-nav">
      <?php

      $args = array(
        'theme_location' => 'primary'
      );

      ?>
      <?php wp_nav_menu( $args); ?>
    </div>
    </nav>
 </header>
