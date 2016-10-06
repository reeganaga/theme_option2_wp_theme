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
	$test_array = array(
		'1' => __( 'Active', 'theme-textdomain' ),
		'2' => __( 'Not Active', 'theme-textdomain' ),
	);
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
		'name' => __( 'Activate Sidebar', 'theme-textdomain' ),
		'desc' => __( 'Configure your sidebar to show at frontpage', 'theme-textdomain' ),
		'id' => 'activate__sidebar',
		'class' => 'mini',
		'type' => 'select',
		'options' => $test_array
	);

	$options[] = array(
		'name' => __( 'Total Post', 'theme-textdomain' ),
		'desc' => __( 'Limit Your Post to show at frontpage .', 'theme-textdomain' ),
		'class' => 'mini',
		'id' => 'limit_post',
		'std' => '1',
		'type' => 'text'
	);

	return $options;
}