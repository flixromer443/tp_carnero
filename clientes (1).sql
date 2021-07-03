-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2021 a las 02:43:41
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `altas`
--

CREATE TABLE `altas` (
  `id` int(11) NOT NULL DEFAULT 0,
  `fecha_de_alta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `id_municipio` int(11) DEFAULT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `correo_electronico`, `direccion`, `id_municipio`, `activo`) VALUES
(1, 'greys', 'Rosalia', 'lalala@gmail.com', 'rivarola 680', 3, 0),
(8, 'Felix', 'Echegaray ', NULL, 'Los cipreses 170', 4, 0),
(9, 'Ramiro', 'Sanchez', NULL, 'carcano4231', 3, 0),
(10, 'Ricardo', 'Lopez ', 'ricardo@hotmail.com', 'carcano345', 4, 1),
(11, 'Gutierres', 'Oriana ', 'Ori@hotmail.com', 'Los cipreses 170', 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `municipio`) VALUES
(1, 'Adolfo Alsina'),
(2, 'Adolfo Gonzales Chaves'),
(3, 'Alberti'),
(4, 'Almirante Brown'),
(5, 'Avellaneda'),
(6, 'Ayacucho'),
(7, 'Azul'),
(8, 'BahÃ­a Blanca'),
(9, 'Balcarce'),
(10, 'Baradero'),
(11, 'Arrecifes'),
(12, 'Benito JuÃ¡rez'),
(13, 'Berazategui'),
(14, 'Berisso'),
(15, 'BolÃ­var'),
(16, 'Bragado'),
(17, 'Brandsen'),
(18, 'Campana'),
(19, 'CaÃ±uelas'),
(20, 'CapitÃ¡n Sarmiento'),
(21, 'Carlos Casares'),
(22, 'Carlos Tejedor'),
(23, 'Carmen de Areco'),
(24, 'Castelli'),
(25, 'ColÃ³n'),
(26, 'Coronel de Marina Leonardo Rosales'),
(27, 'Coronel Dorrego'),
(28, 'Coronel Pringles'),
(29, 'Coronel SuÃ¡rez'),
(30, 'Chacabuco'),
(31, 'ChascomÃºs'),
(32, 'Chivilcoy'),
(33, 'Daireaux'),
(34, 'Dolores'),
(35, 'Ensenada'),
(36, 'Escobar'),
(37, 'Esteban EcheverrÃ­a'),
(38, 'ExaltaciÃ³n de la Cruz'),
(39, 'Ezeiza'),
(40, 'Florencio Varela'),
(41, 'Florentino Ameghino'),
(42, 'General Alvarado'),
(43, 'General Alvear'),
(44, 'General Arenales'),
(45, 'General Belgrano'),
(46, 'General Guido'),
(47, 'General Juan Madariaga'),
(48, 'General la Madrid'),
(49, 'General las Heras'),
(50, 'General Lavalle'),
(51, 'General Paz'),
(52, 'General Pinto'),
(53, 'General PueyrredÃ³n'),
(54, 'General RodrÃ­guez'),
(55, 'General San MartÃ­n'),
(56, 'General Viamonte'),
(57, 'General Villegas'),
(58, 'GuaminÃ­'),
(59, 'HipÃ³lito Yrigoyen'),
(60, 'Hurlingham'),
(61, 'ItuzaingÃ³'),
(62, 'JosÃ© C. Paz'),
(63, 'JunÃ­n'),
(64, 'La Costa'),
(65, 'La Matanza'),
(66, 'LanÃºs'),
(67, 'La Plata'),
(68, 'Laprida'),
(69, 'Las Flores'),
(70, 'Leandro N. Alem'),
(71, 'Lezama'),
(72, 'Lincoln'),
(73, 'LoberÃ­a'),
(74, 'Lobos'),
(75, 'Lomas de Zamora'),
(76, 'LujÃ¡n'),
(77, 'Magdalena'),
(78, 'MaipÃº'),
(79, 'Malvinas Argentinas'),
(80, 'Mar Chiquita'),
(81, 'Marcos Paz'),
(82, 'Mercedes'),
(83, 'Merlo'),
(84, 'Monte'),
(85, 'Monte Hermoso'),
(86, 'Moreno'),
(87, 'MorÃ³n'),
(88, 'Navarro'),
(89, 'Necochea'),
(90, '9 de Julio'),
(91, 'OlavarrÃ­a'),
(92, 'Patagones'),
(93, 'PehuajÃ³'),
(94, 'Pellegrini'),
(95, 'Pergamino'),
(96, 'Pila'),
(97, 'Pilar'),
(98, 'Pinamar'),
(99, 'Presidente PerÃ³n'),
(100, 'PuÃ¡n'),
(101, 'Punta Indio'),
(102, 'Quilmes'),
(103, 'Ramallo'),
(104, 'Rauch'),
(105, 'Rivadavia'),
(106, 'Rojas'),
(107, 'Roque PÃ©rez'),
(108, 'Saavedra'),
(109, 'Saladillo'),
(110, 'Salto'),
(111, 'SalliquelÃ³'),
(112, 'San AndrÃ©s de Giles'),
(113, 'San Antonio de Areco'),
(114, 'San Cayetano'),
(115, 'San Fernando'),
(116, 'San Isidro'),
(117, 'San Miguel'),
(118, 'San NicolÃ¡s'),
(119, 'San Pedro'),
(120, 'San Vicente'),
(121, 'Suipacha'),
(122, 'Tandil'),
(123, 'TapalquÃ©'),
(124, 'Tigre'),
(125, 'Tordillo'),
(126, 'Tornquist'),
(127, 'Trenque Lauquen'),
(128, 'Tres Arroyos'),
(129, 'Tres de Febrero'),
(130, 'Tres Lomas'),
(131, '25 de Mayo'),
(132, 'Vicente LÃ³pez'),
(133, 'Villa Gesell'),
(134, 'Villarino'),
(135, 'ZÃ¡rate');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `altas`
--
ALTER TABLE `altas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
