<?php
/*
  	Plugin Name: Duck Diver Parallax
  	Plugin URI: https://www.duckdiverllc.com/
  	Version: 1.0
  	Author: Howard Ehrenberg
  	Description: A Simple plugin to employ the parallax.js script tested with Wordpress default themes and bootstrap based theme.
	License:           GNU General Public License v3
	License URI:       http://www.gnu.org/licenses/gpl-3.0.html
	Domain Path:       /languages
	GitHub Plugin URI: https://github.com/DuckDivers/duck-parallax
	GitHub Branch:     master	

 */

if ( ! defined( 'ABSPATH' ) )
exit; 
 
// Register style sheet and scripts.
add_action( 'wp_enqueue_scripts', 'register_plugin_scripts' );

/**
 * Register style sheet.
 */
function register_plugin_scripts() {
		wp_register_script ('duck-parallax', plugins_url ('duck-parallax/js/parallax.min.js'), array('jquery'), '1.0', true);
		wp_enqueue_script('duck-parallax');
		wp_register_script ('duck-parallax-custom', plugins_url ('duck-parallax/js/duck-parallax.js'), array('jquery'), '1.0', true);
		wp_enqueue_style('duck-parallax-style', plugins_url('duck-parallax/css/duck-parallax.css'));
}

require_once ('assets/shortcode.php');
