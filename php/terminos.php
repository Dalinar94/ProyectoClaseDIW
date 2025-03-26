<?php
    include('conectar.php');
    $link = Conectarse();
    $mostrar = mysqli_query($link, "SELECT contenido FROM tablalegal WHERE id_tablaLegal = 2");

    while ($fila = mysqli_fetch_array($mostrar)) {
        echo $fila['contenido'];
    }

    mysqli_close($link);
?>
