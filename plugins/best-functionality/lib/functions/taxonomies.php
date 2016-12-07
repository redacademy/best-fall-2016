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

function register_location_taxonomy_() {

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

/* Register Activities taxonomy for Resources Post Type */
function register_activities_taxonomy_() {

	$labels = array(
		'name'                       => 'Activity Types',
		'singular_name'              => 'Activity Type',
		'menu_name'                  => 'Activity Types',
		'all_items'                  => 'All Activity Types',
		'parent_item'                => 'Parent Activity Type',
		'parent_item_colon'          => 'Parent Activity Type:',
		'new_item_name'              => 'New Activity Type Name',
		'add_new_item'               => 'Add New Activity Type Item',
		'edit_item'                  => 'Edit Activity Type',
		'update_item'                => 'Update Activity Type',
		'view_item'                  => 'View Activity Type',
		'separate_items_with_commas' => 'Separate Activity types with commas',
		'add_or_remove_items'        => 'Add or remove Activity types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Activity Types',
		'search_items'               => 'Search Activity Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Activity Types',
		'items_list'                 => 'Activity Type list',
		'items_list_navigation'      => 'Activity Type list navigation',
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
	register_taxonomy( 'activity_type', array( 'resources' ), $args );

}
add_action( 'init', 'register_activities_taxonomy_', 0 );

/* Register Downloads taxonomy for Resources Post Type */
function register_downloads_taxonomy_() {

	$labels = array(
		'name'                       => 'Download Types',
		'singular_name'              => 'Download Type',
		'menu_name'                  => 'Download Types',
		'all_items'                  => 'All Download Types',
		'parent_item'                => 'Parent Download Type',
		'parent_item_colon'          => 'Parent Download Type:',
		'new_item_name'              => 'New Download Type Name',
		'add_new_item'               => 'Add New Download Type Item',
		'edit_item'                  => 'Edit Download Type',
		'update_item'                => 'Update Download Type',
		'view_item'                  => 'View Download Type',
		'separate_items_with_commas' => 'Separate Download types with commas',
		'add_or_remove_items'        => 'Add or remove Download types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Download Types',
		'search_items'               => 'Search Download Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Download Types',
		'items_list'                 => 'Download Type list',
		'items_list_navigation'      => 'Download Type list navigation',
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
	register_taxonomy( 'download_type', array( 'resources' ), $args );

}
add_action( 'init', 'register_downloads_taxonomy_', 0 );