<?php get_header()?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <!-- Jumbotron -->
    <div class="jumbotron-producto">
        <div class="container">
            <?php
            if ( has_post_thumbnail() ) :
                $imagen_a = wp_get_attachment_image_src( get_post_thumbnail_id( $hijo->ID ), 'optional-size' );
                $imagen = $imagen_a[0];
            else :
                $imagen = get_template_directory_uri() . '/img/imagen.svg';
            endif;
            ?>
            <h1><?php the_title();?></h1>
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0 pr-0">
                    <li class="breadcrumb-item"><a href="<?php echo get_home_url()?>">Productos</a></li>
                    <?php
                    $continuar = true;
                    $id = get_the_ID();
                    ?>
                    <?php while (wp_get_post_parent_id($id) != 0):?>
                        <?php $id = wp_get_post_parent_id($id)?>
                        <li class="breadcrumb-item"><a href="<?php the_permalink($id)?>"><?php echo get_the_title($id)?></a></li>
                    <?php endwhile?>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title()?></li>
                </ol>
            </nav> -->
        </div>
        <img class="fondo" src="<?php echo $imagen?>" alt="Imagen de fondo de producto">
    </div>
    <!-- ./Jumbotron -->

    <div <?php post_class(array('container', 'my-4'))?>>
        <?php $hijos = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'productos'));
        if (count($hijos) > 0) : // Determina si el post tiene hijos?>
            <!-- Contenido del Post -->
            <?php the_content()?>
            <!-- ./Contenido del Post -->
            <!-- Grilla de Productos -->
            <?php get_template_part('grilla') // Llama la función para mostrar grilla de productos ?>
            <!-- ./Grilla de Productos -->
        <?php else : ?>
            <?php the_content()?>
            <?php if (get_the_ID() != 31) {
                $img_cotizar = get_template_directory_uri() . "/img/boton-cotizar.png";
                $link_cotizar = get_site_url() . "/contacto". '?id=' . get_the_ID();
            } else {
                $img_cotizar = get_template_directory_uri() . "/img/boton-simular.png";
                $link_cotizar = get_site_url() . "/simulador";
                
            }?>
            <a class="boton-cotizar d-flex mt-4" href="<?php echo $link_cotizar?>" role="button">
                <img src="<?php echo $img_cotizar?>" alt="Cotizar">
            </a>
        <?php endif; ?>
    </div>
    <?php endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    ?>
</main>

<?php get_footer(); ?>