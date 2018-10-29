<?php get_header()?>
<main >

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-5">A la hora de tomar un seguro, piense en CDO Corredores de Seguros, para nosotros cada asegurado es parte de nuestra familia.</h1>
        </div>
    </div>
    <!-- ./Jumbotron -->

    <!-- <?php echo do_shortcode( '[icon_slider]' ); ?>
    <div class="container mt-4 mb-4">
        <p>A la hora de tomar un seguro, piense en CDO Corredores de Seguros, para nosotros cada asegurado es parte de nuestra familia.</p>
    </div> -->

    <!-- Grilla -->
    <div class="container mt-4 mb-4">
        <?php $hijos = get_children( array('post_type' => 'productos'));
        if (count($hijos) > 0) : // Determina si el post tiene hijos?>
            <?php get_template_part('grilla') // Llama la función para mostrar grilla de productos ?>
        <?php endif; ?>
    </div>
    <!-- ./Grilla -->
</main>
<?php get_footer(); ?>