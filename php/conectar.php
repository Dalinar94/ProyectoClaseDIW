
<?php
function Conectarse() {
 if (!($link=mysqli_connect("localhost","root",""))){
    echo "Error conectando a la base de datos.";
    exit();
 }
 if (!mysqli_select_db($link ,"versusphone")){
    echo "Error seleccionando la base de datos.";
    exit();
 }
    return $link;
}
$link=Conectarse();
//echo "Conexión con la base de datos conseguida.<br>";
mysqli_close($link); //cierra la conexión
?>