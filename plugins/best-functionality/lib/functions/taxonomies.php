<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Prize Taxonomy 

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

// Participants Taxonomy 

function register_participant_taxonomy_() {

	$labels = array(
		'name'                       => 'Participant Types',
		'singular_name'              => 'Participant Type',
		'menu_name'                  => 'Participant Types',
		'all_items'                  => 'All ParticipantTypes',
		'parent_item'                => 'Parent Participant Type',
		'parent_item_colon'          => 'Parent Participant Type:',
		'new_item_name'              => 'New Participant Type Name',
		'add_new_item'               => 'Add New Participant Type Item',
		'edit_item'                  => 'Edit Participant Type',
		'update_item'                => 'Update Participant Type',
		'view_item'                  => 'View Participant Type',
		'separate_items_with_commas' => 'Separate Participant types with commas',
		'add_or_remove_items'        => 'Add or remove Participant types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Participant Types',
		'search_items'               => 'Search Participant Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Participant Types',
		'items_list'                 => 'Participant Type list',
		'items_list_navigation'      => 'Participant Type list navigation',
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
	register_taxonomy( 'participant_type', array( 'participant' ), $args );

}
add_action( 'init', 'register_participant_taxonomy_', 0 );

function register_Location_taxonomy_() {

	$labels = array(
		'name'                       => 'Participant Locations',
		'singular_name'              => 'Participant Location',
		'menu_name'                  => 'Participant Locations',
		'all_items'                  => 'All ParticipantLocations',
		'parent_item'                => 'Parent Participant Location',
		'parent_item_colon'          => 'Parent Participant Location:',
		'new_item_name'              => 'New Participant Location Name',
		'add_new_item'               => 'Add New Participant Location Item',
		'edit_item'                  => 'Edit Participant Location',
		'update_item'                => 'Update Participant Location',
		'view_item'                  => 'View Participant Location',
		'separate_items_with_commas' => 'Separate Participant Locations with commas',
		'add_or_remove_items'        => 'Add or remove Participant Locations',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Participant Locations',
		'search_items'               => 'Search Participant Locations',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Participant Locations',
		'items_list'                 => 'Participant Location list',
		'items_list_navigation'      => 'Participant Location list navigation',
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
	register_taxonomy( 'participant_location', array( 'participant' ), $args );

}
add_action( 'init', 'register_location_taxonomy_', 0 );
