<?php
    include_once('conectar.php');
    $link = Conectarse();
    include('productosOperaciones.php');

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
?>
<div class="imagenes-container">
    <div class="imagen-box">
        <a href="/Actividades/PROYECTO/telefono.php?id=1 "><img src="<?php echo $Iphoneimg; ?>" width="60%" alt="Descripción de Imagen 1" class="imagen"></a>
        <p class="texto-imagen"><?php echo $Iphonenombre; ?><br></p>
        <p class="texto-imagen2"><?php echo $IphonePrecio; ?>€ Iva Incluido</p>
        <br><h2><strong>DISPONIBLE!</strong></h2>
    </div>
    <div class="imagen-box">
        <a href="/Actividades/PROYECTO/telefono.php?id=2 "><img src="<?php echo $GoogleImg; ?>" width="60%" alt="Descripción de Imagen 1" class="imagen"></a>
        <p class="texto-imagen"><?php echo $Googlemarca . " " . $Googlenombre; ?><br></p>
        <p class="texto-imagen2"><?php echo $Googleprecio; ?>€ Iva Incluido</p>
        <br><h2><strong>DISPONIBLE!</strong></h2>
    </div>
    <div class="imagen-box">
        <a href="/Actividades/PROYECTO/telefono.php?id=3"><img src="<?php echo $XiaomiImg; ?>" width="60%" alt="Descripción de Imagen 1" class="imagen"></a>
        <p class="texto-imagen"><?php echo $Xiaomimarca . " " . $Xiaominombre; ?><br></p>
        <p class="texto-imagen2"><?php echo $Xiaomiprecio; ?>€ Iva Incluido</p>
        <br><h2><strong>DISPONIBLE!</strong></h2>
    </div>
</div>
