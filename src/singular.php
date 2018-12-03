<?php get_header()?>
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <?php get_template_part('parts/jumbotron') ?>

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