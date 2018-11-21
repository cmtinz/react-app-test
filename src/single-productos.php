<?php get_header()?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php the_title();?></h1>
            <nav aria-label="breadcrumb">
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
            </nav>
        </div>
    </div>
    <!-- ./Jumbotron -->

    <div class="container mt-4 mb-4">
        <?php $hijos = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'productos'));
        if (count($hijos) > 0) : // Determina si el post tiene hijos?>
            <?php get_template_part('grilla') // Llama la función para mostrar grilla de productos ?>
        <?php else : ?>
            <?php the_content()?>
            <a class="btn btn-primary" href="<?php echo get_site_url() . "/contacto". '?id=' . get_the_ID()?>" role="button">Cotizar</a>
        <?php endif; ?>
    </div>
    <?php endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    ?>
</main>

<?php get_footer(); ?>