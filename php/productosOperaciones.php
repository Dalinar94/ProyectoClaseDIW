<?php
 include('consultasProductos.php');

 function obtenerDato($consulta, $campo)
 {
     $fila = mysqli_fetch_array($consulta);
     return $fila[$campo] ?? null;
 }
 function obtenerTelefonos($link) {
    $query = "SELECT id, nombre, imagen, pantalla, procesador, ram, camara, bateria FROM productos";
    $result = mysqli_query($link, $query);

    $telefonos = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $telefonos[] = $row;
    }

    return $telefonos;
}
 



// IPHONE
$IphonePrecio = obtenerDato($precioIphone, 'precio');
$Iphonenombre = obtenerDato($nombreIphone, 'nombre');
$Iphoneimg = obtenerDato($imgIphone, 'img');
$IphonePantalla = obtenerDato($pantallaIphone, 'pantalla');
$IphoneProcesador = obtenerDato($procesadorIphone, 'procesador');
$IphoneRam = obtenerDato($ramIphone, 'ram');
$IphoneAlmacenamientoInterno = obtenerDato($internoIphone, 'AlmacenamientoInterno');
$IphoneSO = obtenerDato($soIphone, 'sistemaOperativo');
$IphoneCP = obtenerDato($camaraPrincipalIphone, 'camaraPrincipal');
$IphoneCF = obtenerDato($camaraFrontalIphone, 'camaraFrontal');
$IphoneBateria = obtenerDato($bateriaIphone, 'bateria');
$IphoneConectividad = obtenerDato($conectividadIphone, 'conectividad');
$IphoneSonido = obtenerDato($sonidoIphone, 'sonido');
$IphoneResistencia = obtenerDato($resistenciaIphone, 'resistenciaAguaPolvo');
$IphoneSeguridad = obtenerDato($seguridadIphone, 'seguridad');


//XIAOMI
$Xiaominombre = obtenerDato($nombreXiaomi, 'nombre');
$Xiaomimarca = obtenerDato($marcaXiaomi, 'marca');
$Xiaomiprecio = obtenerDato($precioXiaomi, 'precio');
$XiaomiImg = obtenerDato($imgXiaomi, 'img');
$XiaomiPantalla = obtenerDato($pantallaXiaomi, 'pantalla');
$XiaomiProcesador = obtenerDato($procesadorXiaomi, 'procesador');
$XiaomiRam = obtenerDato($ramXiaomi, 'ram');
$XiaomiAlmacenamientoInterno = obtenerDato($internoXiaomi, 'AlmacenamientoInterno');
$XiaomiSO = obtenerDato($soXiaomi, 'sistemaOperativo');
$XiaomiCP = obtenerDato($camaraPrincipalXiaomi, 'camaraPrincipal');
$XiaomiCF = obtenerDato($camaraFrontalXiaomi, 'camaraFrontal');
$XiaomiBateria = obtenerDato($bateriaXiaomi, 'bateria');
$XiaomiConectividad = obtenerDato($conectividadXiaomi, 'conectividad');
$XiaomiSonido = obtenerDato($sonidoXiaomi, 'sonido');
$XiaomiSeguridad = obtenerDato($seguridadXiaomi, 'seguridad');
$XiaomiResistencia= obtenerDato($resistenciaXiaomi, 'resistenciaAguaPolvo');

//GOOGLE
$Googlenombre = obtenerDato($nombreGoogle, 'nombre');
$Googlemarca = obtenerDato($marcaGoogle, 'marca');
$Googleprecio = obtenerDato($precioGoogle, 'precio');
$GoogleImg = obtenerDato($imgGoogle, 'img');
$GooglePantalla = obtenerDato($pantallaGoogle, 'pantalla');
$GoogleProcesador = obtenerDato($procesadorGoogle, 'procesador');
$GoogleRam = obtenerDato($ramGoogle, 'ram');
$GoogleAlmacenamientoInterno = obtenerDato($internoGoogle, 'AlmacenamientoInterno');
$GoogleSO = obtenerDato($soGoogle, 'sistemaOperativo');
$GoogleCP = obtenerDato($camaraPrincipalGoogle, 'camaraPrincipal');
$GoogleCF = obtenerDato($camaraFrontalGoogle, 'camaraFrontal');
$GoogleBateria = obtenerDato($bateriaGoogle, 'bateria');
$GoogleConectividad = obtenerDato($conectividadGoogle, 'conectividad');
$GoogleSonido = obtenerDato($sonidoGoogle, 'sonido');
$GoogleSeguridad = obtenerDato($seguridadGoogle, 'seguridad');
$GoogleResistencia= obtenerDato($resistenciaGoogle, 'resistenciaAguaPolvo');

//SAMSUNG
$Samsungnombre = obtenerDato($nombreSamsung, 'nombre');
$Samsungmarca = obtenerDato($marcaSamsung, 'marca');
$Samsungprecio = obtenerDato($precioSamsung, 'precio');
$Samsungimg = obtenerDato($imgSamsung, 'img');
$SamsungPantalla = obtenerDato($pantallaSamsung, 'pantalla');
$SamsungProcesador = obtenerDato($procesadorSamsung, 'procesador');
$SamsungRam = obtenerDato($ramSamsung, 'ram');
$SamsungAlmacenamientoInterno = obtenerDato($internoSamsung, 'AlmacenamientoInterno');
$SamsungSO = obtenerDato($soSamsung, 'sistemaOperativo');
$SamsungCP = obtenerDato($camaraPrincipalSamsung, 'camaraPrincipal');
$SamsungCF = obtenerDato($camaraFrontalSamsung, 'camaraFrontal');
$SamsungBateria = obtenerDato($bateriaSamsung, 'bateria');
$SamsungConectividad = obtenerDato($conectividadSamsung, 'conectividad');
$SamsungSonido = obtenerDato($sonidoSamsung, 'sonido');
$SamsungSeguridad = obtenerDato($seguridadSamsung, 'seguridad');
$SamsungResistencia= obtenerDato($resistenciaSamsung, 'resistenciaAguaPolvo');

//SONY
$Sonynombre = obtenerDato($nombreSony, 'nombre');
$Sonymarca = obtenerDato($marcaSony, 'marca');
$Sonyprecio = obtenerDato($precioSony, 'precio');
$Sonyimg= obtenerDato($imgSony, 'img');
$SonyPantalla = obtenerDato($pantallaSony, 'pantalla');
$SonyProcesador = obtenerDato($procesadorSony, 'procesador');
$SonyRam = obtenerDato($ramSony, 'ram');
$SonyAlmacenamientoInterno = obtenerDato($internoSony, 'AlmacenamientoInterno');
$SonySO = obtenerDato($soSony, 'sistemaOperativo');
$SonyCP = obtenerDato($camaraPrincipalSony, 'camaraPrincipal');
$SonyCF = obtenerDato($camaraFrontalSony, 'camaraFrontal');
$SonyBateria = obtenerDato($bateriaSony, 'bateria');
$SonyConectividad = obtenerDato($conectividadSony, 'conectividad');
$SonySonido = obtenerDato($sonidoSony, 'sonido');
$SonySeguridad = obtenerDato($seguridadSony, 'seguridad');
$SonyResistencia= obtenerDato($resistenciaSony, 'resistenciaAguaPolvo');



 //ONEPLUS
$OnePlusnombre = obtenerDato($nombreOnePlus, 'nombre');
$OnePlusmarca = obtenerDato($marcaOnePlus, 'marca');
$OnePlusprecio = obtenerDato($precioOnePlus, 'precio');
$OnePlusimg= obtenerDato($imgOnePlus, 'img');
$OnePlusPantalla = obtenerDato($pantallaOnePlus, 'pantalla');
$OnePlusProcesador = obtenerDato($procesadorOnePlus, 'procesador');
$OnePlusRam = obtenerDato($ramOnePlus, 'ram');
$OnePlusAlmacenamientoInterno = obtenerDato($internoOnePlus, 'AlmacenamientoInterno');
$OnePlusSO = obtenerDato($soOnePlus, 'sistemaOperativo');
$OnePlusCP = obtenerDato($camaraPrincipalOnePlus, 'camaraPrincipal');
$OnePlusCF = obtenerDato($camaraFrontalOnePlus, 'camaraFrontal');
$OnePlusBateria = obtenerDato($bateriaOnePlus, 'bateria');
$OnePlusConectividad = obtenerDato($conectividadOnePlus, 'conectividad');
$OnePlusSonido = obtenerDato($sonidoOnePlus, 'sonido');
$OnePlusSeguridad = obtenerDato($seguridadOnePlus, 'seguridad');
$OnePlusResistencia= obtenerDato($resistenciaOnePlus, 'resistenciaAguaPolvo');

//OPPO
$Opponombre = obtenerDato($nombreOppo, 'nombre');
$Oppomarca = obtenerDato($marcaOppo, 'marca');
$Oppoprecio = obtenerDato($precioOppo, 'precio');
$Oppoimg= obtenerDato($imgOppo, 'img');
$OppoPantalla = obtenerDato($pantallaOppo, 'pantalla');
$OppoProcesador = obtenerDato($procesadorOppo, 'procesador');
$OppoRam = obtenerDato($ramOppo, 'ram');
$OppoAlmacenamientoInterno = obtenerDato($internoOppo, 'AlmacenamientoInterno');
$OppoSO = obtenerDato($soOppo, 'sistemaOperativo');
$OppoCP = obtenerDato($camaraPrincipalOppo, 'camaraPrincipal');
$OppoCF = obtenerDato($camaraFrontalOppo, 'camaraFrontal');
$OppoBateria = obtenerDato($bateriaOppo, 'bateria');
$OppoConectividad = obtenerDato($conectividadOppo, 'conectividad');
$OppoSonido = obtenerDato($sonidoOppo, 'sonido');
$OppoSeguridad = obtenerDato($seguridadOppo, 'seguridad');
$OppoResistencia= obtenerDato($resistenciaOppo, 'resistenciaAguaPolvo');


//HONOR
$Honornombre = obtenerDato($nombreHonor, 'nombre');
$Honormarca = obtenerDato($marcaHonor, 'marca');
$Honorprecio = obtenerDato($precioHonor, 'precio');
$Honorimg= obtenerDato($imgHonor, 'img');
$HonorPantalla = obtenerDato($pantallaHonor, 'pantalla');
$HonorProcesador = obtenerDato($procesadorHonor, 'procesador');
$HonorRam = obtenerDato($ramHonor, 'ram');
$HonorAlmacenamientoInterno = obtenerDato($internoHonor, 'AlmacenamientoInterno');
$HonorSO = obtenerDato($soHonor,'sistemaOperativo');
$HonorCP = obtenerDato($camaraPrincipalHonor, 'camaraPrincipal');
$HonorCF = obtenerDato($camaraFrontalHonor, 'camaraFrontal');
$HonorBateria = obtenerDato($bateriaHonor, 'bateria');
$HonorConectividad = obtenerDato($conectividadHonor, 'conectividad');
$HonorSonido = obtenerDato($sonidoHonor, 'sonido');
$HonorSeguridad = obtenerDato($seguridadHonor,'seguridad');
$HonorResistencia= obtenerDato($resistenciaHonor, 'resistenciaAguaPolvo');




mysqli_close($link);
?>