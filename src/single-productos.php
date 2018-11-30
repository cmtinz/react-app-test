<?php get_header()?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <?php get_template_part('parts/jumbotron') ?>

    <div <?php post_class(array('container', 'my-4'))?>>
        <?php $hijos = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'productos'));
        if (count($hijos) > 0) : // Determina si el post tiene hijos?>
            <!-- Contenido del Post -->
            <?php the_content()?>
            <!-- ./Contenido del Post -->
            <!-- Grilla de Productos -->
            <?php get_template_part('parts/grilla') // Llama la función para mostrar grilla de productos ?>
            <!-- ./Grilla de Productos -->
        <?php else : ?>
            <?php the_content()?>
            <?php if (get_the_ID() != 31) {
                $img_cotizar = get_template_directory_uri() . "/img/boton-cotizar.png";
                $link_cotizar = get_site_url() . "/cotizador". '?id=' . get_the_ID();
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