<?php 

/* Slider */

function registrar_slider($wp_customize) {

	$wp_customize->add_section('slider_header', array(
		'title' => 'Pie de página',
		'description' => 'Edita los datos del pie de página',
		'capability' => 'edit_theme_options',
		'prority' => 30
	));
		
	$wp_customize->add_setting( "footer_direccion", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'postMessage',
		) );

	$wp_customize->add_control( "footer_direccion", array(
	'type' => 'text',
	'section' => 'slider_header', // Required, core or custom.
	'label' => __( "Dirección" )
	) );
	
	$wp_customize->add_setting( "footer_direccion_url", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'postMessage',
		) );

	$wp_customize->add_control( "footer_direccion_url", array(
	'type' => 'url',
	'section' => 'slider_header', // Required, core or custom.
	'label' => __( "Google Maps URL" )
	) );
	
	$wp_customize->add_setting( "footer_telefono", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'postMessage',
		) );

	$wp_customize->add_control( "footer_telefono", array(
	'type' => 'text',
	'section' => 'slider_header', // Required, core or custom.
	'label' => __( "Teléfono" )
	) );
	
	$wp_customize->add_setting( "footer_instagram", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'postMessage',
		) );

	$wp_customize->add_control( "footer_instagram", array(
	'type' => 'url',
	'section' => 'slider_header', // Required, core or custom.
	'label' => __( "URL Instagram" )
	) );
	
	$wp_customize->add_setting( "footer_facebook", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'postMessage',
		) );

	$wp_customize->add_control( "footer_facebook", array(
	'type' => 'url',
	'section' => 'slider_header', // Required, core or custom.
	'label' => __( "URL Facebook" )
	) );
	
	$wp_customize->add_setting( "footer_linkedin", array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'postMessage',
		) );

	$wp_customize->add_control( "footer_linkedin", array(
	'type' => 'url',
	'section' => 'slider_header', // Required, core or custom.
	'label' => __( "URL LinkedIn" )
	) );

}

add_action('customize_register', 'registrar_slider');


/* Shortcode Slider */
function icon_slider(){
	// Recuperar lista de slides
	$imgs = array();
	for ($i = 1; $i <= 8; $i++) {
	$img_id = get_theme_mod( "slider_" . $i . "_img", false );
	$img_link = get_theme_mod( "slider_" . $i . "_link", false );
	$img_link = $img_link =! ""? $img_link: false;
	if ($img_id != "") {
		$imgs[] = array('id' => $img_id, 'link' => $img_link);
	};
	}
	
	// Crear elemento del slider
	echo "<div id='slider-home' class='carousel slide' data-ride='carousel'>";
	echo "<div class='carousel-inner'>";
	foreach ($imgs as $img) :
		$nslide ++;
		$tamanos = array("large", "desktop", "full");
		$l = $img['link'] != false? "href='" . $img['link'] . "'": "";
		$clase = $nslide == 1? "carousel-item active" : "carousel-item";
		echo "<a $l class='$clase' data-nslide='$nslide'>" . "<picture>";
		foreach ($tamanos as $tamano):
			$i = wp_get_attachment_image_src( $img['id'], $tamano, false );
			echo "<source srcset='$i[0]' type='image/jpeg' media='(max-width: $i[1]px)'>";
		endforeach;
		$i = wp_get_attachment_image_src( $img['id'], 'full', false );
		echo "<img class='d-block w-100' src='$i[0]' alt=''>";
		echo "</picture></a>\n";
		endforeach;
	echo "</div>";
	echo "<a class='carousel-control-prev' href='#slider-home' role='button' data-slide='prev'>"
		. "<span class='carousel-control-prev-icon' aria-hidden='true'></span>"
		. "<span class='sr-only'>Previous</span>"
		. "</a>"
		. "<a class='carousel-control-next' href='#slider-home' role='button' data-slide='next'>"
		. "<span class='carousel-control-next-icon' aria-hidden='true'></span>"
		. "<span class='sr-only'>Next</span>"
		. "</a>";
	echo "</div>";
}
add_shortcode( "icon_slider", "icon_slider" );

?>