<?php 

// Register Custom Post Type
function registro_cotizaciones() {

	$labels = array(
		'name'                  => _x( 'Cotizaciones', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cotización', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cotizaciones', 'text_domain' ),
		'name_admin_bar'        => __( 'Cotizaciones', 'text_domain' ),
		'archives'              => __( 'Archivo de cotizaciones', 'text_domain' ),
		'attributes'            => __( 'Atributos de cotizaciones', 'text_domain' ),
		'all_items'             => __( 'Todas las cotizaciones', 'text_domain' ),
		'add_new_item'          => __( 'Agregar cotizaciones', 'text_domain' ),
		'add_new'               => __( 'Nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva cotización', 'text_domain' ),
		'edit_item'             => __( 'Editar cotización', 'text_domain' ),
		'update_item'           => __( 'Actualizar cotización', 'text_domain' ),
		'view_item'             => __( 'Ver cotización', 'text_domain' ),
		'view_items'            => __( 'Ver cotizaciones', 'text_domain' ),
		'search_items'          => __( 'Buscar cotizaciones', 'text_domain' ),
		'not_found'             => __( 'No se encontró ninguna cotización', 'text_domain' ),
		'not_found_in_trash'    => __( 'No hay cotizaciones en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen de cotización', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen', 'text_domain' ),
		'remove_featured_image' => __( 'Quitar imagen', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagen', 'text_domain' ),
		'insert_into_item'      => __( 'Agrega a la cotización', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Agregado a la lista de cotizaciones', 'text_domain' ),
		'items_list'            => __( 'Lista de cotizaciones', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de cotizaciones', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de cotizaciones', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Cotizaciones', 'text_domain' ),
		'description'           => __( 'Cotizaciones de la tienda', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('editor', 'page-attributes'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'cotizaciones', $args );

}
add_action( 'init', 'registro_cotizaciones', 0 );



?>