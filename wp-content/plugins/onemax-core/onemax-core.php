<?php
/*
Plugin Name: onemax-core
Plugin URI: http://demo.onemax.site
Description: This is the onemax theme's core plugin,which can extend the theme.
Version: 1.31
Author: Onemax
Author URI: http://demo.onemax.site
*/

//custom taxonomy
function onemax_taxonomy_init() {
	// create a new taxonomy
	register_taxonomy(
		'location',
		'post',
		array(
			'label' => __( 'Location' ,'onemax'),
      'hierarchical' => true,
		)
	);
}
add_action( 'init', 'onemax_taxonomy_init' );

//int Post Type
function onemax_post_type_int (){
              $labels = array(
             'name' => __('Portfolios','onemax'),
             'singular_name' => __('Portfolios','onemax'),
             'add_new' => __('Add New','onemax'),
             'all_items' => __('All Portfolios','onemax'),
             'add_new_item' => __('Add Portfolio','onemax'),
             'edit_item' => __('Edit Portfolio','onemax'),
             'new_item' => __('New Portfolio','onemax'),
             'view_item' => __('View Portfolio','onemax'),
             'search_item' => __('Search Portfolio','onemax'),
             'not_found' => __('No items found','onemax'),
             'not_found_in_trash' => __('No items found in trash','onemax'),
             'parent_item_colon' => __('Parent Item','onemax'),
            );
            $args = array(
             'labels' => $labels,
             'public' => false,
             'show_ui'      =>  true,
             'has_archive' => true,
             'publicly_queryable' => true,
             'query_var' => true,
             'rewrite' => true,
             'capability_type' => 'post',
             'hierarchical' => false,
             'supports' => array(
                 'title',
		         'editor',
                 'thumbnail',
                 'revisions',
                 'comments'
             ),
             'taxonomies' => array('category', 'post_tag'),
             'menu_position' => 8,
			 'menu_icon'     => 'dashicons-images-alt2',
			 'can_export'    => true,
             'exclude_from_search' => false
            );
            register_post_type('portfolio',$args);

            $labels = array(
             'name' => __('Clients','onemax'),
             'singular_name' => __('Clients','onemax'),
             'add_new' => __('Add New','onemax'),
             'all_items' => __('All Clients','onemax'),
             'add_new_item' => __('Add New','onemax'),
             'edit_item' => __('Edit Client','onemax'),
             'new_item' => __('New Client','onemax'),
             'view_item' => __('View Client','onemax'),
             'search_item' => __('Search Client','onemax'),
             'not_found' => __('No items found','onemax'),
             'not_found_in_trash' => __('No items found in trash','onemax'),
             'parent_item_colon' => __('Parent Item','onemax'),
            );
            $args = array(
             'labels' => $labels,
             'public' => false,
             'show_ui' =>  true,
             'has_archive' => true,
             'publicly_queryable' => true,
             'query_var' => true,
             'rewrite' => true,
             'capability_type' => 'post',
             'hierarchical' => false,
             'supports' => array(
                 'title',
                 'thumbnail',
                 'revisions',
             ),
             'taxonomies' => array('category'),
             'menu_position' => 6,
						 'menu_icon'     => 'dashicons-businessman',
						 'can_export'    => true,
             'exclude_from_search' => false
            );
            register_post_type('Clients',$args);

            $labels = array(
             'name' => __('Testimonials','onemax'),
             'singular_name' => __('Testimonials','onemax'),
             'add_new' => __('Add New','onemax'),
             'all_items' => __('All Testimonials','onemax'),
             'add_new_item' => __('Add Testimonial','onemax'),
             'edit_item' => __('Edit Testimonial','onemax'),
             'new_item' => __('New Testimonial','onemax'),
             'view_item' => __('View Testimonial','onemax'),
             'search_item' => __('Search Testimonial','onemax'),
             'not_found' => __('No items found','onemax'),
             'not_found_in_trash' => __('No items found in trash','onemax'),
             'parent_item_colon' => __('Parent Item','onemax'),
            );
            $args = array(
             'labels' => $labels,
             'public' => false,
             'show_ui'=>  true,
             'has_archive' => true,
             'publicly_queryable' => true,
             'query_var' => true,
             'rewrite' => true,
             'capability_type' => 'post',
             'hierarchical' => false,
             'supports' => array(
                 'title',
                 'editor',
                 'thumbnail',
                 'revisions',
             ),
             'taxonomies' => array('category', 'post_tag'),
             'menu_position' => 7,
						 'menu_icon'     => 'dashicons-format-quote',
						 'can_export'    => true,
             'exclude_from_search' => false
            );
            register_post_type('Testimonials',$args);

						$labels = array(
             'name' => __('OneMax Slider','onemax'),
             'singular_name' => __('OneMax_Slider','onemax'),
             'add_new' => __('Add New','onemax'),
             'all_items' => __('All Slider','onemax'),
             'add_new_item' => __('Add Item','onemax'),
             'edit_item' => __('Edit Slider','onemax'),
             'new_item' => __('New Slider','onemax'),
             'view_item' => __('View Slider','onemax'),
             'search_item' => __('Search Slider','onemax'),
             'not_found' => __('No items found','onemax'),
             'not_found_in_trash' => __('No items found in trash','onemax'),
             'parent_item_colon' => __('Parent Item','onemax'),
            );
            $args = array(
             'labels' => $labels,
             'public' => false,
             'show_ui'=>  true,
             'has_archive' => true,
             'publicly_queryable' => true,
             'query_var' => true,
             'rewrite' => true,
             'capability_type' => 'post',
             'hierarchical' => false,
             'supports' => array(
                 'title',
                 'thumbnail',
                 'revisions',
             ),
             'taxonomies' => array('location', 'post_tag'),
             'menu_position' => 8,
						 'menu_icon'     => 'dashicons-format-gallery',
						 'can_export'    => true,
             'exclude_from_search' => false
            );
            register_post_type('onemax_slider',$args);
}
add_action('init','onemax_post_type_int');

?>