<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	  <?php the_custom_logo();?>
    <?php bloginfo( 'name' ); ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <?php
      wp_nav_menu( array(
        'theme_location' => 'header-menu',
        'menu_id'        => 'primary-menu',
        'depth' => 2,
        'container' => false,
        'menu_class'     => 'navbar-nav ml-auto',
        'walker'         => new Bootstrap_NavWalker(),
        'fallback_cb'    => 'Bootstrap_NavWalker::fallback'
      ) );
    ?>    

    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
</header>