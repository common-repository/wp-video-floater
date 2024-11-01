<?php
/**
 * Plugin Name: WP Video Floater
 * Plugin URI: https://wpgate.com.br
 * Description: This plugin will allow you to keep your videos playing floating at the bottom of the page as you scroll down
 * Version: 1.0
 * Author: Tiago Rodrigues
 * Author URI: http://wpgate.com.br
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wpvf_register(){
	wp_register_script( 'modernizr', plugins_url('/js/modernizr.js', __FILE__), array(), '2.7.1');
	wp_enqueue_style( 'wpvf-styles', plugins_url('/css/wpvf-styles.css', __FILE__), array(), '0.1');
	
}
add_action('wp_enqueue_scripts', 'wpvf_register');

function wpvf_find_shortcode()
{
	global $post;
	global $content;
	$content = $post->post_content;
	if ( ! is_admin() ) {
		if( has_shortcode( $content, 'wp-video-floater' ) ) {
			wp_enqueue_script( 'wpvfjs', plugins_url('/js/wpvf.js', __FILE__), array( 'modernizr', 'jquery' ), '0.1');
		}
	}
}

add_shortcode('wp-video-floater', 'wpvf_find_shortcode');