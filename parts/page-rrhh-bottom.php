<div class="hpn-bloque-titulo margin-bottom">
    <h6 class="prefix magenta">Vias de contacto</h6>
    <h4 class="txt-azul txt-xs">Concursos</h4>
    <hr class="border cyan xxxs separate"></hr>
</div>

<div class="hpn-list-container">
    <?php query_posts ('category_name=concursos&posts_per_page=15');
        if ( have_posts() ) : while ( have_posts()) : the_post();
    ?>
    <?php $post_date = get_the_date( 'j' ); ?>
    <?php $post_date_month = get_the_date( 'M' ); ?>
    
    <div class="hpn-list-item">
        <div class="hpn-bloque-fecha">
            <h3 class="list-item-fecha"><?php echo($post_date)?></h3>
            <h5 class="list-item-dia"><?php echo($post_date_month) ?></h5>
        </div>
        <div class="hpn-item-bloque-titulo">
            <div class="hpn-badge outline magenta"><?php the_category(', ') ?></div>
            <div class="contenedor-titulo-sub">
                <h3 class="list-item-titulo"><?php the_title();?></h3>
                <h5 class="list-item-subtitulo"><?php the_excerpt(); ?></h5>
            </div>
        </div>
    </div>
    <?php endwhile; else:?>
        <p><?php _e('No hay concursos para mostrar'); ?></p>
    <?php endif; ?>
    
</div>