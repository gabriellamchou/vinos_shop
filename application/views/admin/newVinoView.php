<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-lett">
            <h2 class="mt-5">Nuevo vino</h2>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-12 text-left">

            <form role="form" action="/vinos_shop/index.php/admin/nuevo_vino/submit" method="post">

                <div class="form-group row">
                    <label for="nombre" class="col-lg-2 col-form-label">Nombre</label>

                    <div class="col-lg-8 text-lett">
                        <input type="text" class="form-control" id="nombre" name="Nombre">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="anada" class="col-lg-2 col-form-label">Añada</label>

                    <div class="col-lg-8 text-lett">
                        <input type="number" class="form-control" id="anada" name="Anada">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="region" class="col-lg-2 col-form-label">Región</label>

                    <div class="col-lg-8 text-lett">
                        <select class="form-control" name="IdRegion" id="region">
                            <?php
                            foreach ($lista_regiones as $region) {
                                echo "<option value=" . $region['Id'] . ">" . $region['Nombre'] . "</option>";
                            }
                            ?>

                        </select>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="tipo" class="col-lg-2 col-form-label">Tipo</label>

                    <div class="col-lg-8 text-lett">
                        <select class="form-control" name="IdTipoVino" id="tipo">
                            <?php
                            foreach ($lista_tipos as $tipo) {
                                echo "<option value=" . $tipo['Id'] . ">" . $tipo['Nombre'] . "</option>";
                            }
                            ?>

                        </select>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="bodega" class="col-lg-2 col-form-label">Bodega</label>

                    <div class="col-lg-8 text-lett">
                        <select class="form-control" name="IdBodega" id="bodega">
                            <?php
                            foreach ($lista_bodegas as $bodega) {
                                echo "<option value=" . $bodega['Id'] . ">" . $bodega['Nombre'] . "</option>";
                            }
                            ?>

                        </select>
                    </div>

                </div>
                
                <div class="form-group row">
                    <label for="uva" class="col-lg-2 col-form-label">Uva</label>

                    <div class="col-lg-4 text-lett">
                        <select class="form-control" name="IdUva" id="uva">
                            <?php
                            foreach ($lista_uvas as $uva) {
                                echo "<option value=" . $uva['Id'] . ">" . $uva['Nombre'] . "</option>";
                            }
                            ?>

                        </select>
                    </div>
                    <label for="porcentaje" class="col-lg-2 col-form-label">Porcentaje</label>
                    <div class="col-lg-2 text-lett">
                        <input type="number" class="form-control" id="porcentaje" name="porcentaje">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="breve-desc" class="col-lg-2 col-form-label">Descripción</label>

                    <div class="col-lg-8 text-lett">
                        <textarea class="form-control" rows="3" id="breve-desc" name="BreveDescripcion"></textarea>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="alergenos" class="col-lg-2 col-form-label">Alérgenos</label>

                    <div class="col-lg-8 text-lett">
                        <input type="text" class="form-control" id="alergenos" name="Alergenos">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="graduacion" class="col-lg-2 col-form-label">Graduación</label>

                    <div class="col-lg-8 text-lett">
                        <input type="number" class="form-control" id="graduacion" name="Graduacion">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="precio" class="col-lg-2 col-form-label">Precio</label>

                    <div class="col-lg-4 text-lett">
                        <input type="number" class="form-control" id="precio" name="Precio">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="imagen" class="col-lg-2 col-form-label">Imágenes</label>

                    <div class="col-lg-8 text-lett">
                        <input type="text" class="form-control" id="imagen" name="imagen">
                    </div>

                </div>

                <br><br>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>

            <br><br>
        </div>
    </div>

</div>