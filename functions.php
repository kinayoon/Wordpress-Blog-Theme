<?php
/************************** 

	Hello, I'm Kina :)
	It's Beautiful Day!
	
**************************/


 /**
 *   Theme Support     
 */
  
 if ( ! function_exists('minimal_theme_setup')) :
		
    function minimal_theme_setup(){
		load_theme_textdomain('Minimal Life', get_template_directory() . '/languages');
		
		if ( ! isset($content_width)	) {
				$content_width = 1200;
		}
		
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('image','gallery'));  
		
		add_theme_support('custom-header');
		add_theme_support('site-logo', 200);
		add_theme_support('custom-logo', array (
				'width'		=> 250,
				'height'	=> 150,
				'flex-width'	=> true,
				'flex-height'	=> true,
				'header-text'	=> array('kina', ''),
		));
		
		add_theme_support('menus');
		register_nav_menus( array(
			'main_menu' => __('Main Menu','Minimal Life'),
			'siderbar_menu' => __('Sidebar Menu', 'Minimal Life'),
			'footer_menu' => __('Footer Menu', 'Minimal Life'),		
		));
		
		add_theme_support( 'html5', array(
			'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'
		));
		
		add_image_size( 'category-thumbnail', 350, 9999 );  //custom
	}	
 endif;

 add_action('after_setup_theme' , 'minimal_theme_setup'); 
 
 
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
	wp_enqueue_style('minimal-style', get_template_directory_uri() . '/css/default.css');
	wp_enqueue_script('minimal-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), false, true);

}
add_action('wp_enqueue_scripts', 'minimal_scripts');


?>