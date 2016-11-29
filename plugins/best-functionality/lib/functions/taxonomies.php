<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
function register_prize_taxonomy_() {

	$labels = array(
		'name'                       => 'Prize Types',
		'singular_name'              => 'Prize Type',
		'menu_name'                  => 'Prize Types',
		'all_items'                  => 'All Prize Types',
		'parent_item'                => 'Parent Prize Type',
		'parent_item_colon'          => 'Parent Prize Type:',
		'new_item_name'              => 'New Prize Type Name',
		'add_new_item'               => 'Add New Prize Type Item',
		'edit_item'                  => 'Edit Prize Type',
		'update_item'                => 'Update Prize Type',
		'view_item'                  => 'View Prize Type',
		'separate_items_with_commas' => 'Separate Prize types with commas',
		'add_or_remove_items'        => 'Add or remove Prize types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Prize Types',
		'search_items'               => 'Search Prize Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Prize Types',
		'items_list'                 => 'Prize Type list',
		'items_list_navigation'      => 'Prize Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'prize_type', array( 'prize' ), $args );

}
add_action( 'init', 'register_prize_taxonomy_', 0 );
