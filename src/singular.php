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

    <div class="container">
        <?php the_content();?>
    </div>
    <?php endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    ?>
</main>
<?php get_footer(); ?>