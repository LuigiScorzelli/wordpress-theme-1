<?php

  if(!function_exists('import_style_script')){
    function import_style_script(){

      wp_enqueue_style('boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
      wp_enqueue_style('boolean_theme', get_template_directory_uri().'/style.css');
    }

    add_action('wp_enqueue_scripts', 'import_style_script');
  }

  if(!function_exists('setup_boolean')){
    function setup_boolean(){
      register_nav_menus(array(
        'header' => esc_html__('Header', 'fullbase'),
      ));
    }

    add_action('after_setup_theme', 'setup_boolean');
  }

?>
