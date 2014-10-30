<?php


// let's create the function for the custom type
function homepage_slide_post_type() { 
	// creating (registering) the custom type 
	register_post_type( 'homepage_slide', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Homepage Slide', 'post type general name'), /* This is the Title of the Group */
			'singular_name' => __('Homepage Slide', 'post type singular name'), /* This is the individual type */
			'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
			'add_new_item' => __('Add New Homepage Slide'), /* Add New Display Title */
			'edit' => __( 'Edit' ), /* Edit Dialog */
			'edit_item' => __('Edit Homepage Slide'), /* Edit Display Title */
			'new_item' => __('New Homepage Slide'), /* New Display Title */
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'The new way to add slides to the homepage' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'homepage_slide_post_type');
	
	

?>