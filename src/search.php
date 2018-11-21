<?php get_header()?>



<main>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Búsqueda</h1>
            <ol class="breadcrumb pl-0 pr-0">
                <li class="breadcrumb-item"><a href="<?php echo get_home_url()?>">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Búsqueda: <span class="font-italic"><?php echo get_search_query()?></span></li>
            </ol>
        </div>
    </div>
    <!-- ./Jumbotron -->
    
    <div class="container mt-4 mb-4">
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        echo "<article class='busqueda-resultado'>";
        echo "<h2><a href='". get_the_permalink() . "'>";
        the_title();
        echo "</a></h2>";
        the_excerpt();
        echo "</article>";
        endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
    ?>
    </div>
</main>
<?php get_footer(); ?>

