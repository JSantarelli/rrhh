
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="hpn-bloque-titulo margin-bottom">
                <h6 class="prefix magenta">Volanta</h6>
                <h3 class="txt-azul txt-sm"><?php the_title(); ?></h3>
                <hr class="border cyan xxxs separate"></hr>
                <h5 class="txt-xxs txt-negro"><?php the_content(); ?></h5>
            </div>
        <?php endwhile; endif; ?>