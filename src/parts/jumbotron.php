<!-- Jumbotron -->
<div class="jumbotron-producto">
    <div class="texto">
        <h1 class="jumbotron-titulo"><?php the_title();?></h1>
    </div>
    <picture class="fondo">
    <?php
    if ( has_post_thumbnail() ) :
        $imagen_a = wp_get_attachment_image_src( get_post_thumbnail_id( $hijo->ID ), 'optional-size' );
        $imagen = $imagen_a[0];?>
        <source srcset="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $hijo->ID ), 'fondo-xl')?>" media="(max-width: 1440px)">
        <source srcset="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $hijo->ID ), 'fondo-lg')?>" media="(max-width: 992px)">
        <source srcset="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $hijo->ID ), 'fondo-md')?>" media="(max-width: 786px)">
        <source srcset="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $hijo->ID ), 'fondo-sm')?>" media="(max-width: 576px)">
        <img src="<?php echo $imagen ?>" alt="Imagen de fondo de producto">
    <?php else : ?>
        <img src="<?php echo get_template_directory_uri() . '/img/imagen.svg'?>" alt="Imagen de fondo de producto">
    <?php endif ?>
    </picture>
</div>
<!-- ./Jumbotron -->