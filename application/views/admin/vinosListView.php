<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-lett">
            <h1 class="mt-5">Listado de vinos</h1>
            </ul>
        </div>
    </div>
    <br><br>
    <a href="/vinos_shop/index.php/admin/nuevo_vino" class="btn btn-primary">Nuevo vino</a>
    <br><br>
    <div class="row">

    <?php // debug($lista_vinos); ?>

        <div class="col-lg-12 text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if (!empty($lista_vinos)) {
                        foreach ($lista_vinos as $vino) {
                            echo '<tr>
                    <th scope="row">' . $vino['Id'] . '</th>
                    <td>' . $vino['Nombre'] . '</td>
                    <td>' . $vino['Precio'] . '</td>
                    <td>' . $vino['Tipo'] . '</td>
                    <td><a href="/vinos_shop/index.php/edit/' . $vino['Id'] . '"><img src="http://[::1]/vinos_shop/images/edit.png" width=20px></a></td>
                    <td><a href="#" OnClick="delete_vino(' . $vino['Id'] . ')"><img src="http://[::1]/vinos_shop/images/delete_2.png"  width=20px></a></td>
                  </tr>';
                        }
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </div>