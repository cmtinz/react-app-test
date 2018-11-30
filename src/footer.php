<!-- Footer -->
<footer class="bg-light text-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="media">
                    <?php if (has_custom_logo()) {
                        $custom_logo = wp_get_attachment_url(get_theme_mod( 'custom_logo' ));
                        echo "<img src='$custom_logo' class='mr-3 logo-footer'>";
                    } else {
                        echo "<img src=" . get_template_directory_uri() . "/img/logo.svg' class='mr-3 logo-footer' alt=''>";
                    }?>
                    <div class="media-body align-self-center">
                        <a href="https://www.google.com/maps/place/San+Francisco+de+Asís+150,+Vitacura,+Las+Condes,+Región+Metropolitana" class="footer-direccion">
                            San Francisco de Asís 150, of. 605,<br>
                            Vitacura, Santiago.<br>
                        </a>
                        Tel: <a class="footer-tel" href="tel:+56995344792">+56 9 9534 4792</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-md-12 d-flex justify-content-center ml-auto mt-4 mt-xl-0">
                <a href="#" class="d-flex align-items-center mr-4">
                    <img src="<?php echo get_template_directory_uri()?>/img/logo-facebook.svg" class="img-fluid" width="36px" alt="Logo Facebook">
                </a>
                <a href="#" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri()?>/img/logo-instagram.svg" class="img-fluid" width="36px" alt="Logo Instagram">
                </a>
            </div>
        </div>
    </div>
</footer>
<!-- ./Footer -->

<!-- WP Footer -->
<?php wp_footer(); ?>
<!-- ./WP Footer -->

</body>