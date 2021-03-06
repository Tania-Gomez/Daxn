<?php

// Register Custom Post Type
function customers_post_type() {

	$labels = array(
		'name'                  => _x( 'Customers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Customer', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Customers', 'text_domain' ),
		'name_admin_bar'        => __( 'Customers', 'text_domain' ),
		'archives'              => __( 'Customer Archives', 'text_domain' ),
		'attributes'            => __( 'Customer Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Customer:', 'text_domain' ),
		'all_items'             => __( 'All Customers', 'text_domain' ),
		'add_new_item'          => __( 'Add New Customer', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Customer', 'text_domain' ),
		'edit_item'             => __( 'Edit Customer', 'text_domain' ),
		'update_item'           => __( 'Update Customer', 'text_domain' ),
		'view_item'             => __( 'View Customer', 'text_domain' ),
		'view_items'            => __( 'View Customers', 'text_domain' ),
		'search_items'          => __( 'Search Customer', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into customer', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this customer', 'text_domain' ),
		'items_list'            => __( 'Customers list', 'text_domain' ),
		'items_list_navigation' => __( 'Customers list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter customers list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Customers', 'text_domain' ),
		'description'           => __( 'Post Type for customer testimonials', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'customers', $args );

}
add_action( 'init', 'customers_post_type', 0 );

 ?>
