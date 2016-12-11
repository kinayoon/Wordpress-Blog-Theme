<?php 

 /**
 *   Custom Functions
 */
 
if ( ! function_exists('minimal_the_custom_logo') ) :
 
function minimal_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' )){
			the_custom_logo();
	}
}
endif;

//hook
add_action('wp_head', 'minimal_the_custom_logo');





/**
*	include Fonts 
*/

if ( ! function_exists( 'minimal_fonts_url' ) ) :
	
	function minimal_fonts_url(){	
		$query_args = array (
				'family' => 'Roboto:400,500,700,900|Raleway:800,900|Shrikhand',
		);	
		wp_register_style('google-fonts', add_query_arg( $query_args , 'http://fonts.googleapis.com/css'), array(), null );
		wp_enqueue_style('google-fonts');
	}
	
endif;
add_action('wp_enqueue_scripts','minimal_fonts_url');

/**
*	include Javascript
*/

function minimal_scripts(){
	wp_enqueue_style('minimal-style', MINIMAL_PARENT_URL . '/css/default.css');
	wp_enqueue_style('minimal-style', MINIMAL_PARENT_URL . '/style.css');
	wp_enqueue_script('minimal-script', MINIMAL_PARENT_URL . '/js/functions.js', array('jquery'), '1.1', false);

}
add_action('wp_enqueue_scripts', 'minimal_scripts');

?>