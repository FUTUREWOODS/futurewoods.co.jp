<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', date("H:i:s"));
  wp_enqueue_style( 'child-style',  get_template_directory_uri() . '/dist/style.css', array('parent-style'), date("H:i:s"));
}

function theme_scripts() {
  wp_register_script( 'functions', get_template_directory_uri() . '/dist/main.js', array(), 1);
}