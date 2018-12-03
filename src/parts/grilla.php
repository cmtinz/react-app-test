<?php global $hijos?>
<!-- Grilla de Productos -->
<div class="row grilla-productos">
<?php foreach($hijos as $hijo) : ?>
    <?php 
    if( get_field('imagen_grilla', $hijo->ID) ) {
        $imagen = get_field('imagen_grilla', $hijo->ID);
    } else {
        $imagen = get_template_directory_uri() . '/img/imagen.svg';
    }
    ?>
    <div class="col-md-6 col-sm-12 mt-4 producto">
        <div class="card mb-6">
            <a href="<?php the_permalink( $hijo->ID )?>">
                <img class="card-img-top" src="<?php echo $imagen ?>" alt="Card image cap">
            </a>
            <div class="card-body">
                <a href="<?php the_permalink( $hijo->ID )?>" class="ver-mas">
                    <h5 class="card-title"><?php echo $hijo->post_title ?></h5>
                    <img class="ver-mas-icono" src="<?php echo get_template_directory_uri() . '/img/ver-mas.png'?>" alt="Botón ver más">
                </a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>
<!-- ./Grilla de Productos -->