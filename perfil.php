<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: paginalogin.php');
    exit();
}

include("php/conectar.php");
$link = Conectarse();

$usuario = $_SESSION['usuario'];
$result = mysqli_query($link, "SELECT nombre_usuario, nombre, apellidos, telefono, email, direccion, foto_perfil FROM usuarios WHERE nombre_usuario='$usuario'");
$datos_usuario = mysqli_fetch_assoc($result);

mysqli_close($link);

if (!$datos_usuario) {
    echo "Error: No se encontraron datos para el usuario.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu perfil</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/perfil.css" />
    <script>
        function toggleEditMode() {
            var viewMode = document.getElementById('view-mode');
            var editMode = document.getElementById('edit-mode');
            if (viewMode.style.display === 'none') {
                viewMode.style.display = 'block';
                editMode.style.display = 'none';
            } else {
                viewMode.style.display = 'none';
                editMode.style.display = 'block';
            }
        }

        function validarFormulario() {
            var nombre = document.forms["editForm"]["nombre"].value;
            var apellidos = document.forms["editForm"]["apellidos"].value;
            var telefono = document.forms["editForm"]["telefono"].value;
            var email = document.forms["editForm"]["email"].value;
            var regexNombre = /^[a-zA-Z\s]+$/;
            var regexTelefono = /^[0-9]+$/;
            var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var valid = true;

            if (!regexNombre.test(nombre)) {
                document.getElementById('nombre-error').innerText = "El nombre no puede contener caracteres especiales.";
                valid = false;
            } else {
                document.getElementById('nombre-error').innerText = "";
            }

            if (!regexNombre.test(apellidos)) {
                document.getElementById('apellidos-error').innerText = "Los apellidos no pueden contener caracteres especiales.";
                valid = false;
            } else {
                document.getElementById('apellidos-error').innerText = "";
            }

            if (!regexTelefono.test(telefono)) {
                document.getElementById('telefono-error').innerText = "El teléfono solo puede contener números.";
                valid = false;
            } else {
                document.getElementById('telefono-error').innerText = "";
            }

            if (!regexEmail.test(email)) {
                document.getElementById('email-error').innerText = "El correo electrónico debe tener un formato válido.";
                valid = false;
            } else {
                document.getElementById('email-error').innerText = "";
            }

            return valid;
        }
    </script>
</head>
<body>
    <?php include('php/header.php'); ?>
    <?php include('php/menuInicio.php'); ?>

    <div class="container-perfil">
        <h2>Perfil de Usuario</h2>
        <div id="view-mode">
            <div class="foto-perfil">
            <img alt="Foto de Perfil" src="<?php echo htmlspecialchars($datos_usuario['foto_perfil']); ?>" width="55%">
            </div>
            <p><strong>Nombre de usuario:</strong> <?php echo htmlspecialchars($datos_usuario['nombre_usuario']); ?></p>
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($datos_usuario['nombre']); ?></p>
            <p><strong>Apellidos:</strong> <?php echo htmlspecialchars($datos_usuario['apellidos']); ?></p>
            <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($datos_usuario['telefono']); ?></p>
            <p><strong>Correo electrónico:</strong> <?php echo htmlspecialchars($datos_usuario['email']); ?></p>
            <p><strong>Dirección:</strong> <?php echo htmlspecialchars($datos_usuario['direccion']); ?></p>
            <button onclick="toggleEditMode()">Editar</button>
        </div>
        <div id="edit-mode" style="display: none;">
            <div class="edit-container">
                <form name="editForm" action="php/actualizar_perfil.php" method="POST" onsubmit="return validarFormulario()" enctype="multipart/form-data">
                    <input type="hidden" name="nombre_usuario" value="<?php echo htmlspecialchars($datos_usuario['nombre_usuario']); ?>">
                    <p><strong>Nombre de usuario:</strong> <?php echo htmlspecialchars($datos_usuario['nombre_usuario']); ?></p>
                    <p><strong>Nombre:</strong> <input type="text" name="nombre" value="<?php echo htmlspecialchars($datos_usuario['nombre']); ?>"><span id="nombre-error" style="color: red;"></span></p>
                    <p><strong>Apellidos:</strong> <input type="text" name="apellidos" value="<?php echo htmlspecialchars($datos_usuario['apellidos']); ?>"><span id="apellidos-error" style="color: red;"></span></p>
                    <p><strong>Teléfono:</strong> <input type="text" name="telefono" value="<?php echo htmlspecialchars($datos_usuario['telefono']); ?>"><span id="telefono-error" style="color: red;"></span></p>
                    <p><strong>Correo electrónico:</strong> <input type="email" name="email" value="<?php echo htmlspecialchars($datos_usuario['email']); ?>"><span id="email-error" style="color: red;"></span></p>
                    <p><strong>Dirección:</strong> <input type="text" name="direccion" value="<?php echo htmlspecialchars($datos_usuario['direccion']); ?>"></p>
                    <button type="submit">Guardar cambios</button>
                    <button type="button" onclick="toggleEditMode()">Cancelar</button>
                </form>
                <div class="foto-perfil">
                <img alt="Foto de Perfil" src="<?php echo htmlspecialchars($datos_usuario['foto_perfil']); ?>" width="55%">
                <input type="file" name="foto_perfil">
                </div>
            </div>
        </div>
    </div>
    <?php include('php/footer.php'); ?>
</body>
</html>