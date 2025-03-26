-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2025 a las 17:19:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `versusphone`
--
CREATE DATABASE IF NOT EXISTS `versusphone` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `versusphone`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `nombre`, `descripcion`, `fecha_creacion`, `estado`) VALUES
(1, 'Gama Alta', 'Smartphones de alta gama con características premium y tecnología avanzada', '2025-01-01', 'Activo'),
(2, 'Gama Media', 'Smartphones de gama media con buenas características a un precio accesible', '2025-01-05', 'Activo'),
(3, 'Gama Baja', 'Smartphones de gama baja con funcionalidades básicas a un precio económico', '2025-01-10', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `dni` varchar(30) NOT NULL,
  `direccion_envio` varchar(50) NOT NULL,
  `direccion_facturacion` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`, `dni`, `direccion_envio`, `direccion_facturacion`, `email`, `telefono`, `fecha_nacimiento`, `observaciones`) VALUES
(1, 'Juan', 'Pérez García', '12345678A', 'Calle Mayor 10, 28013, Madrid', 'Calle Mayor 10, 28013, Madrid', 'juan.perez@example.com', '612345678', '1985-03-15', 'Cliente frecuente, prefiere envío por la mañana'),
(2, 'Maria', 'López Fernández', '87654321B', 'Avenida del Sol 45, 41001, Sevilla', 'Avenida del Sol 45, 41001, Sevilla', 'maria.lopez@example.com', '678901234', '1990-07-20', 'Sin observaciones'),
(3, 'Carlos', 'Rodríguez Sánchez', '56789012C', 'Calle Luna 3, 46001, Valencia', 'Calle Sol 8, 46002, Valencia', 'carlos.rodriguez@example.com', '634567890', '1982-12-10', 'Pendiente de confirmación de método de pago'),
(4, 'Ana', 'Martínez Ruiz', '34567890D', 'Calle Flor 22, 50004, Zaragoza', 'Calle Flor 22, 50004, Zaragoza', 'ana.martinez@example.com', '655678912', '1978-05-30', 'Cliente nuevo, solicitado entrega urgente'),
(5, 'José', 'Gómez Díaz', '78901234E', 'Paseo del Río 17, 08015, Barcelona', 'Calle Montaña 7, 08016, Barcelona', 'jose.gomez@example.com', '698765432', '1995-09-05', 'Requiere factura detallada para cada compra'),
(6, 'Lucía', 'Ramírez Blanco', '23456789F', 'Calle Olivo 12, 29001, Málaga', 'Calle Olivo 12, 29001, Málaga', 'lucia.ramirez@example.com', '612345987', '1988-01-25', 'Envía correos para notificaciones'),
(7, 'Pablo', 'Hernández López', '89012345G', 'Plaza Mayor 8, 47001, Valladolid', 'Plaza Mayor 8, 47001, Valladolid', 'pablo.hernandez@example.com', '644321567', '1986-11-18', 'Cliente premium, descuento aplicado en todas las compras'),
(8, 'Laura', 'Torres Vega', '32145678H', 'Calle Estrella 5, 24001, León', 'Calle Luna 7, 24001, León', 'laura.torres@example.com', '677654321', '1993-04-22', 'Entrega solo por las tardes'),
(9, 'Ricardo', 'Molina Pérez', '45678901I', 'Avenida Norte 30, 30001, Murcia', 'Avenida Norte 30, 30001, Murcia', 'ricardo.molina@example.com', '633221889', '1970-08-15', 'Prefiere no recibir ofertas promocionales'),
(10, 'Elena', 'Cruz Ortega', '90123456J', 'Calle Sur 20, 35001, Las Palmas', 'Calle Sur 20, 35001, Las Palmas', 'elena.cruz@example.com', '600112233', '1983-02-28', 'Cliente regular con historial de compras alto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `telefono`, `email`, `mensaje`) VALUES
(1, 'fran', '687591208', 'fran@gmail.com', 'hola'),
(2, 'jose', '666555444', 'jose@gmail.com', 'Queria poner una reclamación'),
(3, 'carlos', '555666444', 'fiera@gmail.com', 'hola vengo a hablar de mi libro'),
(4, 'edu', '777888999', 'edu@gmail.com', 'oye una pregunta, el dark souls bien?'),
(5, 'darksouls', '555444111', 'darksouls@gmail.com', 'elden ring es mejor'),
(6, 'jose', '888999777', 'josenavarro@gmail.com', 'oye mi pie esta mejor'),
(7, 'laura', '111222333', 'laura@gmail.com', 'muy bien fran eres un fiera un 10'),
(8, 'barrufet', '666555666', 'fiera78@gmail.com', 'no puedo poner a todos matricula de honor'),
(9, 'nestor', '222333444', 'motorista@fantasma.com', 'brum brum'),
(10, 'edu', '111222444', 'edu@gmail.com', 'metralletaaas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `id_detalleFactura` int(20) NOT NULL,
  `id_factura` int(20) NOT NULL,
  `id_producto` int(20) NOT NULL,
  `cantidad` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detallefactura`
--

INSERT INTO `detallefactura` (`id_detalleFactura`, `id_factura`, `id_producto`, `cantidad`, `subtotal`) VALUES
(1, 1, 1, 2, 450),
(2, 1, 2, 1, 50),
(3, 2, 3, 3, 280),
(4, 3, 4, 1, 650),
(5, 4, 5, 2, 180),
(6, 5, 6, 1, 120),
(7, 6, 7, 2, 400),
(8, 7, 8, 1, 550),
(9, 8, 9, 2, 300),
(10, 9, 10, 3, 750);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleproducto`
--

CREATE TABLE `detalleproducto` (
  `id_detalleProducto` int(20) NOT NULL,
  `id_productos` int(20) NOT NULL,
  `pantalla` varchar(200) NOT NULL,
  `procesador` varchar(200) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `AlmacenamientoInterno` varchar(100) NOT NULL,
  `sistemaOperativo` varchar(100) NOT NULL,
  `camaraPrincipal` varchar(200) NOT NULL,
  `camaraFrontal` varchar(200) NOT NULL,
  `bateria` varchar(200) NOT NULL,
  `conectividad` varchar(200) NOT NULL,
  `sonido` varchar(200) NOT NULL,
  `seguridad` varchar(200) NOT NULL,
  `resistenciaAguaPolvo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalleproducto`
--

INSERT INTO `detalleproducto` (`id_detalleProducto`, `id_productos`, `pantalla`, `procesador`, `ram`, `AlmacenamientoInterno`, `sistemaOperativo`, `camaraPrincipal`, `camaraFrontal`, `bateria`, `conectividad`, `sonido`, `seguridad`, `resistenciaAguaPolvo`) VALUES
(1, 1, '6.7\" OLED Super Retina XDR', 'A17 Pro Bionic', '8 GB', '256 GB / 512 GB / 1 TB', 'iOS 17', '48 MP + 12 MP + 12 MP', '12 MP', '4350 mAh', '5G, Wi-Fi 6E, Bluetooth 5.3', 'Estéreo espacial', 'Face ID', 'IP68'),
(2, 2, '6.7\" LTPO OLED', 'Tensor G3', '12 GB', '128 GB / 256 GB / 512 GB', 'Android 15', '50 MP + 48 MP + 12 MP', '11 MP', '5000 mAh', '5G, Wi-Fi 6E, Bluetooth 5.4', 'Estéreo', 'Huella en pantalla, Desbloqueo facial', 'IP68'),
(3, 3, '6.67\" AMOLED 144Hz', 'Snapdragon 8 Gen 3', '12 GB / 16 GB', '256 GB / 512 GB / 1 TB', 'MIUI 15 (Android 14)', '200 MP + 12 MP + 10 MP', '32 MP', '5000 mAh', '5G, Wi-Fi 7, Bluetooth 5.4', 'Estéreo Dolby Atmos', 'Huella lateral, Desbloqueo facial', 'IP68'),
(4, 4, '6.8\" Dynamic AMOLED 2X', 'Snapdragon 8 Gen 2', '12 GB', '256 GB / 512 GB / 1 TB', 'One UI 5.1 (Android 13)', '200 MP + 12 MP + 10 MP + 10 MP', '12 MP', '5000 mAh', '5G, Wi-Fi 6E, Bluetooth 5.3', 'Estéreo Dolby Atmos', 'Huella en pantalla, Desbloqueo facial', 'IP68'),
(5, 5, '6.5\" OLED 4K HDR', 'Snapdragon 8 Gen 2', '12 GB', '256 GB / 512 GB', 'Android 14', '52 MP + 12 MP + 12 MP', '12 MP', '5000 mAh', '5G, Wi-Fi 6E, Bluetooth 5.3', 'Estéreo', 'Huella lateral', 'IP65/IP68'),
(6, 6, '6.7\" AMOLED 120Hz', 'Snapdragon 8 Gen 3', '16 GB', '256 GB / 512 GB', 'OxygenOS (Android 14)', '50 MP + 48 MP + 32 MP', '32 MP', '5400 mAh', '5G, Wi-Fi 7, Bluetooth 5.4', 'Estéreo Dolby Atmos', 'Huella en pantalla, Desbloqueo facial', 'IP68'),
(7, 7, '6.8 pulgadas AMOLED', 'Snapdragon 8 Gen 2', '12 GB', '256 GB', 'Android 13', '50 MP', '32 MP', '5000 mAh', '5G, Wi-Fi 6E', 'Estéreo', 'Huella dactilar', 'IP68'),
(8, 8, '6.81 pulgadas OLED', 'Dimensity 9200+', '16 GB', '512 GB', 'Android 13', '108 MP', '16 MP', '4800 mAh', '5G, NFC', 'Dolby Atmos', 'Reconocimiento facial', 'IP54'),
(9, 9, '6.78 pulgadas AMOLED', 'Snapdragon 8 Gen 2', '16 GB', '512 GB', 'Android 13', '64 MP', '24 MP', '6000 mAh', 'Wi-Fi 6, 5G', 'Estu00e9reo', 'Sensor de huellas', 'Sin certificaciu00f3n'),
(10, 10, '6.67 pulgadas OLED', 'Snapdragon 8+ Gen 1', '12 GB', '256 GB', 'Android 13', '50 MP', '32 MP', '4600 mAh', '5G, Wi-Fi 6E', 'Estu00e9reo', 'Huella dactilar bajo pantalla', 'IP68');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciones`
--

CREATE TABLE `devoluciones` (
  `id_devoluciones` int(20) NOT NULL,
  `id_factura` int(20) NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `total_devuelto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `devoluciones`
--

INSERT INTO `devoluciones` (`id_devoluciones`, `id_factura`, `fecha_devolucion`, `motivo`, `total_devuelto`) VALUES
(1, 1, '2025-01-12', 'Producto defectuoso', 50),
(2, 3, '2025-01-18', 'Cambio por otro modelo', 100),
(3, 5, '2025-01-22', 'Error en el pedido', 120),
(4, 7, '2025-01-25', 'Producto no compatible', 150),
(5, 8, '2025-01-28', 'Devolución por insatisfacción', 100),
(6, 9, '2025-01-30', 'Devolución parcial', 200),
(7, 10, '2025-02-01', 'Producto dañado', 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(30) NOT NULL,
  `id_cliente` int(30) NOT NULL,
  `fecha` date NOT NULL,
  `total` double NOT NULL,
  `subtotal` double NOT NULL,
  `metodo_pago` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `id_cliente`, `fecha`, `total`, `subtotal`, `metodo_pago`) VALUES
(1, 1, '2025-01-10', 500, 450, 'Tarjeta de Crédito'),
(2, 2, '2025-01-12', 320, 280, 'Transferencia Bancaria'),
(3, 3, '2025-01-15', 700, 650, 'Paypal'),
(4, 4, '2025-01-18', 200, 180, 'Efectivo'),
(5, 5, '2025-01-20', 150, 120, 'Tarjeta de Crédito'),
(6, 6, '2025-01-22', 450, 400, 'Transferencia Bancaria'),
(7, 7, '2025-01-25', 600, 550, 'Paypal'),
(8, 8, '2025-01-28', 350, 300, 'Efectivo'),
(9, 9, '2025-01-30', 800, 750, 'Tarjeta de Crédito'),
(10, 10, '2025-01-30', 900, 850, 'Paypal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `precio` double NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre`, `marca`, `precio`, `img`) VALUES
(1, 'Iphone 15 Pro Max', 'Apple', 1299.99, 'img\\Iphone 15 pro\\f1.jpg'),
(2, 'Galaxy S23 Ultra', 'Samsung', 1199.99, 'img\\Samsung Galaxy S23 Ultra\\s23.jpg'),
(3, 'Pixel 9 pro', 'Google', 1299.99, 'img/Google Pixel 9 pro/g1.jpg'),
(4, 'Xperia 1 V', 'Sony', 1199.99, 'img\\sony xperia 1v\\s1.jpg'),
(5, 'OnePlus 12', 'OnePlus', 899.99, 'img\\OnePlus\\o1.jpg'),
(6, 'Mi 14 Pro', 'Xiaomi', 599.99, 'img/Xiaomi mi14T pro/x1.jpg'),
(7, 'Find X8 Pro', 'Oppo', 1099.99, 'img\\oppo\\x8.webp'),
(8, 'Magic6 Pro', 'Honor', 1049.99, 'img/honor/h6.jpg'),
(9, 'ROG Phone 7 Ultimate', 'Asus', 1399.99, 'img/rog/r7.jpg'),
(10, 'Edge 40 Pro', 'Motorola', 799.99, 'img/motorola/e40.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedores` int(30) DEFAULT NULL,
  `nombre` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedores`, `nombre`, `telefono`, `direccion`, `email`, `observaciones`) VALUES
(1, 'Tech Supplies Inc.', '612345678', 'Calle Mayor 12, Madrid', 'contact@techsupplies.com', 'Proveedor principal de smartphones Apple y Samsung'),
(2, 'Global Gadgets', '678901234', 'Avenida Central 45, Barcelona', 'info@globalgadgets.com', 'Entrega rápida, especializado en marcas chinas'),
(3, 'Premium Parts', '634567890', 'Calle Comercio 18, Valencia', 'sales@premiumparts.com', 'Ofrece garantía extendida en todos los productos'),
(4, 'Smart World', '655678912', 'Plaza Sol 30, Sevilla', 'support@smartworld.com', 'Proporciona descuentos para grandes pedidos'),
(5, 'ElectroPro', '698765432', 'Avenida Norte 22, Zaragoza', 'contact@electropro.com', 'Enfocado en dispositivos de gaming y accesorios'),
(6, 'GadgetHub', '612345987', 'Calle Sur 15, Málaga', 'info@gadgethub.com', 'Proveedor fiable, pero tiempos de entrega largos'),
(7, 'NextGen Distributors', '644321567', 'Paseo del Río 8, Bilbao', 'sales@nextgendist.com', 'Productos exclusivos de marcas emergentes'),
(8, 'Digital Warehouse', '677654321', 'Calle Estrella 25, Granada', 'contact@digitalwarehouse.com', 'Excelente servicio al cliente'),
(9, 'Tech Masters', '633221889', 'Avenida Este 17, Murcia', 'support@techmasters.com', 'Proveedores oficiales de Sony'),
(10, 'Elite Tech', '600112233', 'Calle Oeste 7, Las Palmas', 'info@elitetech.com', 'Proveedor premium, precios más altos pero fiable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(20) NOT NULL,
  `id_productos` int(20) NOT NULL,
  `stock` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablalegal`
--

CREATE TABLE `tablalegal` (
  `id_tablaLegal` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `contenido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tablalegal`
--

INSERT INTO `tablalegal` (`id_tablaLegal`, `nombre`, `contenido`) VALUES
(1, 'cookies', '<main>\n    <div class=\"container-cookies\">\n        <h1>Política de Cookies</h1>\n\n        <p>Esta Política de Cookies es parte integrante del <a href=\"paginaPrivacidad.html\">Aviso Legal</a>, <a href=\"paginaterminos.html\">Condiciones Generales de Contratación</a> y de la <a href=\"paginaPrivacidad.html\">Política de Privacidad</a> del sitio Web <a href=\"paginaInicio.html\">www.Versusphone.com</a> (en adelante, el \"Sitio Web\") propiedad de VERSUSPHONE (en adelante, \"VERSUSPHONE\").</p>\n\n        <h2>¿Qué es una Cookie?</h2>\n        <p>Las Cookies son archivos que contienen pequeñas cantidades de información que se descargan en el dispositivo del usuario cuando visita una página Web. Son esenciales para el funcionamiento de Internet, ayudan a mejorar la experiencia del usuario y garantizan el correcto funcionamiento del Sitio Web.</p>\n\n        <h2>Uso de Cookies por parte del prestador</h2>\n        <p>Al aceptar el anuncio de Cookies o configurarlas, acepta el uso de Cookies en su dispositivo. La desactivación de ciertas Cookies podría afectar la funcionalidad del Sitio Web.</p>\n\n        <h3>Cookies Técnicas</h3>\n        <p>Estas Cookies son esenciales para el funcionamiento del Sitio Web y no pueden ser desactivadas. Permiten funciones básicas como la navegación segura y la selección de preferencias.</p>\n\n        <h3>Cookies Funcionales o de Personalización</h3>\n        <p>Permiten recordar sus preferencias para mejorar la experiencia de usuario, como el idioma o la región de acceso.</p>\n        <table>\n            <tr>\n                <th>Proveedor</th>\n                <th>Finalidad</th>\n                <th>Caducidad</th>\n            </tr>\n            <tr>\n                <td>Doubleclick</td>\n                <td>Recomendaciones de productos y servicios</td>\n                <td>1 año</td>\n            </tr>\n            <tr>\n                <td>Criteo</td>\n                <td>Recomendaciones de productos y servicios</td>\n                <td>1 año</td>\n            </tr>\n        </table>\n\n        <h3>Cookies Analíticas</h3>\n        <p>Estas Cookies permiten analizar el comportamiento de los usuarios para mejorar el servicio. Entre ellas, se encuentran las de Google Analytics.</p>\n        <table>\n            <tr>\n                <th>Proveedor</th>\n                <th>Finalidad</th>\n                <th>Caducidad</th>\n            </tr>\n            <tr>\n                <td>Google Analytics</td>\n                <td>Análisis de visitantes, duración de la visita y otros datos estadísticos</td>\n                <td>2 años</td>\n            </tr>\n        </table>\n\n        <h3>Cookies Publicitarias</h3>\n        <p>Almacenan información sobre los hábitos de navegación para ofrecer publicidad relevante.</p>\n        <table>\n            <tr>\n                <th>Proveedor</th>\n                <th>Finalidad</th>\n                <th>Caducidad</th>\n            </tr>\n            <tr>\n                <td>Google Ad Manager</td>\n                <td>Análisis de navegación para mostrar anuncios relevantes</td>\n                <td>2 años</td>\n            </tr>\n            <tr>\n                <td>Facebook</td>\n                <td>Redes sociales</td>\n                <td>2 años</td>\n            </tr>\n            <tr>\n                <td>Twitter</td>\n                <td>Redes sociales</td>\n                <td>2 años</td>\n            </tr>\n            <tr>\n                <td>YouTube</td>\n                <td>Redes sociales</td>\n                <td>2 años</td>\n            </tr>\n            <tr>\n                <td>TikTok</td>\n                <td>Redes sociales</td>\n                <td>2 años</td>\n            </tr>\n        </table>\n\n        <h2>Control y Borrado de Cookies</h2>\n        <p>Puede gestionar sus preferencias de Cookies desde la configuración de su navegador:</p>\n        <ul>\n            <li><a href=\"https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-Web\">Firefox</a></li>\n            <li><a href=\"https://support.google.com/accounts/answer/61416?hl=es\">Chrome</a></li>\n            <li><a href=\"https://support.microsoft.com/es-es/help/17442/windows-internet-explorer-dele\">Explorer</a></li>\n            <li><a href=\"https://support.apple.com/es-es/guide/safari/sfri11471/mac\">Safari</a></li>\n            <li><a href=\"https://help.opera.com/Windows/11.50/es-ES/cookies.html\">Opera</a></li>\n            <li><a href=\"https://support.microsoft.com/es-es/microsoft-edge/permitir-temporalmente-las-cookies-y-los-datos...\">EDGE</a></li>\n        </ul>\n\n        <h2>Transferencias Internacionales</h2>\n        <p>Algunas Cookies pueden implicar transferencias internacionales de datos. Consulte las políticas de privacidad de cada proveedor para más información.</p>\n\n        <h2>Actualizaciones de la Política de Cookies</h2>\n        <p>VERSUSPHONE se reserva el derecho de modificar esta Política de Cookies en cualquier momento. Le recomendamos revisarla periódicamente.</p>\n\n        <p class=\"note\">Última actualización: [04/12/2024]</p>\n    </div>\n</main>'),
(2, 'terminos', '<main class=\"terminos\">\n    <div class=\"container-footer\">\n        <h1>Términos y Condiciones</h1>\n        <section>\n            <h2>1. Introducción</h2>\n            <p>Los presentes Términos y Condiciones regulan el acceso, navegación y uso del sitio web de Versusphone, así como la compra de productos y servicios ofrecidos a través de esta plataforma.</p>\n        </section>\n    \n        <section>\n            <h2>2. Condiciones de Compra</h2>\n            <ul>\n                <li><strong>Disponibilidad de productos:</strong> Todos los pedidos están sujetos a la disponibilidad de los productos.</li>\n                <li><strong>Precios:</strong> Los precios pueden cambiar sin previo aviso. Cualquier error será notificado antes de procesar el pedido.</li>\n                <li><strong>Pago Seguro:</strong> Versusphone utiliza sistemas de pago seguro mediante tarjeta, transferencia bancaria y financiación.</li>\n                <li><strong>Facturación:</strong> El cliente recibirá una factura electrónica con cada compra.</li>\n            </ul>\n        </section>\n    \n        <section>\n            <h2>3. Envíos y Entregas</h2>\n            <ul>\n                <li><strong>Plazos de entrega:</strong> Los pedidos se entregarán dentro de un plazo de 2 a 5 días hábiles.</li>\n                <li><strong>Costes de envío:</strong> Los gastos de envío se detallarán durante el proceso de compra.</li>\n                <li><strong>Incidencias en la entrega:</strong> Versusphone no se responsabiliza por retrasos causados por circunstancias ajenas a su control (huelgas, desastres naturales, etc.).</li>\n            </ul>\n        </section>\n    \n        <section>\n            <h2>4. Devoluciones y Cambios</h2>\n            <ul>\n                <li><strong>Plazo de devolución:</strong> Tienes 14 días naturales para devolver o cambiar un producto.</li>\n                <li><strong>Condiciones para la devolución:</strong> El producto debe estar en perfectas condiciones, con su embalaje original intacto.</li>\n                <li><strong>Productos excluidos:</strong> No se aceptarán devoluciones de productos personalizados, auriculares desprecintados, o software activado.</li>\n                <li><strong>Proceso de devolución:</strong> El cliente debe iniciar el proceso desde el portal web o en una tienda física.</li>\n                <li><strong>Reembolsos:</strong> El reembolso se efectuará en un plazo de 14 días tras la recepción y verificación del producto.</li>\n            </ul>\n        </section>\n    \n        <section>\n            <h2>5. Garantía de los Productos</h2>\n            <ul>\n                <li><strong>Productos nuevos:</strong> Todos los productos nuevos tienen una garantía de 3 años.</li>\n                <li><strong>Productos reacondicionados:</strong> Garantía de 1 año, salvo indicación contraria.</li>\n                <li><strong>Exclusiones:</strong> La garantía no cubre daños por mal uso, golpes, o manipulación indebida.</li>\n                <li><strong>Gestión de la garantía:</strong> El cliente debe contactar con el servicio técnico oficial para gestionar reparaciones o reemplazos.</li>\n            </ul>\n        </section>\n    \n        <section>\n            <h2>6. Política de Privacidad</h2>\n            <p>Versusphone se compromete a proteger la privacidad de sus clientes. Todos los datos personales se gestionan conforme al Reglamento General de Protección de Datos (RGPD). La información recopilada se utiliza para la gestión de pedidos y el envío de comunicaciones comerciales, siempre con el consentimiento del cliente.</p>\n        </section>\n    \n        <section>\n            <h2>7. Uso del Sitio Web</h2>\n            <ul>\n                <li><strong>Acceso al sitio:</strong> El acceso al sitio es gratuito, pero puede requerir registro para realizar compras.</li>\n                <li><strong>Comportamiento del usuario:</strong> El usuario se compromete a hacer un uso adecuado del contenido y servicios, respetando las leyes aplicables y los derechos de terceros.</li>\n                <li><strong>Prohibiciones:</strong> Está prohibido el uso del sitio para actividades fraudulentas, envío de virus o cualquier acción que pueda dañar los sistemas de Versusphone o de otros usuarios.</li>\n            </ul>\n        </section>\n    \n        <section>\n            <h2>8. Propiedad Intelectual</h2>\n            <p>Todo el contenido del sitio web, incluidos textos, imágenes, logotipos, gráficos y diseño, es propiedad de Versusphone o de sus proveedores y está protegido por las leyes de propiedad intelectual. Queda prohibida su reproducción, distribución o modificación sin el consentimiento previo y por escrito de Versusphone.</p>\n        </section>\n    \n        <section>\n            <h2>9. Responsabilidad Limitada</h2>\n            <p>Versusphone no será responsable por daños directos o indirectos derivados del uso del sitio web o de los productos adquiridos, excepto en los casos previstos por la ley.</p>\n        </section>\n    \n        <section>\n            <h2>10. Modificaciones de los Términos</h2>\n            <p>Versusphone se reserva el derecho a modificar estos Términos y Condiciones en cualquier momento. Las modificaciones entrarán en vigor desde su publicación en el sitio web.</p>\n        </section>\n    \n        <section>\n            <h2>11. Legislación Aplicable y Jurisdicción</h2>\n            <p>Estos términos se rigen por la legislación española. Cualquier disputa relacionada con estos términos se someterá a la jurisdicción de los tribunales del lugar de residencia del consumidor.</p>\n        </section>\n    </div>\n</main>'),
(3, 'privacidad', '<main>\n<section>\n    <h1>Política de Privacidad</h1>\n</section>\n\n<section>\n    <h2>1. IDENTIFICACIÓN</h2>\n    <p><strong>Responsable del Tratamiento:</strong> VERSUSPHONE (en adelante, el “VERSUSPHONE\")</p>\n    <p><strong>NIF:</strong> B-888777666</p>\n    <p><strong>Domicilio social:</strong> Calle de la telefonia 23, 46930 Quart de Poblet, Valencia (España)</p>\n    <p><strong>Delegado de Protección de Datos:</strong> Comité de protección de datos de “VERSUSPHONE ( href=\"mailto:dpo@versusphone.com\">dpo@versusphone.com)</p>\n</section>\n\n<section>\n    <h2>2. INFORMACIÓN</h2>\n    <p>Mediante la aceptación de la presente Política de Privacidad, el usuario (en adelante, el “Usuario” o, cuando corresponda, los “Usuarios”) queda informado de que los datos personales que facilite a través de la página Web <a href=\"paginaInicio.html\" target=\"_blank\">www.VersusPhone.es</a> (en adelante, el “Sitio Web”), así como los datos derivados de su navegación y aquellos otros datos que el Usuario pueda facilitar en un futuro en la misma, serán tratados por “VERSUSPHONE como responsable del tratamiento con las finalidades indicadas en la presente política.</p>\n    <p>El registro del Usuario en el Sitio Web implicará el registro y disfrute del Sitio Web, a fin de garantizar que los Usuarios que solicitan un registro en “VERSUSPHONE puedan adquirir los productos y disfrutar de los servicios que ofrece la entidad. El Usuario debe leer con atención esta Política de Privacidad, que ha sido redactada de forma clara y sencilla, para facilitar su comprensión, pudiendo el Usuario determinar, de forma libre y voluntaria si desea facilitar sus datos personales a “VERSUSPHONE.</p>\n</section>\n\n<section>\n    <h2>3. OBLIGATORIEDAD DE FACILITAR LOS DATOS</h2>\n    <p>Los datos solicitados en los formularios del Sitio Web son, con carácter general, obligatorios (salvo que en el campo requerido se especifique lo contrario) para cumplir con las finalidades para las que están siendo recabados. Por lo tanto, si el Usuario no facilita los mismos o no los facilita correctamente no podrán atenderse las solicitudes del Usuario, sin perjuicio de que podrá visualizar libremente ciertos contenidos del Sitio Web.</p>\n</section>\n\n<section>\n    <h2>4. ORIGEN DE LOS DATOS</h2>\n    <p>Los datos tratados por VERSUSPHONE para las finalidades enumeradas en el apartado siguiente provienen del propio usuario a través de los distintos formularios del Sitio Web y del uso del Sitio Web que realiza el Usuario y de su navegación por el misma (a través de cookies o dispositivos de almacenamiento y recuperación de datos), atendiendo a los consentimientos que, en su caso, otorgue el Usuario a “VERSUSPHONE.</p>\n</section>\n\n<section>\n    <h2>5. ¿CON QUÉ FINALIDADES, SOBRE QUÉ BASE DE LEGITIMACIÓN Y QUÉ DATOS TRATARÁ \"VERSUSPHONE\"?</h2>\n    <h3>a. Gestión de la relación contractual con el Usuario:</h3>\n    <p><strong>Finalidad del tratamiento:</strong></p>\n    <ul>\n        <li>Gestionar el alta y baja del Usuario registrado en el Sitio Web.</li>\n        <li>Gestionar, tramitar, enviar y dar seguimiento a las compras realizadas.</li>\n        <li>Contactar con el Usuario para finalizar el pedido si ha guardado su carrito de compra o ha guardado productos en su carrito de compra sin finalizar el proceso de pago.</li>\n        <li>Realizar encuestas de calidad y de satisfacción a fin de conocer la opinión de los Usuarios sobre los productos y servicios adquiridos.</li>\n    </ul>\n    <p><strong>Base de legitimación:</strong> El cumplimiento de la relación contractual entre el Usuario y PHONE HOUSE.</p>\n    <p><strong>Tipología de datos tratados:</strong></p>\n    <ul>\n        <li>Datos identificativos: nombre, apellidos, DNI.</li>\n        <li>Datos de contacto: correo electrónico, dirección postal, teléfono.</li>\n        <li>Datos de conexión: contraseña cifrada, usuario y login.</li>\n        <li>Cualquier otro dato e información facilitada por el Usuario a través del Sitio Web de “VERSUSPHONE.</li>\n    </ul>\n\n    <h3>b. Realizar encuestas de calidad y satisfacción a los Usuarios:</h3>\n    <p><strong>Finalidad del tratamiento:</strong> Realizar encuestas de calidad y de satisfacción a fin de conocer la opinión de los Usuarios sobre los productos y servicios adquiridos.</p>\n    <p><strong>Base de legitimación:</strong> El interés legítimo del responsable del tratamiento.</p>\n    <p><strong>Tipología de datos tratados:</strong></p>\n    <ul>\n        <li>Datos identificativos: nombre, apellidos.</li>\n        <li>Datos de contacto: dirección de correo electrónico, teléfono, correo postal.</li>\n        <li>Datos sobre los servicios o productos contratados: producto o servicio.</li>\n        <li>Otros datos que pueda facilitar el Usuario en la encuesta.</li>\n    </ul>\n\n    <h3>c. Dar respuesta a las cuestiones planteadas por el Usuario a través de los canales de contacto habilitados:</h3>\n    <p><strong>Finalidad del tratamiento:</strong> Gestionar, tramitar y dar soporte a las peticiones, solicitudes, incidencias, reclamaciones o consultas del Usuario realizadas a través de los distintos canales de comunicación puestos a disposición de este por parte de \"VERSUSPHONE\".</p>\n    <p><strong>Base de legitimación:</strong> El consentimiento prestado por el Usuario.</p>\n    <p><strong>Tipología de datos tratados:</strong></p>\n    <ul>\n        <li>Datos identificativos: nombre, apellidos, DNI.</li>\n        <li>Datos de contacto: dirección de correo electrónico, dirección postal, teléfono.</li>\n        <li>Otros datos relacionados con la consulta, reclamación o petición planteada.</li>\n    </ul>\n</section>\n<section>\n    <h2>6. ¿DURANTE CUÁNTO TIEMPO TRATARÁ VERSUSPHONE LOS DATOS DEL USUARIO?</h2>\n    <p>Los datos personales del Usuario serán tratados por PHONE HOUSE durante el tiempo necesario para cumplir con las finalidades para las que fueron recogidos y mientras no se solicite su supresión. Posteriormente, los datos serán conservados, debidamente bloqueados, durante el plazo en que pudieran derivarse responsabilidades legales de la relación mantenida con el Usuario.</p>\n</section>\n\n<section>\n    <h2>7. ¿QUÉ DATOS DEL USUARIO TRATARÁ VERSUSPHONE?</h2>\n    <p>VERSUSPHONE podrá tratar las siguientes categorías de datos del Usuario:</p>\n    <ul>\n        <li>Datos identificativos: nombre, apellidos, documento de identidad (DNI, NIE, pasaporte).</li>\n        <li>Datos de contacto: dirección de correo electrónico, dirección postal, número de teléfono.</li>\n        <li>Datos de conexión: nombre de usuario, contraseña (cifrada), dirección IP.</li>\n        <li>Datos económicos, financieros o de seguros: detalles de pago, número de cuenta bancaria, tarjetas de crédito o débito.</li>\n        <li>Datos relacionados con transacciones de bienes y servicios: productos y servicios adquiridos.</li>\n    </ul>\n</section>\n\n<section>\n    <h2>8. ¿CON QUÉ DESTINATARIOS SE COMPARTIRÁN LOS DATOS DEL USUARIO?</h2>\n    <p>Los datos personales del Usuario podrán ser comunicados a:</p>\n    <ul>\n        <li><strong>Administraciones Públicas:</strong> en los casos previstos por la ley.</li>\n        <li><strong>Entidades bancarias y financieras:</strong> para la gestión de cobros y pagos.</li>\n        <li><strong>Empresas de transporte y logística:</strong> para el envío de productos adquiridos.</li>\n        <li><strong>Proveedores de servicios tecnológicos:</strong> para la gestión y mantenimiento del Sitio Web.</li>\n        <li><strong>Asesorías y consultorías legales:</strong> en caso de que sea necesario para cumplir con obligaciones legales o defender intereses legales de VERSUSPHONE.</li>\n    </ul>\n</section>\n\n<section>\n    <h2>9. TRANSFERENCIAS INTERNACIONALES DE DATOS</h2>\n    <p>VERSUSPHONE no realiza transferencias internacionales de datos fuera del Espacio Económico Europeo (EEE). En caso de que en el futuro se lleven a cabo, se garantizará que las mismas cumplan con las exigencias del Reglamento General de Protección de Datos (RGPD), mediante la suscripción de cláusulas contractuales tipo aprobadas por la Comisión Europea.</p>\n</section>\n\n<section>\n    <h2>10. RESPONSABILIDAD DEL USUARIO</h2>\n    <p>El Usuario garantiza que es mayor de edad y que los datos que facilita a VERSUSPHONE son verdaderos, exactos, completos y actualizados. El Usuario será responsable de cualquier daño o perjuicio, directo o indirecto, que pudiera ocasionarse como consecuencia del incumplimiento de esta obligación.</p>\n</section>\n\n<section>\n    <h2>11. DERECHOS DEL USUARIO</h2>\n    <p>El Usuario puede ejercer los siguientes derechos en relación con sus datos personales:</p>\n    <ul>\n        <li><strong>Derecho de acceso:</strong> Obtener confirmación sobre si VERSUSPHONE está tratando sus datos personales y acceder a ellos.</li>\n        <li><strong>Derecho de rectificación:</strong> Solicitar la corrección de los datos inexactos o incompletos.</li>\n        <li><strong>Derecho de supresión:</strong> Solicitar la eliminación de sus datos personales cuando ya no sean necesarios para los fines para los cuales fueron recogidos.</li>\n        <li><strong>Derecho a la limitación del tratamiento:</strong> Solicitar la restricción del tratamiento de sus datos en determinadas circunstancias.</li>\n        <li><strong>Derecho de portabilidad:</strong> Solicitar la transferencia de sus datos a otro responsable del tratamiento en un formato estructurado, de uso común y lectura mecánica.</li>\n        <li><strong>Derecho de oposición:</strong> Oponerse al tratamiento de sus datos personales cuando este se base en el interés legítimo de VERSUSPHONE.</li>\n    </ul>\n    <p>El Usuario podrá ejercer estos derechos enviando una solicitud por escrito a la dirección postal de VERSUSPHONE o a través del correo electrónico: <a href=\"mailto:dpo@versusphone.es\">dpo@versusphone.es</a>, adjuntando una copia de su documento de identidad.</p>\n</section>\n\n<section>\n    <h2>12. MEDIDAS DE SEGURIDAD</h2>\n    <p>VERSUSPHONE tratará los datos del Usuario en todo momento de forma absolutamente confidencial y guardando el deber de secreto respecto de los mismos, de conformidad con lo previsto en la normativa de aplicación, adoptando para ello las medidas técnicas y organizativas necesarias para garantizar la seguridad de sus datos y evitar su alteración, pérdida, tratamiento o acceso no autorizado, habida cuenta del estado de la tecnología, la naturaleza de los datos almacenados y los riesgos a los que están expuestos.</p>\n</section>\n\n<section>\n    <h2>13. CAMBIOS EN LA POLÍTICA DE PRIVACIDAD</h2>\n    <p>VERSUSPHONE se reserva el derecho a modificar la presente Política de Privacidad para adaptarla a novedades legislativas, jurisprudenciales o interpretativas de la Agencia Española de Protección de Datos. En dichos supuestos, VERSUSPHONE anunciará en el Sitio Web los cambios introducidos con razonable antelación a su puesta en práctica.</p>\n</section>\n\n<section>\n    <h2>14. CONTACTO</h2>\n    <p>Para cualquier duda o consulta sobre esta Política de Privacidad, el Usuario puede contactar con el Delegado de Protección de Datos de VERSUSPHONE en la dirección de correo electrónico: <a href=\"mailto:dpo@versusphone.es\">dpo@versusphone.es</a>.</p>\n</section>\n\n\n</main>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(30) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `foto_perfil` varchar(100) NOT NULL,
  `contrasenya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre_usuario`, `nombre`, `apellidos`, `telefono`, `email`, `direccion`, `foto_perfil`, `contrasenya`) VALUES
(1, 'Fran', 'Francisco', 'Davo Cabrera', '687591208', 'frandavowork@gmail.con', 'calle 311', '', '$2y$10$h26RgzF5ObmP4Z1HM1omje9zxWk2A82EQbffTe1Hw8nI2sSTSEVHS'),
(2, 'Makina93', 'Jose', 'Navarro', '654123548', 'joseputoamo@gmail.com', 'calle 2', '', '$2y$10$pRbneiK5OxMVC6WRZ7Y2we4tiiVmQGHuc5E83zlBaFZenEmEgQJ1a'),
(3, 'Yosemite', 'Josema', 'putoamo', '555666777', 'YosemiteElPutoAmo@gmail.com', 'calle 3', '', '$2y$10$nZzGEhoZInZYhIEBrHavwedRDlVoPeyky/gL76WxZwO19oV62qzwq'),
(4, 'Edu99', 'Edu', 'Moreno', '444333111', 'eduElMortal@gmail.com', 'calle 4', '', '$2y$10$xHoi7gqsdjSk3rvATjUrY.Vrjbv6fn6AddmNctPahmflbOHh0Z5jq'),
(5, 'JosePascual', 'Jose', 'Pascual', '669988552', 'pascual@gmail.com', 'calle 5', '', '$2y$10$iSH7fbMkSc10Rh17CmRNMedF/91WgCSBGs5A3SoYOL05amlAFKNm.'),
(6, 'JoseDelgado', 'Jose', 'Delgado', '000001111', 'pasandoHambre@gmail.com', 'calle fortnite', '', '$2y$10$6FAB7htkPJ2uq9YPeRsmsOjWnkeKtsdl695Dg3zo5u0W7bSb8xhWK'),
(7, 'EduRodriguez', 'Edu', 'Rodriguez', '222333888', 'elputoamo@gmail.com', 'calle chaleco antibalas', '', '$2y$10$oKA8daIY6pVowaV8PocWi.eDF82loE0r/6jNYN.81HysFlrdnPkIC'),
(8, 'laura', 'Laura', 'Profesora', '123455568', 'laura@gmail.com', 'calle php', '', '$2y$10$YgXYUHlwlWq.tyFGYG.uou/yBAlQ4dXxHS5s9aVYZvA3V09Kf3A3m'),
(9, 'alba', 'Alba', 'Profesora', '555666888', 'alba@gmail.com', 'calle holiwis', '', '$2y$10$4UaMt1EjaeUkMv90SN4tG.VeaAs3RHbLeXTZ6Z8cAXnRqAj5CzW6C'),
(10, 'perico', 'Perico', 'Palotes', '888999222', 'perico@gmail.com', 'calle de los palotes', '', '$2y$10$E95oEnPIhJp3lvUkV0UgYu4CJZk8UZ2v0q3Ce44zxXvqYP5pAy4rO'),
(11, 'perico', 'Perico', 'Garcia', '777888222', 'perico@gmail.com', 'calle 78', '', '$2y$10$GyRnwNwHvo.25dzWMDNBleMpzEXkAhTPOTXCLtVJpDVzjwklmNcpS'),
(12, 'barrufet', 'Jose', 'Luis', '333556645', 'fiera@gmail.com', 'calle breakdance', '', '$2y$10$qzE8WUt6R4B2RJwg6aVQ7e7xACfzTveA/CnHsPl9MR9Xbl0eNHkP6'),
(13, 'anton', 'Anton', 'Miroslav', '123554483', 'miroslav@gmail.com', 'calle putin', '', '$2y$10$FjJ8UWxkV9B/gNkd.utCcODv0pPfTawCHxVYQeRPXvsH2fqlAmuyO'),
(14, 'portatil', 'Portatil', 'Hp', '999888777', 'portatil@gmail.com', 'calle cable', '', '$2y$10$5NmaQ3ruXeMtWfwqI0Csvew8unhqfUwTaoj6Vf09M0SQYWD9WQgLC'),
(15, 'Dalinar', 'Francisco', 'Davo Cabrera', '687591208', 'frandelmani@gmail.com', 'Calle reverendo padre jose palacios ', 'img\\cr7.jpg', '$2y$10$eMG3EApcC0QizqlCz3/ew./rg/8jlm4V0qchKF028WUfjR9eVr8uq'),
(16, 'La boba', 'Maria', 'Tarin Mora', '486542122', 'Minion@gmail.com', 'Carrer de corazon de lucky', 'img\\miniom.jpg', '$2y$10$jaPmQ27aeDbEaeGSryauAOQqdzdJyKL6U7ZG4Zc87M7Kh/JiAblfW'),
(17, 'PacoDeManises', 'Paco', 'Davo Motes', '617922448', 'pacodavomotes62@gmail.com', 'calle quart', '', '$2y$10$Lqs0KARnWITd0j78F/duNOXV/THDc7NmoD0A1bkeOFcuINK1ZT/Wu'),
(18, 'Minired', 'David', 'Alonso', '888555444', 'miniredgames@gmail.com', 'calle reverendo padre jose palacios', '', '$2y$10$heoo9rWq1QNJ2uoioAU/BuA/mtR3G7uWbOFGBlaba2lx9QIEpIeM2'),
(19, 'Felipe', 'felipe', 'borbon', '9999999999', 'cosa@gmail.com', 'calle sangre azul', '', '$2y$10$LfjZfEhUItZhFWWjCKcnuuU6D5C5QBqBtMXhwHScdJRxK6HCpLPGG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`id_detalleFactura`),
  ADD KEY `id_factura` (`id_factura`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `detalleproducto`
--
ALTER TABLE `detalleproducto`
  ADD PRIMARY KEY (`id_detalleProducto`),
  ADD KEY `id_productos` (`id_productos`);

--
-- Indices de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD PRIMARY KEY (`id_devoluciones`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `id_productos` (`id_productos`);

--
-- Indices de la tabla `tablalegal`
--
ALTER TABLE `tablalegal`
  ADD PRIMARY KEY (`id_tablaLegal`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `id_detalleFactura` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detalleproducto`
--
ALTER TABLE `detalleproducto`
  MODIFY `id_detalleProducto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  MODIFY `id_devoluciones` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tablalegal`
--
ALTER TABLE `tablalegal`
  MODIFY `id_tablaLegal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
