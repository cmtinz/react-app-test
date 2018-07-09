<?php 

function agregar_modelos ( $tag, $unused ) {  
    $paged = get_the_ID();
    if ( $tag['name'] != 'modelo' )  
        return $tag;  

    if(isset($_GET["id"])) {
        $id = (int)$_GET["id"];
        $postin = array($id);
    } else {
        $postin = array();
    }

    $args = array ( 
            'post_type' 	=> 'productos',
            'numberposts' 	=> 50,
            'orderby' 		=> 'title',
            'post__in'		=> $postin,
            'order' 		=> 'ASC',
            'post_status'	=> 'publish'
    );

    $plugins = get_posts($args);
    
    if ( ! $plugins )
        return $tag;
    
    foreach ( $plugins as $plugin ) {
        if (count(get_children(array('post_parent' => $plugin->ID, 'post_type' => 'productos'))) == 0) {
            $tag['raw_values'][] = $plugin->post_title;
            $tag['values'][] = $plugin->post_title;
            $tag['labels'][] = $plugin->post_title;
        }
    }

    return $tag;
}
add_filter( 'wpcf7_form_tag', 'agregar_modelos', 10, 2);


?>