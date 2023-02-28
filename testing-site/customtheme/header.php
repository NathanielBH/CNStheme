<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
   <header class="my-logo">
   <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
 </header>
<nav id="header-menu">
  <?php
    class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
      function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
      }
    }
    
    wp_nav_menu( array(
      'theme_location' => 'header-menu',
      'container' => '',
      'walker' => new Custom2_Walker_Nav_Menu(),
    ) );
  ?>
</nav>
