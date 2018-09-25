<?php 

/* Añade la categoría Productos a Wordpress */

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'crear_taxonomia_motos', 0 );
 
//create a custom taxonomy name it topics for your posts
 
function crear_taxonomia_motos() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Motos', 'taxonomy general name' ),
    'singular_name' => _x( 'Categoría', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar categorías' ),
    'all_items' => __( 'Todos las categorías' ),
    'parent_item' => __( 'Categoría padre' ),
    'parent_item_colon' => __( 'Categoría padre:' ),
    'edit_item' => __( 'Editar categoría' ),
    'update_item' => __( 'Actualizar categoría' ),
    'add_new_item' => __( 'Agregar nueva categoria' ),
    'new_item_name' => __( 'Nueva categoría' ),
    'menu_name' => __( 'Categorías' ),
  );
 
// Now register the taxonomy
 
  register_taxonomy('motos', array('productos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
	'query_var' => true,
	'rewrite' => array(
		'slug' => 'motos',
	)
  ));
 
}

// Register Custom Post Type
function registros_productos() {

	$labels = array(
		'name'                  => _x( 'Productos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Producto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Productos', 'text_domain' ),
		'name_admin_bar'        => __( 'Productos', 'text_domain' ),
		'archives'              => __( 'Archivo de productos', 'text_domain' ),
		'attributes'            => __( 'Atributos del producto', 'text_domain' ),
		'parent_item_colon'     => __( 'Producto padre', 'text_domain' ),
		'all_items'             => __( 'Todos los productos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar productos', 'text_domain' ),
		'add_new'               => __( 'Nuevo producto', 'text_domain' ),
		'new_item'              => __( 'Nuevo producto', 'text_domain' ),
		'edit_item'             => __( 'Editar producto', 'text_domain' ),
		'update_item'           => __( 'Actualizar producto', 'text_domain' ),
		'view_item'             => __( 'Ver producto', 'text_domain' ),
		'view_items'            => __( 'Ver productos', 'text_domain' ),
		'search_items'          => __( 'Buscar productos', 'text_domain' ),
		'not_found'             => __( 'No se encontró ningún producto', 'text_domain' ),
		'not_found_in_trash'    => __( 'No hay producto en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen de producto', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen', 'text_domain' ),
		'remove_featured_image' => __( 'Quitar imagen', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagen', 'text_domain' ),
		'insert_into_item'      => __( 'Agrega al producto', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Agregado a la lista de productos', 'text_domain' ),
		'items_list'            => __( 'Lista de productos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de producos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de items', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Producto', 'text_domain' ),
		'description'           => __( 'Productos de la tienda', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
		'taxonomies'            => array('motos'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'productos', $args );

}
add_action( 'init', 'registros_productos', 0 );



?>