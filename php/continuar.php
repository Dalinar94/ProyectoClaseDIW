<?php
session_start();

$email1 = trim($_POST['email']);
$original = trim($_POST['clave']);

include_once("conectar.php");
$link = Conectarse();

$result = mysqli_query($link, "SELECT nombre_usuario, contrasenya, foto_perfil FROM usuarios WHERE email='$email1';");

if ($result && mysqli_num_rows($result) > 0) {
    $result2 = mysqli_fetch_array($result);
    $codificado = $result2['contrasenya'];

    if (password_verify($original, $codificado)) {
        $_SESSION['usuario'] = $result2['nombre_usuario'];
        $_SESSION['foto_perfil'] = $result2['foto_perfil'];
        $_SESSION['mensaje_exito'] = "Inicio de sesión correcto.";
        header('Location: ../paginaInicio.php');
        exit();
    } else {
        $_SESSION['mensaje_error'] = "Correo electrónico o contraseña incorrectos. Por favor, inténtelo de nuevo.";
        header('Location: ../paginalogin.php');
        exit();
    }
} else {
    $_SESSION['mensaje_error'] = "Correo electrónico o contraseña incorrectos. Por favor, inténtelo de nuevo.";
    header('Location: ../paginalogin.php');
    exit();
}

mysqli_close($link);
?>