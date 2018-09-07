<style>
    /* @import url("hpn/wp-content/themes/hueman/assets/front/css/rrhh-main.css"); */
</style>
<body rrhh>
    <main class="pc-tab">
        <input checked="checked" id="tab1" type="radio" name="pct" />
        <input id="tab2" type="radio" name="pct" />
            <nav class="nv">
                <ul class="hpn-tab-container">
                <li class="hpn-element-txt tab1">
                    <label for="tab1" src="" alt="" class="hpn-icon mdi mdi-home blanco mdi-24px"></label>
                    <label for="tab1" class="hpn-tab active">
                        Principal
                    </label>
                </li>
                <li class="hpn-element-txt tab2">
                    <label for="tab2" src="" alt="" class="hpn-icon mdi mdi-file-document blanco mdi-24px"></label>
                    <label for="tab2" class="hpn-tab">
                        Documentos
                    </label>
                </li>
                </ul>
                <div class="container-input-btn">    
                    <input type="search" class="rounded-left w-xl h-sm"></input>
                    <button class="rounded-right magenta h-sm mdi mdi-file-find mdi-18px"></button>
                </div>
            </nav>
        <section>
            <div class="tab1 hpn-template">
                <article class="mn">
                    <?php get_template_part('parts/page-rrhh-main'); ?>
                </article>

                <article class="faq">
                    <?php get_template_part('parts/page-rrhh-faq'); ?>
                </article>

                <article class="bottom">
                    <?php get_template_part('parts/page-rrhh-bottom'); ?>
                </article>

                <article class="form">
                    <?php get_template_part('parts/page-rrhh-form');?>
                </article>
            </div>
            <div class="tab2">
                  <?php get_template_part('parts/page-rrhh-cards');?>
            </div>
        </section>
    </main>

    <?php if ( hu_is_checked('page-comments') ) { comments_template('/comments.php',true); } ?>
</body>
