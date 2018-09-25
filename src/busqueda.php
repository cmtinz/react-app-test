<?php get_header()?>
<main>
        <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Búsqueda</h1>
            <p class="lead"><?php echo get_search_query(); ?></p>
        </div>
    </div>
    <!-- ./Jumbotron -->
    
    <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <a href="<?php get_the_permalink()?>">
            <h2><?php the_title();?></h2>
        </a>
        <?php the_excerpt()();?>
    <?php endwhile;?>
    <?php else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;?>
    </div>
</main>
<?php get_footer(); ?>