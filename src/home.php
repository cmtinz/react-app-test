<?php get_header()?>
<main class="container-fluid">
    <?php echo do_shortcode( '[icon_slider]' ); ?>
    <div class="container mt-4 mb-4">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            echo "<article>";
            echo "<h2><a href='". get_the_permalink() . "'>";
            the_title();
            echo "</a></h2>";
            the_content();
            echo "</article>";
            endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>