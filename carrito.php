<?php
session_start();

// Función para añadir un producto al carrito
function añadirAlCarrito($producto, $precio) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }
    $_SESSION['carrito'][] = ['nombre' => $producto, 'precio' => $precio];
}

// Función para mostrar el contenido del carrito
function mostrarCarrito() {
    if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
        echo '<p>Tu carrito está vacío.</p>';
        return;
    }

    $total = 0;
    echo '<ul>';
    foreach ($_SESSION['carrito'] as $index => $producto) {
        echo '<li>' . $producto['nombre'] . ' - ' . $producto['precio'] . '€ <a href="carrito.php?eliminar=' . $index . '">Eliminar</a></li>';
        $total += $producto['precio'];
    }
    echo '</ul>';
    echo '<br><h3>Total: ' . number_format($total, 2) . ' €</h3>';
}

// Función para eliminar un producto del carrito
function eliminarDelCarrito($index) {
    if (isset($_SESSION['carrito'][$index])) {
        unset($_SESSION['carrito'][$index]);
        $_SESSION['carrito'] = array_values($_SESSION['carrito']); // Reindexar el array
    }
}
// Función para vaciar el carrito
function vaciarCarrito() {
  unset($_SESSION['carrito']);
}
// Manejar la eliminación de productos
if (isset($_GET['eliminar'])) {
    eliminarDelCarrito($_GET['eliminar']);
}

// Manejar la adición de productos (esto normalmente vendría de un formulario o enlace)
if (isset($_GET['producto']) && isset($_GET['precio'])) {
    añadirAlCarrito($_GET['producto'], $_GET['precio']);
}

// Manejar la solicitud de vaciar el carrito
if (isset($_GET['vaciar'])) {
  vaciarCarrito();
}

// Manejar la solicitud de compra
if (isset($_GET['comprar'])) {
 //Aqui en un futuro añadire la logica para comprar realmente. De momento es ficticio
  vaciarCarrito();
  $_SESSION['mensaje_exito'] = "Compra realizada con éxito.";
  header('Location: paginaInicio.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de Compras</title>
  <link rel="stylesheet" href="css/styles.css" />

  <!--FAVICON-->
  <link rel="icon" href="logo/logo.svg" type="image/x-icon">

</head>

<body id="cuerpo">
<?php include('php/header.php'); ?>
<?php include('php/menuInicio.php'); ?>

  <main id="carro">
    <div class="container-carrito">
      <h1 id="carrito-h1">Carrito de Compras</h1>
      <div id="carrito">
        <?php mostrarCarrito(); ?>
        <form method="get" action="carrito.php">
          <button type="submit" name="vaciar" value="true">Vaciar Carrito</button>
          <button type="submit" name="comprar" value="true">Comprar</button>
        </form>
      </div>
    </div>
  </main>

  <!-- FOOTER-->
  <?php include('php/footer.php');?>

</body>
</html>