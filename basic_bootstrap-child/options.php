<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {



	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	// var_dump();

	$options = array();

	$options[] = array(
		'name' => __( 'Basic Settings', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Logo Upload', 'theme-textdomain' ),
		'desc' => __( 'Upload to costumized your logo.', 'theme-textdomain' ),
		'id' => 'upload_logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Footer Copyright', 'theme-textdomain' ),
		'desc' => __( 'Customized footer website.', 'theme-textdomain' ),
		'id' => 'footer_copyright',
		'std' => 'Copyright 2016',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Blog Description', 'theme-textdomain' ),
		'desc' => __( 'Described your website to show the world.', 'theme-textdomain' ),
		'id' => 'custom_blog_description',
		'std' => 'lorem ipsum dolor sit amet',
		'type' => 'text'
	);

	return $options;
}