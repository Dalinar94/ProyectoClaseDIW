<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/styles.css" />
    <!--FAVICON-->
    <link rel="icon" href="logo/logo.svg" type="image/x-icon"> 
</head>

<body>
    <?php include('php/header.php'); ?>
    <?php include('php/menuInicio.php'); ?>

    <?php if (isset($_SESSION['mensaje_exito'])): ?>
        <style>
           .mensaje-exito {
                background-color: #dff0d8;
                color: #3c763d;
                padding: 15px;
                margin: 20px;
                border: 1px solid #d6e9c6;
                border-radius: 4px;
                text-align: center;
            }
            .mensaje-exito button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 4px;
            }
        </style>
        <div id="mensajeExito" class="mensaje-exito">
            <p><?php echo $_SESSION['mensaje_exito']; ?></p>
            <button onclick="document.getElementById('mensajeExito').style.display='none'">Aceptar</button>
        </div>
        <?php unset($_SESSION['mensaje_exito']); ?>
    <?php endif; ?>

    <?php if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'registro_exitoso'): ?>
        <style>
           .mensaje-registro {
                background-color: #dff0d8;
                color: #3c763d;
                padding: 15px;
                margin: 20px;
                border: 1px solid #d6e9c6;
                border-radius: 4px;
                text-align: center;
            }
            .mensaje-registro button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 4px;
            }
        </style>
        <div id="mensajeRegistro" class="mensaje-registro">
            <p>Registro exitoso. Bienvenido!</p>
            <button onclick="document.getElementById('mensajeRegistro').style.display='none'">Aceptar</button>
        </div>
    <?php endif; ?>

    <?php include('php/video.php'); ?>
    <?php include('php/imagenesPaginaPrincipal.php'); ?>
    <?php include('php/footer.php'); ?>

    <!--Banner de Cookies-->
    <div id="cookie-banner" class="show">
        <p>Utilizamos cookies para mejorar tu experiencia. Al continuar navegando, aceptas su uso. 
        <a href="paginaCookies.php">Configurar cookies</a></p>
        <button id="accept-all">Aceptar todas</button>
        <button id="accept-necessary">Aceptar solo las necesarias</button>
    </div>
    
    <script src="js/cookie.js"></script>
</body>

</html>