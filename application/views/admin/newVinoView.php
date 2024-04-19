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

            <form role="form" action="/vino_shop/index.php/nuevo_vino/submit" method="post">

                <div class="form-group row">
                    <label for="nombre" class="col-lg-2 col-form-label">Nombre</label>

                    <div class="col-lg-8 text-lett">
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="region" class="col-lg-2 col-form-label">Región</label>

                    <div class="col-lg-8 text-lett">
                        <select class="form-control" name="region" id="region">
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
                        <select class="form-control" name="tipo" id="tipo">
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
                        <select class="form-control" name="bodega" id="bodega">
                            <?php
                            foreach ($lista_bodegas as $bodega) {
                                echo "<option value=" . $bodega['Id'] . ">" . $bodega['Nombre'] . "</option>";
                            }
                            ?>

                        </select>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="precio" class="col-lg-2 col-form-label">Precio</label>

                    <div class="col-lg-2 text-lett">
                        <input type="number" class="form-control" id="precio" name="precio">
                    </div>

                </div>

                <br><br>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>

            <br><br>
        </div>
    </div>

</div>