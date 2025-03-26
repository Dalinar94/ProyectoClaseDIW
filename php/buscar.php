<?php
$search = isset($_GET['search']) ? $_GET['search'] : '';

switch (strtolower($search)) {
    case 'productos':
        header('Location: ../indexProductos.php?search=' . urlencode($search));
        break;
    case 'contacto':
        header('Location: ../paginaContacto.php');
        break;
    case 'carrito':
        header('Location: ../carrito.php');
        break; 
    case 'inicio':
        header('Location: ../paginaInicio.php');
        break;
    case 'cookies':
        header('Location: ../paginaCookies.php');
        break; 
    case 'privacidad':
        header('Location: ../paginaPrivacidad.php');
        break;      
    case 'terminos':
    case 'termino':
        header('Location: ../paginaterminos.php');
        break; 
    case 'comparador':
        header('Location: ../paginacomparador.php');
        break; 
    case 'mi cuenta':
    case 'cuenta':
        header('Location: ../perfil.php');
        break;  
    case 'login':
        header('Location: ../paginalogin.php');
        break;
    case'producto':
        header('Location: ../indexProductos.php');
        break;
    // Agrega más casos según sea necesario
    
}
exit;
?> 