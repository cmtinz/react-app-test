<?php acf_form_head(); ?>
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

    <div class="container mt-4 mb-4">
        <?php
        acf_form(array(
            'post_id'		=> 'new_post',
            'post_title'	=> true,
            'post_content'	=> true,
            'field_groups' => array('108'),
            'new_post'		=> array(
                'post_type'		=> 'cotizaciones',
                'post_status'	=> 'publish'
            ),
            'return'		=> home_url('pagina-de-ejemplo'),
            'submit_value'	=> 'Send'
        ));
        ?>
    <?php endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    ?>
</main>

<?php get_footer(); ?>