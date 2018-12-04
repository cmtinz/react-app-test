<!-- Jumbotron -->
<div class="jumbotron-producto">
    <div class="texto">
        <h1 class="jumbotron-titulo"><?php the_title();?></h1>
    </div>
    <?php
    if ( has_post_thumbnail() ) :
        $imagen_a = wp_get_attachment_image_src( get_post_thumbnail_id( $hijo->ID ), 'optional-size' );
        $imagen = $imagen_a[0];
    else :
        $imagen = get_template_directory_uri() . '/img/imagen.svg';
    endif;
    ?>
    <img class="fondo" src="<?php echo $imagen?>" alt="Imagen de fondo de producto">
</div>
<!-- ./Jumbotron -->