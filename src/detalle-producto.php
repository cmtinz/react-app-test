<?php $fields = get_field_objects(); ?>

<!-- Descripción -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <div id="slider-home" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- <div class="carousel-item active">
                        <img class="d-block w-100" src="img/slide-1.svg" alt="Slide">
                    </div> -->
                    <?php $i = 0;
                    foreach ($fields as $field) :
                    if (preg_match('/^imagen_/', $field['name']) == 1) :
                    $i += 1;?>
                    <div class="carousel-item <?php echo $i == 1? 'active' : ''?>">
                        <img class="d-block w-100" src="<?php echo $field['value']['url'] ?>" alt="<?php echo $field['label']?>">
                    </div>
                    <?php endif; endforeach;?>
                </div>
                <a class="carousel-control-prev" href="#slider-home" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#slider-home" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
        <div class="col-6">
            <?php the_field('descripcion'); ?>
        </div>
    </div>
</div>
<!-- ./Descripción -->

<?php 
    echo '<pre style="display: none">';
        print_r( $fields);
    echo '</pre>';
?>

<!-- Tabla -->
<div class="container">
    <h3 class="text-center justify-content-center mb-1 mt-4 mb-4">Especifaciones</h3>
    <div class="row justify-content-center">
        <div class="col-8">
            <table class="table">
                <tr>
                    <td>Propiedad</td>
                    <td>Valor</td>
                </tr>
                <?php // Recupera lista de detalles de producto
                foreach ($fields as $field) : 
                if ($field['field_group'] == 100) :?>
                <tr>
                    <td><?php echo $field['label'] ?></td>
                    <td><?php echo $field['value'] ?></td>
                </tr>
                <?php endif; endforeach;?>
            </table>
        </div>
    </div>
</div>
<!-- ./Tabla -->

<!-- Cotiza -->
<?php 
    $fecha_oferta = get_field( "precio_oferta_fecha" );
    $oferta = strtotime($fecha_oferta) + 86400 - time() > 0? get_field( "precio_oferta" ) : false;
?>
<div class="container">
    <div class="row justify-content-center m-4">
        <div class="col-2 <?php echo $oferta == true? 'hay-oferta': ''?>">
            <div class="precio-normal text-center">
                $ <?php echo number_format_i18n(get_field('precio')) ?>
            </div>
            <?php if($oferta) :?>
            <div class="precio-oferta text-center">
                $ <?php echo number_format_i18n($oferta) ?>
            </div>
            <div class="fecha-oferta text-center">
                Válido hasta <?php echo date("j/n/Y", strtotime($fecha_oferta)) ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-2 d-flex align-items-center justify-content-center">
            <a class="btn btn-primary mt-4" href=" <?php echo get_permalink( get_page_by_title( 'Cotiza' ) ) . '?producto=' . $name?>" role="button">Cotiza</a>
        </div>
    </div>
</div>
<!-- ./Cotiza -->