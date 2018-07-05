<?php global $hijos?>

<div class="row">
<?php foreach($hijos as $hijo) : ?>
    <?php 
    if ( has_post_thumbnail( $hijo->ID ) ) :
        $imagen_a = wp_get_attachment_image_src( get_post_thumbnail_id( $hijo->ID ), 'optional-size' );
        $imagen = $imagen_a[0];
    else :
        $imagen = get_template_directory_uri() . '/img/imagen.svg';
    endif;
     ?>
    <div class="col-md-6 col-sm-12 mt-4">
        <div class="card mb-6">
            <a href="<?php the_permalink( $hijo->ID )?>">
                <img class="card-img-top" src="<?php echo $imagen ?>" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $hijo->post_title ?>
                </h5>
                <p class="card-text">
                    <?php echo get_the_excerpt( $hijo->ID ) ?>
                </p>
                <a href="<?php the_permalink( $hijo->ID )?>" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>