<!DOCTYPE html>
<html lang="es">
<?php
 include('php/conectar.php');
 $link = Conectarse();
 include('php/productosOperaciones.php');

 // Obtener el ID del producto desde la URL
 $productoId = isset($_GET['id']) ? $_GET['id'] : '';

 // Definir productos
 $productos = [
     '1' => ['img' => $Iphoneimg, 'nombre' => $Iphonenombre, 'precio' => $IphonePrecio, 'marca' => 'iPhone', 'pantalla' => $IphonePantalla, 'procesador' => $IphoneProcesador, 'ram' => $IphoneRam, 'almacenamiento' => $IphoneAlmacenamientoInterno, 'so' => $IphoneSO, 'cp' => $IphoneCP, 'cf' => $IphoneCF],
     '2' => ['img' => $GoogleImg, 'nombre' => $Googlemarca." ".$Googlenombre, 'precio' => $Googleprecio, 'marca' => $Googlemarca, 'pantalla' => $GooglePantalla, 'procesador' => $GoogleProcesador, 'ram' => $GoogleRam, 'almacenamiento' => $GoogleAlmacenamientoInterno, 'so' => $GoogleSO, 'cp' => $GoogleCP, 'cf' => $GoogleCF],
     '3' => ['img' => $XiaomiImg, 'nombre' => $Xiaomimarca." ".$Xiaominombre, 'precio' => $Xiaomiprecio, 'marca' => $Xiaomimarca, 'pantalla' => $XiaomiPantalla, 'procesador' => $XiaomiProcesador, 'ram' => $XiaomiRam, 'almacenamiento' => $XiaomiAlmacenamientoInterno, 'so' => $XiaomiSO, 'cp' => $XiaomiCP, 'cf' => $XiaomiCF],
     '4' => ['img' => $Samsungimg, 'nombre' => $Samsungmarca." ".$Samsungnombre, 'precio' => $Samsungprecio, 'marca' => $Samsungmarca, 'pantalla' => $SamsungPantalla, 'procesador' => $SamsungProcesador, 'ram' => $SamsungRam, 'almacenamiento' => $SamsungAlmacenamientoInterno, 'so' => $SamsungSO, 'cp' => $SamsungCP, 'cf' => $SamsungCF],
     '5' => ['img' => $Sonyimg, 'nombre' => $Sonymarca." ".$Sonynombre, 'precio' => $Sonyprecio, 'marca' => $Sonymarca, 'pantalla' => $SonyPantalla, 'procesador' => $SonyProcesador, 'ram' => $SonyRam, 'almacenamiento' => $SonyAlmacenamientoInterno, 'so' => $SonySO, 'cp' => $SonyCP, 'cf' => $SonyCF],
     '6' => ['img' => $OnePlusimg, 'nombre' => $OnePlusnombre, 'precio' => $OnePlusprecio, 'marca' => 'OnePlus', 'pantalla' => $OnePlusPantalla, 'procesador' => $OnePlusProcesador, 'ram' => $OnePlusRam, 'almacenamiento' => $OnePlusAlmacenamientoInterno, 'so' => $OnePlusSO, 'cp' => $OnePlusCP, 'cf' => $OnePlusCF],
     '7' => ['img' => $Oppoimg, 'nombre' => $Oppomarca." ".$Opponombre, 'precio' => $Oppoprecio, 'marca' => $Oppomarca, 'pantalla' => $OppoPantalla, 'procesador' => $OppoProcesador, 'ram' => $OppoRam, 'almacenamiento' => $OppoAlmacenamientoInterno, 'so' => $OppoSO, 'cp' => $OppoCP, 'cf' => $OppoCF],
     '8' => ['img' => $Honorimg, 'nombre' => $Honormarca." ".$Honornombre, 'precio' => $Honorprecio, 'marca' => $Honormarca, 'pantalla' => $HonorPantalla, 'procesador' => $HonorProcesador, 'ram' => $HonorRam, 'almacenamiento' => $HonorAlmacenamientoInterno, 'so' => $HonorSO, 'cp' => $HonorCP, 'cf' => $HonorCF],
 ];

 // Obtener los detalles del producto
 $producto = isset($productos[$productoId]) ? $productos[$productoId] : null;

 if (!$producto) {
     echo "Producto no encontrado.";
     exit;
 }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $producto['nombre']; ?></title>
    <link rel="stylesheet" href="css/styles.css" />
    <!--FAVICON-->
    <link rel="icon" href="logo/logo.svg" type="image/x-icon">
</head>

<body>
<?php include('php/header.php'); ?>
<?php include('php/menuInicio.php'); ?>

    <div class="producto-xiaomi">
        <div class="imagen-producto">
            <h1><?php echo $producto['nombre']; ?></h1>
            <img src="<?php echo $producto['img']; ?>" alt="<?php echo $producto['nombre']; ?>" width="70%">
            <h2><?php echo $producto['precio']; ?>€</h2>
            
            <div class="carritoTelefono">
                <a href="carrito.php?producto=<?php echo urlencode($producto['nombre']); ?>&precio=<?php echo $producto['precio']; ?>" class="col-xs-3 col-s-3 col-m-3 col-l-12">
                    <img alt="icono del carrito" src="iconos/Mis iconos/carrito.svg" width="20%" />
                </a>
            </div>
        </div>

        <div class="info-producto">
            <h2 class="titulo-producto">Características principales</h2>
            <ul class="lista-producto">
                <li><strong>Pantalla: </strong><?php echo $producto['pantalla']; ?></li>
                <li><strong>Procesador: </strong><?php echo $producto['procesador']; ?></li>
                <li><strong>Memoria RAM: </strong><?php echo $producto['ram']; ?></li>
                <li><strong>Almacenamiento interno: </strong><?php echo $producto['almacenamiento']; ?></li>
                <li><strong>Sistema operativo: </strong><?php echo $producto['so']; ?></li>
                <li><strong>Cámara principal: </strong><?php echo $producto['cp']; ?></li>
                <li><strong>Cámara frontal: </strong><?php echo $producto['cf']; ?></li>
            </ul>
        </div>
    </div>
    <?php include('php/footer.php'); ?>
</body>
</html>