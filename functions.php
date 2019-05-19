<?php
  function mat_assets() {
    wp_enqueue_style( 'home-content', get_theme_file_uri('/css/content.css'));
    wp_enqueue_style( 'header-section', get_theme_file_uri('/css/home.css'));
  	wp_enqueue_script( 'home-form' , get_theme_file_uri('/js/home-form.js'));
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Tangerine:700&display=swap');
  }

  add_action( 'wp_enqueue_scripts', 'mat_assets' );
