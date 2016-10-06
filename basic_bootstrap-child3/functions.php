<?php

	if (of_get_option('maintenance_mode')==1) {
		$maintenance=true;
	}else{
		$maintenance=false;
	}
    define('MAINTENANCE', $maintenance); //set to true to enable maintenance mode
    if (!is_admin() && !current_user_can( 'manage_options' ) && MAINTENANCE) { //envoke maintenance if set
        if ( file_exists( WP_CONTENT_DIR . '/themes/basic_bootstrap-child3/maintenance.php' ) ) {
            require_once( WP_CONTENT_DIR . '/themes/basic_bootstrap-child3/maintenance.php' );
            die();
        }
    }


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

?>