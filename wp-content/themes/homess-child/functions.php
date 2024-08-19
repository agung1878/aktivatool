<?php 
add_action( 'wp_enqueue_scripts', 'homess_child_scripts_styles', 15 );
function homess_child_scripts_styles(){
	global $homess_opt;
	if($homess_opt['enable_less']){
		$params = array(
			// less variables
		);
		if( function_exists('compileLess') ){
			compileLess('child-theme.less', 'child-theme-less.css', $params);
		}
	}
	if(file_exists(get_stylesheet_directory() . '/css/child-theme.css')){
		wp_enqueue_style( 'child-theme-less', get_stylesheet_directory_uri() . '/css/child-theme-less.css' );
	}
	wp_enqueue_style( 'homess-child-theme', get_stylesheet_directory_uri() . '/css/child-theme-css.css' );
	wp_enqueue_style( 'homess-child-style', get_stylesheet_directory_uri() . '/style.css' );
}
