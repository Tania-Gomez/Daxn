<?php

// Register Custom Post Type
function clientes_post_type() {

	$labels = array(
		'name'                  => _x( 'Clientes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Clientes', 'text_domain' ),
		'name_admin_bar'        => __( 'Clientes', 'text_domain' ),
		'archives'              => __( 'Archivos de clientes', 'text_domain' ),
		'attributes'            => __( 'Atributos de cliente', 'text_domain' ),
		'parent_item_colon'     => __( 'Cliente principal', 'text_domain' ),
		'all_items'             => __( 'Todos los clientes', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo cliente', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo cliente', 'text_domain' ),
		'edit_item'             => __( 'Editar cliente', 'text_domain' ),
		'update_item'           => __( 'Actualizar cliente', 'text_domain' ),
		'view_item'             => __( 'Ver cliente', 'text_domain' ),
		'view_items'            => __( 'Ver clientes', 'text_domain' ),
		'search_items'          => __( 'Buscar cliente', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en clientes', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este cliente', 'text_domain' ),
		'items_list'            => __( 'Lista de clientes', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de clientes', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de clientes', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Cliente', 'text_domain' ),
		'description'           => __( 'Post destinado a testimonios de clientes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
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
	register_post_type( 'cliente', $args );

}
add_action( 'init', 'clientes_post_type', 0 );

 ?>
