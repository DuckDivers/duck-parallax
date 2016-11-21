<?php

function duck_parallax_shortcode($atts, $content = null){
	$atts = shortcode_atts(
		array(
			'img' => '',
			'speed' => '0',
			'height' => '',
		), $atts, 'duck-parallax' );
		
	if ( !$atts['img']) {
      return;
    }

    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' =>'image',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
    );

    $query_images = new WP_Query( $args );

    if ( $query_images->have_posts() ) {
      foreach ( $query_images->posts as $item) { 
        $filename = wp_basename($item->guid);
        if($atts['img'] == $filename) $image_url = $item->guid;
      }
    }

	if ($atts['speed'] < 10) {
		$speed = '.'.$atts['speed'];
	}
	else {
		$speed = 1;
	}

    wp_reset_postdata(); 
		$output = '<section class="parallax-section">';
		$output .= '<div class="parallax-window" data-z-index="1" data-position="left" data-parallax="scroll" data-speed="'.$speed.'" data-image-src="'.$image_url.'"';
		
		if ($atts['height'] !== ''){
			$output .= 'style="min-height: '.$atts['height'].'px">';
			}
		else { $output .='>';
		}
		
		$output .= '<div class="container-fluid">';
		$output .= do_shortcode($content);
		$output .= '</div></div></section>';
		
		return $output;
	}
add_shortcode('duck-parallax', 'duck_parallax_shortcode');