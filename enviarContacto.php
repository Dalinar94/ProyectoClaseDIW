<?php
include('php/conectar.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);
    $mensaje = trim($_POST['mensaje']);

    $errores = [];

   // Validar nombre
   if (empty($nombre)) {
    $errores[] = "El nombre es obligatorio.";
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $nombre)) {
    $errores[] = "El nombre solo puede contener letras y espacios.";
    }

    // Validar teléfono
    if (empty($telefono)) {
        $errores[] = "El teléfono es obligatorio.";
    } elseif (!preg_match('/^[0-9]{9}$/', $telefono)) {
        $errores[] = "El teléfono debe contener 9 dígitos.";
    }

    // Validar email
    if (empty($email)) {
        $errores[] = "El correo electrónico es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no es válido.";
    }

    // Validar mensaje
    if (empty($mensaje)) {
        $errores[] = "El mensaje es obligatorio.";
    }

    if (empty($errores)) {
        $link = Conectarse();

        $query = "INSERT INTO contacto (nombre, telefono, email, mensaje) VALUES ('$nombre', '$telefono', '$email', '$mensaje')";

        if (mysqli_query($link, $query)) {
            $_SESSION['mensaje_exito'] = "Mensaje enviado correctamente.";
            header('Location: paginaInicio.php');
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($link);
        }

        mysqli_close($link);
    } else {
        // Redirigir de vuelta al formulario con los errores
        $_SESSION['errores'] = $errores;
        header('Location: paginaContacto.php');
        exit();
    }
}
?>