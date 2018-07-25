<?php

require_once('lib/functions/bzb-functions.php');

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_enqueue_styles() {
  define("TEMPLATE_DIRE", get_template_directory_uri());
  define("TEMPLATE_PATH", get_template_directory());
  
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), date('YmdGis', filemtime(TEMPLATE_PATH.$file_path)));
  wp_enqueue_style( 'child-style',  get_stylesheet_directory_uri() . '/dist/main.css', array('parent-style'), date('YmdGis', filemtime(TEMPLATE_PATH.$file_path)));
}

function theme_scripts() {
  wp_enqueue_script( 'functions-child', get_stylesheet_directory_uri() . '/dist/main.js', array() );
}