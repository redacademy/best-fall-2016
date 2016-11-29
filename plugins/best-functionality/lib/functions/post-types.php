<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Prize Post Type 

function register_prizes_post_type() {

	$labels = array(
		'name'                  => 'Prizes',
		'singular_name'         => 'Prize',
		'menu_name'             => 'Prizes',
		'name_admin_bar'        => 'Prize',
		'archives'              => 'Prize',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Prizes',
		'add_new_item'          => 'Add New Prize',
		'add_new'               => 'Add New',
		'new_item'              => 'New Prize',
		'edit_item'             => 'Edit Prize',
		'update_item'           => 'Update Prize',
		'view_item'             => 'View Prize',
		'search_items'          => 'Search Prize',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Prize',
		'uploaded_to_this_item' => 'Uploaded to this Prize',
		'items_list'            => 'Prizes list',
		'items_list_navigation' => 'Prizes list navigation',
		'filter_items_list'     => 'Filter Prizeslist',
	);
	$args = array(
		'label'                 => 'Prize',
		'description'           => 'Commuter Challenge Prizes',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => 'prize',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'prize', $args );

}
add_action( 'init', 'register_prizes_post_type', 0 );