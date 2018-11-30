<?php get_header()?>
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <!-- Jumbotron -->
    <!-- <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php the_title();?></h1>
        </div>
    </div> -->
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

    <div <?php post_class(array('container', 'mt-4'))?>>
        <!-- Contenido del Post -->
        <?php the_content();?>
        <!-- ./Contenido del Post -->
    </div>
    <?php endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    ?>
</main>
<?php get_footer(); ?>