<?php $formulario = new WP_Query(array( 'page_id' => 6942 ));
    if ($formulario->have_posts()) : while ($formulario->have_posts()): $formulario->the_post();
    ?>
    <div class="hpn-bloque-titulo margin-bottom">
        <h6 class="prefix magenta">Vias de contacto</h6>
        <h4 class="txt-azul txt-xs"><?php the_title(); ?></h4>
        <hr class="border cyan xxs separate">
        <h5 class="txt-xxs txt-negro"><?php the_content(); ?></h5>
    </div>
    <?php endwhile; endif; ?>