<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	/* 
	* The order of these four is important.
	* Also, comment them out when editing custom posts and custom fields. 
	* Then when ready for dist:
	* - acf-fieldgroups.php: go to wp admin site, custom fields, export field groups/generate php ("The following code can be used to register a local version of the selected field group(s).")
	* - acf.php: acf plugin goes here (grab code from plugin / theme php file from https://www.advancedcustomfields.com/resources/including-acf-within-a-plugin-or-theme/). NB to edit path, in code directory is called includes, but that folder is called inc in this project.
	* - custom-post-types.php: go to CPT UI/tools, Get Code (All Custom Post Type UI Post Types). Paste code into the file.
	* - custom-taxonomies: go to CPT UI/tools, Get Code (All Custom Post Type UI Taxonomies). Paste code into the file.
	*/
	// '/custom-post-types.php',               // Load custom post types
	// '/custom-taxonomies.php',               // Load custom taxonomies
	// '/acf.php',											// Load ACF plugin
	// '/acf-fieldgroups.php',						// Load ACF field groups
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
