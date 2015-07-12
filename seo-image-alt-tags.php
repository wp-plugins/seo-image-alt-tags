<?php
/*
* Plugin Name: SEO Image Alt Tags
* Plugin URI: http://andrewmgunn.com/seo-image-alt-tags/
* Description: Super lightweight plugin that automatically generates missing Alt tags for images.
* Version: 1.0
* Author: Andrew M. Gunn
* Author URI: http://andrewmgunn.com
* Text Domain: seo-image-alt-tags
* License: GPL2
*/

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );

add_action( 'admin_init', 'register_siat_scripts' );

function register_siat_scripts() {
	add_action( 'wp_enqueue_scripts', 'register_siat_includes' );
}

function register_siat_includes() {
	wp_register_script( 'siat_scripts', plugins_url('inc/siat-scripts.js', __FILE__), array('jquery'));
  wp_register_style( 'siat_styles', plugins_url('inc/siat-styles.css', __FILE__));
  wp_enqueue_style( 'siat_scripts' );
	wp_enqueue_script( 'siat_styles' );
}
