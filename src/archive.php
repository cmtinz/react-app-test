<?php get_header()?>
<main>
    <pre style="display: none"><?php echo $query_string  ?></pre>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php single_cat_title();?></h1>
        </div>
    </div>
    <!-- ./Jumbotron -->
    
    <div class="container mt-4 mb-4">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <?php if ( has_post_thumbnail() ) :
                $imagen_a = wp_get_attachment_image_src( get_post_thumbnail_id(), 'optional-size' );
                $imagen = $imagen_a[0];
            else :
                $imagen = get_template_directory_uri() . '/img/imagen.svg';
            endif;?>
            <div class="col-md-6 col-sm-12 mt-4">
                <div class="card mb-6">
                    <a href="<?php the_permalink()?>">
                        <img class="card-img-top" src="<?php echo $imagen ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php the_title() ?>
                        </h5>
                        <p class="card-text">
                            <?php echo get_the_excerpt() ?>
                        </p>
                        <a href="<?php the_permalink()?>" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <?php endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
            ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>