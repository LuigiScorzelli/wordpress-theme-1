<!DOCTYPE html>
<html <?php language_attributes();?>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('title');?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="left">
        <img id="logo" src="https://www.boolean.careers/images/common/logo.png" alt="logo"/>
        <div class="layer"></div>
      </div>
      <div class="right">
        <?php wp_nav_menu(array(
          'theme_location' => 'header',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'nav_item'
        )); ?>
      </div>
    </header>
