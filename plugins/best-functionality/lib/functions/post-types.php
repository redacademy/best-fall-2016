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
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'prize', $args );

}
add_action( 'init', 'register_prizes_post_type', 0 );


// Register Participants Post Type 

function register_participants_post_type() {

	$labels = array(
		'name'                  => 'Participants',
		'singular_name'         => 'Participant',
		'menu_name'             => 'Participants',
		'name_admin_bar'        => 'Participant',
		'archives'              => 'Participant',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Participants',
		'add_new_item'          => 'Add New Participant',
		'add_new'               => 'Add New',
		'new_item'              => 'New Participant',
		'edit_item'             => 'Edit Participant',
		'update_item'           => 'Update Participant',
		'view_item'             => 'View Participant',
		'search_items'          => 'Search Participants',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Participant',
		'uploaded_to_this_item' => 'Uploaded to this Participant',
		'items_list'            => 'Participants list',
		'items_list_navigation' => 'Participants list navigation',
		'filter_items_list'     => 'Filter Participantslist',
	);
	$args = array(
		'label'                 => 'Participant',
		'description'           => 'Commuter Challenge Participants',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'participant', $args );

}
add_action( 'init', 'register_participants_post_type', 0 );


// Register Participants Post Type 

function register_resources_post_type() {

	$labels = array(
		'name'                  => 'Resources',
		'singular_name'         => 'Resource',
		'menu_name'             => 'Resources',
		'name_admin_bar'        => 'Resource',
		'archives'              => 'Resource',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Resources',
		'add_new_item'          => 'Add New Resource',
		'add_new'               => 'Add New',
		'new_item'              => 'New Resource',
		'edit_item'             => 'Edit Resource',
		'update_item'           => 'Update Resource',
		'view_item'             => 'View Resource',
		'search_items'          => 'Search Resources',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Resource',
		'uploaded_to_this_item' => 'Uploaded to this Resource',
		'items_list'            => 'Resources list',
		'items_list_navigation' => 'Resourceslist navigation',
		'filter_items_list'     => 'Filter Resourceslist',
	);
	$args = array(
		'label'                 => 'Resources',
		'description'           => 'Commuter Challenge Resources',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-pressthis',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'resources', $args );

}
add_action( 'init', 'register_resources_post_type', 0 );