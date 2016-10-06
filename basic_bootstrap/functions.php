<?php 
// See the __() WordPress function for valid values for $text_domain.

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/options-framework/' );
require_once dirname( __FILE__ ) . '/options-framework/options-framework.php';

// define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/options-framework/' );
// require_once dirname( __FILE__ ) . '/options-framework/options-framework.php';

 $optionsfile = locate_template( 'options.php' );
 load_template( $optionsfile );
// die();
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Home Left sidebar',
		'id'            => 'home_left_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


function addingstyle() {
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap' );
	// wp_register_style( 'basic_bootstrapstyle', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'basic_bootstrapstyle' ,get_template_directory_uri() . '/style.css' ); 
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.min.js');
	wp_enqueue_script( 'jquery'); 
}
add_action( 'wp_enqueue_scripts', 'addingstyle' );
 ?>