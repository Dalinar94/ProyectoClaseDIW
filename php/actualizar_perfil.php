<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../paginalogin.php');
    exit();
}

include("conectar.php");
$link = Conectarse();

$nombre_usuario = $_POST['nombre_usuario'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$apellidos = $_POST['apellidos'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$email = $_POST['email'] ?? '';
$direccion = $_POST['direccion'] ?? '';

// Validar que todos los campos requeridos están presentes
if (empty($nombre_usuario) || empty($nombre) || empty($apellidos) || empty($telefono) || empty($email) || empty($direccion)) {
    $_SESSION['mensaje_error'] = "Todos los campos son obligatorios.";
    header('Location: ../perfil.php');
    exit();
}

// Manejar la subida de la foto de perfil
if (isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] == 0) {
    $foto_perfil = $_FILES['foto_perfil']['name'];
    $foto_perfil_tmp = $_FILES['foto_perfil']['tmp_name'];
    $foto_perfil_destino = "../uploads/" . $foto_perfil;
    if (move_uploaded_file($foto_perfil_tmp, $foto_perfil_destino)) {
        $query = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', telefono='$telefono', email='$email', direccion='$direccion', foto_perfil='$foto_perfil' WHERE nombre_usuario='$nombre_usuario'";
    } else {
        $_SESSION['mensaje_error'] = "Error al subir la foto de perfil.";
        header('Location: ../perfil.php');
        exit();
    }
} else {
    $query = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', telefono='$telefono', email='$email', direccion='$direccion' WHERE nombre_usuario='$nombre_usuario'";
}

$result = mysqli_query($link, $query);

if ($result) {
    $_SESSION['mensaje_exito'] = "Datos actualizados correctamente.";
} else {
    $_SESSION['mensaje_error'] = "Error al actualizar los datos: " . mysqli_error($link);
}

mysqli_close($link);

header('Location: ../perfil.php');
exit();
?>