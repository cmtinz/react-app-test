<!-- Footer -->
<footer class="bg-light text-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <div class="media mr-2">
                    <?php if (has_custom_logo()) {
                        $custom_logo = wp_get_attachment_url(get_theme_mod( 'custom_logo' ));
                        echo "<img src='$custom_logo' class='mr-3 logo-footer'>";
                    } else {
                        echo "<img src=" . get_template_directory_uri() . "/img/logo.svg' class='mr-3 logo-footer' alt=''>";
                    }?>
                    <div class="media-body align-self-center">
                        <a href="<?php echo get_theme_mod('footer_direccion_url') ?>" class="footer-direccion">
                            <?php echo get_theme_mod('footer_direccion') ?><br>
                        </a>
                        Tel: <a class="footer-tel" href="tel:<?php echo str_replace(' ', '', get_theme_mod('footer_telefono'))?>"><?php echo get_theme_mod('footer_telefono') ?></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-md-12 d-flex justify-content-center ml-auto mt-4 mt-xl-0">
                <?php if (get_theme_mod('footer_facebook') != "") :?>
                    <a href="<?php echo get_theme_mod('footer_facebook') ?>" class="d-flex align-items-center mr-4">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo-facebook.svg" class="img-fluid" width="36px" alt="Logo Facebook">
                    </a>
                <?php endif ?>
                <?php if (get_theme_mod('footer_instagram') != "") :?>
                    <a href="<?php echo get_theme_mod('footer_instagram') ?>" class="d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo-instagram.svg" class="img-fluid" width="36px" alt="Logo Instagram">
                    </a>
                <?php endif ?>
                <?php if (get_theme_mod('footer_linkedin') != "") :?>
                    <a href="<?php echo get_theme_mod('footer_linkedin') ?>" class="d-flex align-items-center ml-4">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo-linkedin.svg" class="img-fluid" width="36px" alt="Logo LinkedIn">
                    </a>
                <?php endif ?>
            </div>
        </div>
    </div>
</footer>
<!-- ./Footer -->

<!-- WP Footer -->
<?php wp_footer(); ?>
<!-- ./WP Footer -->

</body>