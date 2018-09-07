
            <!-- Botonera documentos -->
            <div class="doc-tab">
                <input checked="checked" id="doc1" type="radio" name="algo" />
                <input id="doc2" type="radio" name="algo" />
                <input id="doc3" type="radio" name="algo" />
                <input id="doc4" type="radio" name="algo" />
                <input id="doc5" type="radio" name="algo" />
                    <nav class="hpn-nav-cards">
                        <!-- Bloque texto -->
                        <div class="hpn-bloque-titulo margin-bottom">
                            <h6 class="prefix magenta">Volanta</h6>
                            <h3 class="txt-azul txt-sm lighter">Documentos</h3>
                            <hr class="border cyan xxxs separate"></hr>
                            <!-- <h5 class="txt-xxs txt-negro">Aqui puede buscar documentos....</h5> -->
                        </div>
                    
                        <div class="hpn-nav-subcontainer">
                            
                            <!-- Filtros -->
                            <ul class="hpn-filter-container">
                                <li class="hpn-element-txt doc1">
                                    <label for="doc1" class="hpn-tab active">Todos</label>
                                </li>
                                <li class="hpn-element-txt doc2">
                                    <label for="doc2" class="hpn-tab active">Formularios</label>
                                </li>
                                <li class="hpn-element-txt doc3">
                                    <label for="doc3" class="hpn-tab">Planillas concursos</label>
                                </li>
                                <li class="hpn-element-txt doc4">
                                    <label for="doc4" class="hpn-tab">Normas</label>
                                </li>
                            </ul>

                            <!-- Buscador -->
                            <input class="rounded w-lg h-sm" type="text" id="myInput" onkeyup="myFunction()" placeholder="Comience a escribir para filtrar en la categoria" title="Type in a name">     
                        </div>
                    </nav>
                    <section>
                        <div class="doc1">
                            <ul id="myUL" class="hpn-content-card">
                                <?php get_template_part('parts/part-rrhh-card');?>
                            </ul>
                        </div>
                        <div class="doc2">
                            <ul id="myUL" class="hpn-content-card">
                                <?php get_template_part('parts/part-rrhh-formularios');?>
                            </ul>
                        </div>
                        <div class="doc3">
                            <ul id="myUL" class="hpn-content-card">
                                <?php get_template_part('parts/part-rrhh-concursos');?>
                            </ul>
                        </div>
                        <div class="doc4">
                            <ul id="myUL" class="hpn-content-card">
                                <?php get_template_part('parts/part-rrhh-planillas');?>
                            </ul>
                        </div>
                    <section>
                </div>
                <!-- Filtro Input -->
                <script>
                    function myFunction() {
                        var input, filter, ul, li, a, i;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        ul = document.getElementById("myUL");
                        li = ul.getElementsByTagName("li");
                        for (i = 0; i < li.length; i++) {
                            a = li[i].getElementsByTagName("a")[0];
                            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                li[i].style.display = "";
                            } else {
                                li[i].style.display = "none";
                            }
                        }
                    }
                </script>