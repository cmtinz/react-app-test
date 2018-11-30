<?php get_header()?>
<main >

    <!-- Jumbotron -->
    <div class="home-jumbotron">
        <div class="mensaje-home p-3">
            <img src="<?php echo get_template_directory_uri()?>/img/logo-cgo-blanco.png" class="img-fluid" alt="Logo CGO Blanco">
            <hr>
            <p class="text-white">Cada asegurado es parte de nuestra <i>familia</i></p>
        </div>
        <div class="imagen-home">
            <!-- <img src="<?php echo get_template_directory_uri()?>/img/vista-aerea-santiago.jpg" alt="Vista aérea Santiago"> -->
        </div>
    </div>
    <!-- ./Jumbotron -->

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