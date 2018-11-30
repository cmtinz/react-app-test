<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb pl-0 pr-0">
        <li class="breadcrumb-item"><a href="<?php echo get_home_url()?>">Productos</a></li>
        <?php
        $continuar = true;
        $id = get_the_ID();
        ?>
        <?php while (wp_get_post_parent_id($id) != 0):?>
            <?php $id = wp_get_post_parent_id($id)?>
            <li class="breadcrumb-item"><a href="<?php the_permalink($id)?>"><?php echo get_the_title($id)?></a></li>
        <?php endwhile?>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title()?></li>
    </ol>
</nav>
<!-- ./Breadcrumb -->