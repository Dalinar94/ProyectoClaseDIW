<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<main class="caja-usuario-login">
    <div class="form-container">
        <!-- Formulario de inicio de sesión -->
        <div id="login-form">
            <h2 id="h2Login">Iniciar Sesión</h2>
            
            <?php
            if (isset($_SESSION['mensaje_error'])) {
                echo "<p style='color: red;'>{$_SESSION['mensaje_error']}</p>";
                unset($_SESSION['mensaje_error']);
            }
            ?>
            
            <!--FORMULARIO DE LOGIN-->
            <form action="php/continuar.php" method="POST">
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="clave" placeholder="Contraseña" required>
                <button type="submit">Iniciar Sesión</button>
            </form>
            
            <div class="toggle-link">
                ¿No tienes una cuenta? <a href="paginaregistro.php">Regístrate</a>
            </div>
        </div>
    </div>
</main>