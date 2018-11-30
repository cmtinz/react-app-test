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
                        San Francisco de Asís 150, of. 605,<br>
                        Vitacura, Santiago.<br>
                        Tel: <a class="footer-tel" href="tel:+5600000000">+56 X XXXX XXXX</a>
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
<?php wp_footer(); ?>
</body>