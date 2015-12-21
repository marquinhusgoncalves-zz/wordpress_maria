<?php
//Barra superior ADM
    add_filter('show_admin_bar', '__return_false');

//CSS JS
function theme_styles()  
{ 
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, '2.1.4');
   	// wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js", false, null);
   	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts', 'theme_styles');

//Menu
function menu_setup() {
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Menu', 'mariaaoleite' ) );

}
add_action( 'after_setup_theme', 'menu_setup' );
?>