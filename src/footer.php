<!-- Footer -->
<footer class="bg-light text-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="media">
                    <img class="mr-3 logo-footer" src="<?php echo get_template_directory_uri()?>/img/logo-cgo.png" alt="Generic placeholder image">
                    <div class="media-body align-self-center">
                        <h5 class="mt-0">CGO</h5>
                        Corredores de Seguros
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg-12 align-self-center">
                <!-- <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 3</a>
                    </li>
                </ul> -->
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'depth' => 1,
                    'container' => false,
                    'menu_class'     => 'nav justify-content-center',
                    'walker'         => new Bootstrap_NavWalker(),
                    'fallback_cb'    => 'Bootstrap_NavWalker::fallback'
                ));
                ?>
            </div>
            <div class="col-xl-auto col-lg-12 d-flex justify-content-center">
                <a href="#" class=""><img src="<?php echo get_template_directory_uri()?>/img/logo.svg" class="img-fluid" alt=""></a>
                <a href="#" class=""><img src="<?php echo get_template_directory_uri()?>/img/logo.svg" class="img-fluid" alt=""></a>
                <a href="#" class=""><img src="<?php echo get_template_directory_uri()?>/img/logo.svg" class="img-fluid" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<!-- ./Footer -->
<?php wp_footer(); ?>
</body>