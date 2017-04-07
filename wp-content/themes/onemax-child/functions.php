<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'OneMax style' for the OneMax  theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*
***************** CUSTOM POST TYPE *********************
*/

function register_portfolio() {
  $labels = array(
    'name' => 'Portfolio',
    'singular_name' => 'Portfolio',
    'add_new' => 'Add Porfolio item',
    'all_items' => 'All items',
    'add_new_item' => 'Add Portfolio item',
    'edit_item' => 'Edit item',
    'new_item' => 'New item',
    'view_item' => 'View item',
    'search_item' => 'Search Portfolio',
    'not_found' => 'Nothing found',
    'not_found_in_trash' => 'Nothing found in trash',
    'parent_item_colon' => 'Parent item'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
    ),
    'taxonomies' => array(
      'category',
      'post_tag',
    ) ,
    'menu_position' => 5,
    'exclude_from_search' =>  false,
  );
  register_post_type('portfolio2', $args);
}
add_action('init', 'register_portfolio');
?>
