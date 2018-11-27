<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
    <title><?php echo wp_get_document_title() ?></title>
</head>

<body <?php body_class(); ?>>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php if (has_custom_logo()) {
            $custom_logo = wp_get_attachment_url(get_theme_mod( 'custom_logo' ));
            //echo wp_get_attachment_image_src($custom_logo_id);
            echo "<img src='$custom_logo' class='custom-logo'>";
        } else {
            bloginfo( 'name' );
        }?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'menu_id'        => 'primary-menu',
                'depth' => 3,
                'container' => false,
                'menu_class'     => 'navbar-nav ml-auto',
                'walker'         => new Bootstrap_NavWalker(),
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback'
            ) );
            ?>
            <form class="form-inline my-2 my-lg-0 ml-lg-3" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="s">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchsubmit" value="Buscar">Buscar</button>
            </form>
        </div>
    </div>
</nav>
<!-- ./Header -->