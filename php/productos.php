<!-- filepath: /c:/xampp/htdocs/Actividades/PROYECTO/php/productos.php -->
<?php
include("conectar.php");
$link = Conectarse();
include('productosOperaciones.php');

$search = isset($_GET['search']) ? $_GET['search'] : '';

// Definir productos
$productos = [
    ['id' => '1', 'img' => $Iphoneimg, 'nombre' => $Iphonenombre, 'precio' => $IphonePrecio, 'marca' => 'iPhone'],
    ['id' => '2', 'img' => $GoogleImg, 'nombre' => $Googlemarca." ".$Googlenombre, 'precio' => $Googleprecio, 'marca' => $Googlemarca],
    ['id' => '3', 'img' => $XiaomiImg, 'nombre' => $Xiaomimarca." ".$Xiaominombre, 'precio' => $Xiaomiprecio, 'marca' => $Xiaomimarca],
    ['id' => '4', 'img' => $Samsungimg, 'nombre' => $Samsungmarca." ".$Samsungnombre, 'precio' => $Samsungprecio, 'marca' => $Samsungmarca],
    ['id' => '5', 'img' => $Sonyimg, 'nombre' => $Sonymarca." ".$Sonynombre, 'precio' => $Sonyprecio, 'marca' => $Sonymarca],
    ['id' => '6', 'img' => $OnePlusimg, 'nombre' => $OnePlusnombre, 'precio' => $OnePlusprecio, 'marca' => 'OnePlus'],
    ['id' => '7', 'img' => $Oppoimg, 'nombre' => $Oppomarca." ".$Opponombre, 'precio' => $Oppoprecio, 'marca' => $Oppomarca],
    ['id' => '8', 'img' => $Honorimg, 'nombre' => $Honormarca." ".$Honornombre, 'precio' => $Honorprecio, 'marca' => $Honormarca],
];

// Filtrar productos por marca o nombre
if ($search) {
    $productos = array_filter($productos, function($producto) use ($search) {
        return stripos($producto['marca'], $search) !== false || stripos($producto['nombre'], $search) !== false;
    });

    // Si hay un único producto que coincide con la búsqueda, redirigir a su página
    if (count($productos) == 1) {
        $producto = reset($productos);
        header("Location: /Actividades/PROYECTO/telefono.php?id=" . $producto['id']);
        exit();
    }
}
?>

<div class="row">
    <div class="col-xs-12">
        <form id="search-form" method="GET" action="/Actividades/PROYECTO/indexProductos.php">
            <input class="search-input" type="search" name="search" placeholder="Busca tu Smartphone..." value="<?php echo htmlspecialchars($search); ?>" oninput="submitForm()">
        </form>
        <!--<select class="select-order">
            <option>Precio mas bajo</option>
            <option>Precio mas alto</option>
            <option>Por opiniones</option>
            <option>Por descuento</option>
        </select>-->
    </div>
</div>

<div class="row">
    <?php if ($search && empty($productos)): ?>
        <p>No se encontraron resultados para: <?php echo htmlspecialchars($search); ?></p>
    <?php else: ?>
        <?php foreach ($productos as $producto): ?>
            <a href="/Actividades/PROYECTO/telefono.php?id=<?php echo $producto['id']; ?>" class="col-m-3 col-s-6 product-box">
                <img alt="producto" src="<?php echo $producto['img']; ?>" width="55%">
                <h3><?php echo $producto['nombre']; ?></h3>
                <strong class="price"><?php echo $producto['precio']; ?>€</strong> iva incluido
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<!--<ul class="paginacion">
    <li><a href="#" class="active">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li>...</li>
    <li><a href="#">10</a></li>
</ul>-->