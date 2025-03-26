<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('conectar.php');
$link = Conectarse();

echo '<link rel="stylesheet" href="css/comparador.css">';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefono1_id = $_POST['telefono1'];
    $telefono2_id = $_POST['telefono2'];

    $query1 = "SELECT p.*, d.* FROM productos p 
               JOIN detalleproducto d ON p.id_productos = d.id_productos 
               WHERE p.id_productos='$telefono1_id'";
    $query2 = "SELECT p.*, d.* FROM productos p 
               JOIN detalleproducto d ON p.id_productos = d.id_productos 
               WHERE p.id_productos='$telefono2_id'";

    $result1 = mysqli_query($link, $query1);
    $result2 = mysqli_query($link, $query2);

    if ($result1 && $result2) {
        $telefono1 = mysqli_fetch_assoc($result1);
        $telefono2 = mysqli_fetch_assoc($result2);

        echo "<div class='comparacion-container'>
                <div class='telefono'>
                    <h4>{$telefono1['nombre']}</h4>
                    <img src='{$telefono1['img']}' alt='{$telefono1['nombre']}' >
                    <p><strong>Marca:</strong> {$telefono1['marca']}</p>
                    <p><strong>Modelo:</strong> " . (isset($telefono1['nombre']) ? $telefono1['nombre'] : 'N/A') . "</p>
                    <p><strong>Precio:</strong> {$telefono1['precio']}</p>
                    <p><strong>Pantalla:</strong> {$telefono1['pantalla']}</p>
                    <p><strong>Procesador:</strong> {$telefono1['procesador']}</p>
                    <p><strong>RAM:</strong> {$telefono1['ram']}</p>
                    <p><strong>Almacenamiento Interno:</strong> {$telefono1['AlmacenamientoInterno']}</p>
                    <p><strong>Sistema Operativo:</strong> {$telefono1['sistemaOperativo']}</p>
                    <p><strong>Cámara Principal:</strong> {$telefono1['camaraPrincipal']}</p>
                    <p><strong>Cámara Frontal:</strong> {$telefono1['camaraFrontal']}</p>
                    <p><strong>Batería:</strong> {$telefono1['bateria']}</p>
                    <p><strong>Conectividad:</strong> {$telefono1['conectividad']}</p>
                    <p><strong>Sonido:</strong> {$telefono1['sonido']}</p>
                    <p><strong>Seguridad:</strong> {$telefono1['seguridad']}</p>
                    <p><strong>Resistencia al Agua y Polvo:</strong> {$telefono1['resistenciaAguaPolvo']}</p>
                </div>
                <div class='telefono'>
                    <h4>{$telefono2['nombre']}</h4>
                    <img src='{$telefono2['img']}' alt='{$telefono2['img']}'>
                    <p><strong>Marca:</strong> {$telefono2['marca']}</p>
                    <p><strong>Modelo:</strong> " . (isset($telefono2['nombre']) ? $telefono2['nombre'] : 'N/A') . "</p>
                    <p><strong>Precio:</strong> {$telefono2['precio']}</p>
                    <p><strong>Pantalla:</strong> {$telefono2['pantalla']}</p>
                    <p><strong>Procesador:</strong> {$telefono2['procesador']}</p>
                    <p><strong>RAM:</strong> {$telefono2['ram']}</p>
                    <p><strong>Almacenamiento Interno:</strong> {$telefono2['AlmacenamientoInterno']}</p>
                    <p><strong>Sistema Operativo:</strong> {$telefono2['sistemaOperativo']}</p>
                    <p><strong>Cámara Principal:</strong> {$telefono2['camaraPrincipal']}</p>
                    <p><strong>Cámara Frontal:</strong> {$telefono2['camaraFrontal']}</p>
                    <p><strong>Batería:</strong> {$telefono2['bateria']}</p>
                    <p><strong>Conectividad:</strong> {$telefono2['conectividad']}</p>
                    <p><strong>Sonido:</strong> {$telefono2['sonido']}</p>
                    <p><strong>Seguridad:</strong> {$telefono2['seguridad']}</p>
                    <p><strong>Resistencia al Agua y Polvo:</strong> {$telefono2['resistenciaAguaPolvo']}</p>
                </div>
              </div>";
    } else {
        echo "<p>Error al obtener los datos de los teléfonos.</p>";
    }

    mysqli_close($link);
} else {
    // Mostrar el formulario para seleccionar los teléfonos a comparar
    echo '<div class="comparador-container">
            <h2>Comparador de Teléfonos</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="telefono1">Seleccione el primer teléfono:</label>
                    <select id="telefono1" name="telefono1" required>
                        <option value="">Seleccionar el producto</option>';
    
    $query = "SELECT id_productos, nombre FROM productos";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['id_productos']}'>{$row['nombre']}</option>";
    }
    
    echo '      </select>
                </div>
                <div class="form-group">
                    <label for="telefono2">Seleccione el segundo teléfono:</label>
                    <select id="telefono2" name="telefono2" required>
                        <option value="">Seleccionar el producto</option>';
    
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['id_productos']}'>{$row['nombre']}</option>";
    }
    
    echo '      </select>
                </div>
                <button type="submit">Comparar</button>
            </form>
          </div>';
}
?>