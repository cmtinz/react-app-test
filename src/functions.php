<?php

/* Registra taxonomía Productos */
require get_template_directory() . '/inc/taxonomia-productos.php';

/* Registra clase para formatear navbar según Bootstrap 4 */
require get_template_directory() . '/inc/bootstrap-navwalker.php';

/* Selector Regiones */
require get_template_directory() . '/inc/selector-regiones.php';

/* Slider Home */
require get_template_directory() . '/inc/slider.php';

/* Registrar Menús */
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Principal' ),
			'footer-menu' => __( 'Footer' )
			)
		);
}
add_action( 'init', 'register_my_menus' );

/* Logo personalizado */
function icon_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	add_image_size( 'desktop', 1366, 606, false );
}

/* Modifica el formato de números */
function formato_de_numeros($formatted){
	return str_replace(',','.',$formatted);
}
add_filter('number_format_i18n', 'formato_de_numeros');


// Agrega soporte para Thumbnails
add_theme_support( 'post-thumbnails' );
add_action( 'after_setup_theme', 'icon_setup' );

/* Enqueue scripts and styles */
function icon_scripts() {
	wp_enqueue_style( 'icon-style', get_stylesheet_uri() );
	wp_enqueue_style( 'icon-bootstrap', get_stylesheet_directory_uri() . "/css/bootstrap.css", array(), filemtime( get_template_directory() . '/css/bootstrap.css'));
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", array(), '3.3.1' );
	// wp_enqueue_script( 'icon-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array('jquery'), false, true );
	wp_enqueue_script( 'icon-bootstrap', get_stylesheet_directory_uri() . "/js/bootstrap.min.js", array('jquery'), false, true );
	wp_enqueue_script( 'icon-scripts', get_stylesheet_directory_uri() . "/js/scripts.js", array('jquery'), false, true );
	wp_register_script( 'selector-regiones', get_stylesheet_directory_uri() . "/js/selector-regiones.js", array() );
	if (is_page( 'cotiza' )) {
		wp_enqueue_script( 'selector-regiones');
	}
}
add_action( 'wp_enqueue_scripts', 'icon_scripts' );
?>