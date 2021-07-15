<?php

//標準機能
function my_setup() {
  add_theme_support( 'post-thumbnails' ); //アイキャッチ
  add_theme_support( 'title-tag' ); //タイトルタグの自動生成
  add_theme_support( 'html5', array( //HTML5のタグで出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_setup' );

//CSS / JavaScriptの読み込み
function my_script_init() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );