<?php
/*
  	Plugin Name: Parallax Image
  	Plugin URI: https://www.duckdiverllc.com/parallax-image-plugin/
  	Version: 1.3
  	Author: thehowarde
  	Description: A Simple plugin to employ the parallax.js script by pixelcog.  Use the shortcode [dd-parallax] to use.  See readme.txt for complete instructions. Version 1.3 adds ability to easily offset parallax content
	License:  GNU General Public License v3
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if ( ! defined( 'ABSPATH' ) )
exit; 
 
define( 'DD_PARALLAX_FILE', __FILE__ );
$plugin_url = WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__));

require_once "$plugin_url/assets/shortcode.php";

?>
