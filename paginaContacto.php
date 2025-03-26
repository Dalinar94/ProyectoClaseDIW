<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" href="logo/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css" />
    <!--FAVICON-->
    <link rel="icon" href="logo/logo.svg" type="image/x-icon">
</head>

<body class="body-contacto">
    <?php include('php/header.php'); ?>
    <?php include('php/menuInicio.php'); ?>

    <div class="container-form" id="formContainer">
        <h2>Formulario de Contacto</h2>
        
        <?php
        if (isset($_SESSION['errores'])) {
            echo '<div class="errores">';
            foreach ($_SESSION['errores'] as $error) {
                echo '<p style="color: red;">' . htmlspecialchars($error) . '</p>';
            }
            echo '</div>';
            unset($_SESSION['errores']);
        } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'exito') {
            echo '<p style="color: green;">Formulario enviado correctamente.</p>';
        }
        ?>

        <form id="contactForm" action="enviarContacto.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Introduzca su nombre" required>
            </div>
            
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Introduzca su teléfono" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Introduzca su email" required>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" placeholder="Escriba un mensaje..." required></textarea>
            </div>

            <div class="caja-politicas">
                <input type="checkbox" id="terms" name="caja-politicas" required> He leído los <a href="paginaterminos.php">Términos y condiciones</a>
            </div>

            <button id="boton" type="submit">Enviar</button>
            <button id="reset" type="reset">Restablecer</button>
        </form>
    </div>

    <?php include('php/footer.php'); ?>

</body>
</html>