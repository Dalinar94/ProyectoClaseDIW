<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<header class="container-full">
    <div class="row-buscador">
        <!-- Logo -->
        <div class="col-xs-12 col-s-12 col-m-4 col-l-3 logo">
            <a href="paginaInicio.php"><img src="logo/logo.svg" width="80" alt="Logo de VersusPhone"></a>
            <h1 class="titulo-productos">VersusPhone</h1>
        </div>

        <!-- Buscador -->
        <div class="col-xs-12 col-s-12 col-m-8 col-l-6 buscador">
            <img src="iconos/Mis iconos/lupa.svg" width="50" alt="Lupa">
            <form action="php/buscar.php" method="GET">
                <input class="search-input-buscador" type="search" name="search" placeholder="Que desea buscar?...">
            </form>
        </div>

        <!-- Caja carrito/usuario-->
        <div class="caja-conjunta">
            <div class="col-xs-12 col-s-12 col-m-12 col-l-3 caja-carrito-container">
                <img src="iconos/Mis iconos/carrito.svg" width="40" alt="Logo del carrito">
                <a href="carrito.php" class="btn-carrito">Ir al carrito</a>
            </div>
            <div class="col-xs-12 col-s-12 col-m-12 col-l-3 caja-usuario">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <?php if (!empty($_SESSION['foto_perfil'])): ?>
                    <img alt="Foto de Perfil" src="<?php echo $_SESSION['foto_perfil']; ?>" width="55%">
                    <?php else: ?>
                        <img src="iconos/Mis iconos/usuario.svg" width="40" alt="Logo del usuario">
                    <?php endif; ?>
                    <a href="perfil.php"><span class="btn-usuario">Hola, <?php echo $_SESSION['usuario']; ?></span></a>
                    <a href="php/logout.php" class="btn-logout"><img src="iconos/Mis iconos/cerrar-sesion.png"></a>
                <?php else: ?>
                    <img src="iconos/Mis iconos/usuario.svg" width="40" alt="Logo del usuario">
                    <a href="paginalogin.php" class="btn-usuario">Mi cuenta</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>