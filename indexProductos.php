<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="icon" href="logo/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css" />
    <!--FAVICON-->
    <link rel="icon" href="logo/logo.svg" type="image/x-icon">
</head>

<body>
<?php include('php/header.php'); ?>
    <?php include('php/menuInicio.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-m-10 col-l-12">
                <?php 
                // Pasar el parámetro de búsqueda a productos.php
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                include('php/productos.php'); ?>
            </div>
        </div>
    </div>

    <?php include('php/footer.php'); ?>

    <script src="js/cookie.js"></script>
</body>

</html>