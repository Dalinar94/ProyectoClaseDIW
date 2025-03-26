<?php
include("conectar.php");
$link = Conectarse();

$nombre_usuario = trim($_POST['username']);
$nombre = trim($_POST['name']);
$apellidos = trim($_POST['subname']);
$telefono = trim($_POST['phone']);
$email = trim($_POST['email']);
$direccion = trim($_POST['direccion']);
$password = trim($_POST['password']);
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

// Verificar si el correo electrónico ya está registrado
$query = "SELECT * FROM usuarios WHERE email='$email'";
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0) {
    // Redirigir a paginaregistro.php con un mensaje de error
    header('Location: ../paginaregistro.php?mensaje=email_existente');
    exit();
}

// Insertar los datos del nuevo usuario
$query = "INSERT INTO usuarios (nombre_usuario, nombre, apellidos, telefono, email, direccion, contrasenya) 
          VALUES ('$nombre_usuario', '$nombre', '$apellidos', '$telefono', '$email', '$direccion', '$password_hashed')";

if (mysqli_query($link, $query)) {
    // Redirigir a paginaInicio.php con un mensaje de éxito
    header('Location: ../paginaInicio.php?mensaje=registro_exitoso');
    exit();
} else {
    // Redirigir a paginaregistro.php con un mensaje de error
    header('Location: ../paginaregistro.php?mensaje=error_registro');
    exit();
}

mysqli_close($link);
?>

