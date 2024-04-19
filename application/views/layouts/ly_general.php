<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?php echo $title_for_layout ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body>
    <!-- Navegación
    Aquí incluímos el nav que se encuentra en /includes
    utilizamos dirname para hacernos con el nombre del directorio
    le pasamos "__FILE__" que es la ruta absoluta de "ly_admin"
    y especificamos que el fragmento se encuentra a 2 niveles de distancia
    Esto es: ../includes--- -->
    <?php require_once dirname(__FILE__, 2) . "/includes/menuFrag.php"; ?>
    <!-- Page content-->
    <div class="container">
        <div class="mt-5">
            <?php
            echo $content_for_layout;
            ?>
        </div>
    </div>
    <!-- Footer -->
    <?php require_once dirname(__FILE__, 2) . "/includes/footerFrag.php"; ?>
</body>

</html>