<?php

if(is_page_template( 'unlimited-365-plan.php' )){
  wp_enqueue_style( 'style.min.css', get_stylesheet_directory_uri() . '/dist//css/style.min.css');
  wp_enqueue_script( 'unlimited-365-plan-js', get_stylesheet_directory_uri(). '/dist/js/app.min.js', array(), '', true );
}
?>