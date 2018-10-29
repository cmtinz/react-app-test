<?php get_header()?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php the_title();?></h1>
        </div>
    </div>
    <!-- ./Jumbotron -->

    <div class="container mt-4 mb-4">
        <?php $hijos = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'productos'));
        if (count($hijos) > 0) : // Determina si el post tiene hijos?>
            <?php get_template_part('grilla') // Llama la función para mostrar grilla de productos ?>
        <?php else : ?>
            <?php the_content()?>
        <?php endif; ?>
    </div>
    <?php endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    ?>
</main>

<?php get_footer(); ?>