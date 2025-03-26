<main class="caja-registro">

<div class="form-registro">
    <h2 class="h2-registro">Registrarse</h2>
    <?php
    if (isset($_GET['mensaje'])) {
        if ($_GET['mensaje'] == 'error_registro') {
            echo "<p style='color: red;'>Error al registrar. Por favor, inténtelo de nuevo.</p>";
        } elseif ($_GET['mensaje'] == 'email_existente') {
            echo "<p style='color: red;'>El correo electrónico ya está registrado. Por favor, use otro correo electrónico.</p>";
        }
    }
    ?>
    <form action="php/encriptar.php" method="POST">
        <input type="text" name="username" placeholder="Nombre de usuario" required>
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="text" name="subname" placeholder="Apellidos" required>
        <input type="text" name="phone" placeholder="Teléfono" required>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="text" name="direccion" placeholder="Direccion" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Registrarse</button>
    </form>
    <div class="enlace-login">
        ¿Ya tienes una cuenta? <a href="paginalogin.php">Inicia Sesión</a>
    </div>
</div>
</main>