<?php get_header()?>
<main >

    <!-- Jumbotron -->
    <div class="home-jumbotron">
        <div class="container">
            <h1 class="jumbotron-h1">A la hora de tomar un seguro, piense en CGO Corredores de Seguros,<br>para nosotros cada asegurado es parte de nuestra familia.</h1>
        </div>
    </div>
    <!-- ./Jumbotron -->

    <!-- <?php echo do_shortcode( '[icon_slider]' ); ?>
    <div class="container mt-4 mb-4">
        <p>A la hora de tomar un seguro, piense en CDO Corredores de Seguros, para nosotros cada asegurado es parte de nuestra familia.</p>
    </div> -->

    <!-- Grilla -->
    <div class="container mt-4 mb-4">
        <?php $hijos = get_children( array('post_type' => 'productos', 'order' => 'ASC'));
        if (count($hijos) > 0) : // Determina si el post tiene hijos?>
            <?php get_template_part('grilla-home') // Llama la función para mostrar grilla de productos ?>
        <?php endif; ?>
    </div>
    <!-- ./Grilla -->
</main>
<?php get_footer(); ?>