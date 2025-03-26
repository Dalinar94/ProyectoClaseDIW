
<?php

//IPHONE
    $precioIphone = mysqli_query($link, "SELECT precio FROM productos WHERE id_productos = 1");
    $nombreIphone= mysqli_query($link, "SELECT nombre FROM productos where id_productos = 1");
    $imgIphone = mysqli_query($link, "SELECT img FROM productos where id_productos = 1");
    $pantallaIphone = mysqli_query($link, "SELECT pantalla FROM detalleproducto where id_productos = 1");
    $procesadorIphone = mysqli_query($link, "SELECT procesador FROM detalleproducto where id_productos = 1");
    $ramIphone = mysqli_query($link, "SELECT ram FROM detalleproducto where id_productos = 1");
    $internoIphone = mysqli_query($link, "SELECT AlmacenamientoInterno FROM detalleproducto where id_productos = 1");
    $soIphone = mysqli_query($link, "SELECT sistemaOperativo FROM detalleproducto where id_productos = 1");
    $camaraPrincipalIphone = mysqli_query($link, "SELECT camaraPrincipal FROM detalleproducto where id_productos = 1");
    $camaraFrontalIphone = mysqli_query($link, "SELECT camaraFrontal FROM detalleproducto where id_productos = 1");
    $bateriaIphone = mysqli_query($link, "SELECT bateria FROM detalleproducto where id_productos = 1");
    $conectividadIphone = mysqli_query($link, "SELECT conectividad FROM detalleproducto where id_productos = 1");
    $sonidoIphone = mysqli_query($link, "SELECT sonido FROM detalleproducto where id_productos = 1");
    $seguridadIphone = mysqli_query($link, "SELECT seguridad FROM detalleproducto where id_productos = 1");
    $resistenciaIphone = mysqli_query($link, "SELECT resistenciaAguaPolvo FROM detalleproducto where id_productos = 1");

//SAMSUNG
    $precioSamsung = mysqli_query($link, "SELECT precio FROM productos WHERE id_productos = 2");
    $nombreSamsung= mysqli_query($link, "SELECT nombre FROM productos where id_productos = 2");
    $marcaSamsung= mysqli_query($link, "SELECT marca FROM productos where id_productos = 2");
    $imgSamsung = mysqli_query($link, "SELECT img FROM productos where id_productos = 2");
    $pantallaSamsung = mysqli_query($link, "SELECT pantalla FROM detalleproducto WHERE id_productos =2");
    $procesadorSamsung = mysqli_query($link, "SELECT procesador FROM detalleproducto WHERE id_productos =2");
    $ramSamsung = mysqli_query($link, "SELECT ram FROM detalleproducto WHERE id_productos =2");
    $internoSamsung = mysqli_query($link, "SELECT AlmacenamientoInterno FROM detalleproducto WHERE id_productos =2");
    $soSamsung = mysqli_query($link, "SELECT sistemaOperativo FROM detalleproducto WHERE id_productos =2");
    $camaraPrincipalSamsung = mysqli_query($link, "SELECT camaraPrincipal FROM detalleproducto WHERE id_productos =2");
    $camaraFrontalSamsung = mysqli_query($link, "SELECT camaraFrontal FROM detalleproducto WHERE id_productos =2");
    $bateriaSamsung = mysqli_query($link, "SELECT bateria FROM detalleproducto WHERE id_productos =2");
    $conectividadSamsung = mysqli_query($link, "SELECT conectividad FROM detalleproducto WHERE id_productos =2");
    $sonidoSamsung = mysqli_query($link, "SELECT sonido FROM detalleproducto WHERE id_productos =2");
    $seguridadSamsung = mysqli_query($link, "SELECT seguridad FROM detalleproducto WHERE id_productos =2");
    $resistenciaSamsung = mysqli_query($link, "SELECT resistenciaAguaPolvo FROM detalleproducto WHERE id_productos =2");

//GOOGLE
    $nombreGoogle = mysqli_query($link, "SELECT nombre from productos where id_productos =3");
    $marcaGoogle = mysqli_query($link, "SELECT marca from productos where id_productos =3");
    $precioGoogle = mysqli_query($link, "SELECT precio from productos where id_productos =3");
    $imgGoogle = mysqli_query($link, "SELECT img FROM productos WHERE id_productos =3");
    $pantallaGoogle = mysqli_query($link, "SELECT pantalla FROM detalleproducto WHERE id_productos =3");
    $procesadorGoogle = mysqli_query($link, "SELECT procesador FROM detalleproducto WHERE id_productos =3");
    $ramGoogle = mysqli_query($link, "SELECT ram FROM detalleproducto WHERE id_productos =3");
    $internoGoogle = mysqli_query($link, "SELECT AlmacenamientoInterno FROM detalleproducto WHERE id_productos =3");
    $soGoogle = mysqli_query($link, "SELECT sistemaOperativo FROM detalleproducto WHERE id_productos =3");
    $camaraPrincipalGoogle = mysqli_query($link, "SELECT camaraPrincipal FROM detalleproducto WHERE id_productos =3");
    $camaraFrontalGoogle = mysqli_query($link, "SELECT camaraFrontal FROM detalleproducto WHERE id_productos =3");
    $bateriaGoogle = mysqli_query($link, "SELECT bateria FROM detalleproducto WHERE id_productos =3");
    $conectividadGoogle = mysqli_query($link, "SELECT conectividad FROM detalleproducto WHERE id_productos =3");
    $sonidoGoogle = mysqli_query($link, "SELECT sonido FROM detalleproducto WHERE id_productos =3");
    $seguridadGoogle = mysqli_query($link, "SELECT seguridad FROM detalleproducto WHERE id_productos =3");
    $resistenciaGoogle = mysqli_query($link, "SELECT resistenciaAguaPolvo FROM detalleproducto WHERE id_productos =3");

//SONY
    $precioSony = mysqli_query($link, "SELECT precio FROM productos WHERE id_productos = 4");
    $nombreSony= mysqli_query($link, "SELECT nombre FROM productos where id_productos = 4");
    $imgSony = mysqli_query($link, "SELECT img FROM productos where id_productos = 4");
    $marcaSony= mysqli_query($link, "SELECT marca FROM productos where id_productos = 4");
    $pantallaSony = mysqli_query($link, "SELECT pantalla FROM detalleproducto WHERE id_productos =4");
    $procesadorSony = mysqli_query($link, "SELECT procesador FROM detalleproducto WHERE id_productos =4");
    $ramSony = mysqli_query($link, "SELECT ram FROM detalleproducto WHERE id_productos =4");
    $internoSony = mysqli_query($link, "SELECT AlmacenamientoInterno FROM detalleproducto WHERE id_productos =4");
    $soSony = mysqli_query($link, "SELECT sistemaOperativo FROM detalleproducto WHERE id_productos =4");
    $camaraPrincipalSony = mysqli_query($link, "SELECT camaraPrincipal FROM detalleproducto WHERE id_productos =4");
    $camaraFrontalSony = mysqli_query($link, "SELECT camaraFrontal FROM detalleproducto WHERE id_productos =4");
    $bateriaSony = mysqli_query($link, "SELECT bateria FROM detalleproducto WHERE id_productos =4");
    $conectividadSony = mysqli_query($link, "SELECT conectividad FROM detalleproducto WHERE id_productos =4");
    $sonidoSony = mysqli_query($link, "SELECT sonido FROM detalleproducto WHERE id_productos =4");
    $seguridadSony = mysqli_query($link, "SELECT seguridad FROM detalleproducto WHERE id_productos =4");
    $resistenciaSony = mysqli_query($link, "SELECT resistenciaAguaPolvo FROM detalleproducto WHERE id_productos =4");


//ONEPLUS
    $precioOnePlus = mysqli_query($link, "SELECT precio FROM productos WHERE id_productos = 5");
    $nombreOnePlus= mysqli_query($link, "SELECT nombre FROM productos where id_productos = 5");
    $imgOnePlus = mysqli_query($link, "SELECT img FROM productos where id_productos = 5");
    $marcaOnePlus= mysqli_query($link, "SELECT marca FROM productos where id_productos = 5");
    $pantallaOnePlus = mysqli_query($link, "SELECT pantalla FROM detalleproducto WHERE id_productos =5");
    $procesadorOnePlus = mysqli_query($link, "SELECT procesador FROM detalleproducto WHERE id_productos =5");
    $ramOnePlus = mysqli_query($link, "SELECT ram FROM detalleproducto WHERE id_productos =5");
    $internoOnePlus = mysqli_query($link, "SELECT AlmacenamientoInterno FROM detalleproducto WHERE id_productos =5");
    $soOnePlus = mysqli_query($link, "SELECT sistemaOperativo FROM detalleproducto WHERE id_productos =5");
    $camaraPrincipalOnePlus = mysqli_query($link, "SELECT camaraPrincipal FROM detalleproducto WHERE id_productos =5");
    $camaraFrontalOnePlus = mysqli_query($link, "SELECT camaraFrontal FROM detalleproducto WHERE id_productos =5");
    $bateriaOnePlus = mysqli_query($link, "SELECT bateria FROM detalleproducto WHERE id_productos =5");
    $conectividadOnePlus = mysqli_query($link, "SELECT conectividad FROM detalleproducto WHERE id_productos =5");
    $sonidoOnePlus = mysqli_query($link, "SELECT sonido FROM detalleproducto WHERE id_productos =5");
    $seguridadOnePlus = mysqli_query($link, "SELECT seguridad FROM detalleproducto WHERE id_productos =5");
    $resistenciaOnePlus = mysqli_query($link, "SELECT resistenciaAguaPolvo FROM detalleproducto WHERE id_productos =5");
  

//XIAOMI
    $nombreXiaomi = mysqli_query($link, "SELECT nombre from productos where id_productos =6");
    $precioXiaomi = mysqli_query($link, "SELECT precio from productos where id_productos =6");
    $imgXiaomi = mysqli_query($link, "SELECT img FROM productos WHERE id_productos =6");
    $marcaXiaomi = mysqli_query($link, "SELECT marca FROM productos WHERE id_productos =6");
    $pantallaXiaomi= mysqli_query($link, "SELECT pantalla FROM detalleproducto WHERE id_productos =6");
    $procesadorXiaomi = mysqli_query($link, "SELECT procesador FROM detalleproducto WHERE id_productos =6");
    $ramXiaomi = mysqli_query($link, "SELECT ram FROM detalleproducto WHERE id_productos =6");
    $internoXiaomi = mysqli_query($link, "SELECT AlmacenamientoInterno FROM detalleproducto WHERE id_productos =6");
    $soXiaomi = mysqli_query($link, "SELECT sistemaOperativo FROM detalleproducto WHERE id_productos =6");
    $camaraPrincipalXiaomi = mysqli_query($link, "SELECT camaraPrincipal FROM detalleproducto WHERE id_productos =6");
    $camaraFrontalXiaomi = mysqli_query($link, "SELECT camaraFrontal FROM detalleproducto WHERE id_productos =6");
    $bateriaXiaomi = mysqli_query($link, "SELECT bateria FROM detalleproducto WHERE id_productos =6");
    $conectividadXiaomi = mysqli_query($link, "SELECT conectividad FROM detalleproducto WHERE id_productos =6");
    $sonidoXiaomi = mysqli_query($link, "SELECT sonido FROM detalleproducto WHERE id_productos =6");
    $seguridadXiaomi = mysqli_query($link, "SELECT seguridad FROM detalleproducto WHERE id_productos =6");
    $resistenciaXiaomi = mysqli_query($link, "SELECT resistenciaAguaPolvo FROM detalleproducto WHERE id_productos =6");

//OPPO
    $nombreOppo = mysqli_query($link, "SELECT nombre from productos where id_productos =7");
    $precioOppo = mysqli_query($link, "SELECT precio from productos where id_productos =7");
    $imgOppo = mysqli_query($link, "SELECT img FROM productos WHERE id_productos =7");
    $marcaOppo = mysqli_query($link, "SELECT marca FROM productos WHERE id_productos =7");
    $pantallaOppo = mysqli_query($link, "SELECT pantalla FROM detalleproducto WHERE id_productos =7");
    $procesadorOppo = mysqli_query($link, "SELECT procesador FROM detalleproducto WHERE id_productos =7");
    $ramOppo = mysqli_query($link, "SELECT ram FROM detalleproducto WHERE id_productos =7");
    $internoOppo = mysqli_query($link, "SELECT AlmacenamientoInterno FROM detalleproducto WHERE id_productos =7");
    $soOppo = mysqli_query($link, "SELECT sistemaOperativo FROM detalleproducto WHERE id_productos =7");
    $camaraPrincipalOppo = mysqli_query($link, "SELECT camaraPrincipal FROM detalleproducto WHERE id_productos =7");
    $camaraFrontalOppo = mysqli_query($link, "SELECT camaraFrontal FROM detalleproducto WHERE id_productos =7");
    $bateriaOppo = mysqli_query($link, "SELECT bateria FROM detalleproducto WHERE id_productos =7");
    $conectividadOppo = mysqli_query($link, "SELECT conectividad FROM detalleproducto WHERE id_productos =7");
    $sonidoOppo = mysqli_query($link, "SELECT sonido FROM detalleproducto WHERE id_productos =7");
    $seguridadOppo = mysqli_query($link, "SELECT seguridad FROM detalleproducto WHERE id_productos =7");
    $resistenciaOppo = mysqli_query($link, "SELECT resistenciaAguaPolvo FROM detalleproducto WHERE id_productos =7");


//HONOR
    $nombreHonor = mysqli_query($link, "SELECT nombre from productos where id_productos =8");
    $precioHonor = mysqli_query($link, "SELECT precio from productos where id_productos =8");
    $imgHonor = mysqli_query($link, "SELECT img FROM productos WHERE id_productos =8");
    $marcaHonor = mysqli_query($link, "SELECT marca FROM productos WHERE id_productos =8");
    $pantallaHonor = mysqli_query($link, "SELECT pantalla FROM detalleproducto WHERE id_productos =8");
    $procesadorHonor = mysqli_query($link, "SELECT procesador FROM detalleproducto WHERE id_productos =8");
    $ramHonor = mysqli_query($link, "SELECT ram FROM detalleproducto WHERE id_productos =8");
    $internoHonor = mysqli_query($link, "SELECT AlmacenamientoInterno FROM detalleproducto WHERE id_productos =8");
    $soHonor = mysqli_query($link, "SELECT sistemaOperativo FROM detalleproducto WHERE id_productos =8");
    $camaraPrincipalHonor = mysqli_query($link, "SELECT camaraPrincipal FROM detalleproducto WHERE id_productos =8");
    $camaraFrontalHonor = mysqli_query($link, "SELECT camaraFrontal FROM detalleproducto WHERE id_productos =8");
    $bateriaHonor = mysqli_query($link, "SELECT bateria FROM detalleproducto WHERE id_productos =8");
    $conectividadHonor = mysqli_query($link, "SELECT conectividad FROM detalleproducto WHERE id_productos =8");
    $sonidoHonor = mysqli_query($link, "SELECT sonido FROM detalleproducto WHERE id_productos =8");
    $seguridadHonor = mysqli_query($link, "SELECT seguridad FROM detalleproducto WHERE id_productos =8");
    $resistenciaHonor = mysqli_query($link, "SELECT resistenciaAguaPolvo FROM detalleproducto WHERE id_productos =8");
    
?>