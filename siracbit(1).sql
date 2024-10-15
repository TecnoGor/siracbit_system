-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 10:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siracbit`
--

-- --------------------------------------------------------

--
-- Table structure for table `act_formativas`
--

CREATE TABLE `act_formativas` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `estado` varchar(35) DEFAULT NULL,
  `municipio` varchar(35) DEFAULT NULL,
  `parroquia` varchar(35) DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `nActividad` varchar(30) DEFAULT NULL,
  `tActividad` varchar(30) DEFAULT NULL,
  `fInicio` date DEFAULT NULL,
  `fCierre` date DEFAULT NULL,
  `especial` varchar(15) DEFAULT NULL,
  `inicial` varchar(15) DEFAULT NULL,
  `pPrimero` int(11) DEFAULT NULL,
  `pSegundo` int(11) DEFAULT NULL,
  `pTercero` int(11) DEFAULT NULL,
  `pCuarto` int(11) DEFAULT NULL,
  `pQuinto` int(11) DEFAULT NULL,
  `pSexto` int(11) DEFAULT NULL,
  `tPrimero` int(11) DEFAULT NULL,
  `tSegundo` int(11) DEFAULT NULL,
  `tTercero` int(11) DEFAULT NULL,
  `tCuarto` int(11) DEFAULT NULL,
  `tQuinto` int(11) DEFAULT NULL,
  `docente` varchar(30) DEFAULT NULL,
  `fecha_realizacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `caracterizacion`
--

CREATE TABLE `caracterizacion` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `title_recurso` varchar(70) DEFAULT NULL,
  `lugar_elaboracion` varchar(50) DEFAULT NULL,
  `fecha_elaboracion` date DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `tipo_recurso` varchar(60) DEFAULT NULL,
  `idioma` varchar(50) DEFAULT NULL,
  `time_navegacion` varchar(30) DEFAULT NULL,
  `tema_generador` varchar(50) DEFAULT NULL,
  `nivel_educativo` varchar(50) DEFAULT NULL,
  `age` varchar(30) DEFAULT NULL,
  `tema_conexo` varchar(30) DEFAULT NULL,
  `otras_areas` varchar(80) DEFAULT NULL,
  `finalidad_educativa` varchar(60) DEFAULT NULL,
  `tipo_archivo` varchar(50) DEFAULT NULL,
  `tipo_procesador` varchar(50) DEFAULT NULL,
  `v_procesador` varchar(50) DEFAULT NULL,
  `c_minima` varchar(50) DEFAULT NULL,
  `size_recurso` varchar(50) DEFAULT NULL,
  `perifericos` text DEFAULT NULL,
  `internet` varchar(15) DEFAULT NULL,
  `s_requerido` varchar(50) DEFAULT NULL,
  `t_herramientas` text DEFAULT NULL,
  `archivo` varchar(30) DEFAULT NULL,
  `fuente` varchar(30) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `institucion` varchar(50) DEFAULT NULL,
  `nombre_validador` varchar(100) DEFAULT NULL,
  `i_pertenece` varchar(30) DEFAULT NULL,
  `fecha_realizacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caracterizacion`
--

INSERT INTO `caracterizacion` (`id`, `usuario`, `title_recurso`, `lugar_elaboracion`, `fecha_elaboracion`, `version`, `tipo_recurso`, `idioma`, `time_navegacion`, `tema_generador`, `nivel_educativo`, `age`, `tema_conexo`, `otras_areas`, `finalidad_educativa`, `tipo_archivo`, `tipo_procesador`, `v_procesador`, `c_minima`, `size_recurso`, `perifericos`, `internet`, `s_requerido`, `t_herramientas`, `archivo`, `fuente`, `autor`, `institucion`, `nombre_validador`, `i_pertenece`, `fecha_realizacion`) VALUES
(4, 'jesus2', 'Materiales', 'Salon B', '2024-09-01', '5', 'Interno', 'Español', '5 minutos', 'Ciencias', '5', '5', 'Varios', 'Castellano', 'Educacion Basica', 'Completo', 'i5 ', '3,20 Ghz', '8Gb', '60cm', 'Mouse, teclado', 'Si', 'Linux 21.2', 'Destornilladores, memoria USB y probador de fuente de poder.', '1', '1', 'Jesus Mireles', 'Arturo Michelena', 'Arturo Quintero - Tecnico', 'Arturo Michelena', '2024-10-02 23:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `eformativo`
--

CREATE TABLE `eformativo` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `nEncuentro` varchar(35) DEFAULT NULL,
  `tEncuentro` varchar(35) DEFAULT NULL,
  `responsable` varchar(35) DEFAULT NULL,
  `participantes` int(11) DEFAULT NULL,
  `duracion` varchar(35) DEFAULT NULL,
  `modalidad` varchar(35) DEFAULT NULL,
  `fInicio` date DEFAULT NULL,
  `fCierre` date DEFAULT NULL,
  `dirigido` varchar(35) DEFAULT NULL,
  `objetivos` varchar(35) DEFAULT NULL,
  `ejeTematico` varchar(35) DEFAULT NULL,
  `aAprendizaje` text DEFAULT NULL,
  `fecha_realizacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `escuelas`
--

CREATE TABLE `escuelas` (
  `id` int(11) NOT NULL,
  `plantel` varchar(100) NOT NULL,
  `dea` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `escuelas`
--

INSERT INTO `escuelas` (`id`, `plantel`, `dea`, `direccion`, `nivel`, `estatus`) VALUES
(1, 'C.E.I. ARTURO MICHELENA', 'OD02730105', 'ENTRE EL BLOQUE 16 Y 17 AL LADO DE LA IGLESIA SAN FRANCISCO DE ASIS', 'Primaria', 0),
(2, 'E.B.N LUIS ENRIQUE MARMOL', 'OD02390105', 'SECTOR LA CAÑADA ENTRE LOS BLOQUES 19, 20 Y 21. 23 DE ENERO.', 'Primaria', 1),
(3, 'E.B.N. DEPARTAMENTO VARGAS', 'OD07630105', 'SECTOR LA CAÑADA FRENTE AL BLOQUE 17. LA CAÑADA 23 DE ENERO.', 'Primaria', 1),
(4, 'U.E.N. LUISA CACERES DE ARISMENDI', 'OD16160105', 'CALLE GUAICAIPURO SECTOR EL PLAN 23 DE ENERO.\n', 'Primaria', 1),
(5, 'E.T.C.R. MANUEL PALACIO FAJARDO', 'S0012D0105', '23 DE ENERO. ZONA CENTRAL. ENTRE BLOQUE 28 Y 30.', 'Media', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rfotografico`
--

CREATE TABLE `rfotografico` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `nActividad` varchar(35) DEFAULT NULL,
  `proposito` varchar(35) DEFAULT NULL,
  `f1Fecha` date DEFAULT NULL,
  `f1Nombre` varchar(35) DEFAULT NULL,
  `f1Archivo` text DEFAULT NULL,
  `f2Fecha` date DEFAULT NULL,
  `f2Nombre` varchar(35) DEFAULT NULL,
  `f2Archivo` text DEFAULT NULL,
  `f3Fecha` date DEFAULT NULL,
  `f3Nombre` varchar(35) DEFAULT NULL,
  `f3Archivo` text DEFAULT NULL,
  `f4Fecha` date DEFAULT NULL,
  `f4Nombre` varchar(35) DEFAULT NULL,
  `f4Archivo` text DEFAULT NULL,
  `fecha_realizacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `nombre_rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`rol_id`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Admin. Escuela'),
(3, 'Técnico'),
(4, 'Profesor');

-- --------------------------------------------------------

--
-- Table structure for table `r_educativos`
--

CREATE TABLE `r_educativos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `estado` varchar(35) DEFAULT NULL,
  `rEducativo` varchar(35) DEFAULT NULL,
  `tRecurso` varchar(35) DEFAULT NULL,
  `fElaboracion` date DEFAULT NULL,
  `inicial` varchar(35) DEFAULT NULL,
  `pPrimero` int(11) DEFAULT NULL,
  `pSegundo` int(11) DEFAULT NULL,
  `pTercero` int(11) DEFAULT NULL,
  `pCuarto` int(11) DEFAULT NULL,
  `pQuinto` int(11) DEFAULT NULL,
  `pSexto` int(11) DEFAULT NULL,
  `tPrimero` int(11) DEFAULT NULL,
  `tSegundo` int(11) DEFAULT NULL,
  `tTercero` int(11) DEFAULT NULL,
  `tCuarto` int(11) DEFAULT NULL,
  `tQuinto` int(11) DEFAULT NULL,
  `inlineCheckbox1` varchar(25) DEFAULT NULL,
  `inlineCheckbox2` varchar(25) DEFAULT NULL,
  `inlineCheckbox3` varchar(25) DEFAULT NULL,
  `inlineCheckbox4` varchar(25) DEFAULT NULL,
  `inlineCheckbox5` varchar(25) DEFAULT NULL,
  `inlineCheckbox6` varchar(25) DEFAULT NULL,
  `inlineCheckbox7` varchar(25) DEFAULT NULL,
  `inlineCheckbox8` varchar(25) DEFAULT NULL,
  `inlineCheckbox9` varchar(25) DEFAULT NULL,
  `inlineCheckbox10` varchar(25) DEFAULT NULL,
  `inlineCheckbox11` varchar(25) DEFAULT NULL,
  `docente` varchar(35) DEFAULT NULL,
  `fecha_realizacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `rol` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `escuelaId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre`, `usuario`, `clave`, `rol`, `estado`, `escuelaId`) VALUES
(1, 'Alejandro', 'admin', '$2y$10$ttge5u5eEP1dfdXgFZkoSujFJK9UYYlbF5fxsFRNS6EocmMPwhi5K', 1, 1, NULL),
(2, 'Jesus Mireles', 'jesus2', '$2y$10$6wV87/KCz/G.wLAxKzxW0uQvDnkwI61Ogl4lQp.c1Fe/QNA.t6mI2', 2, 1, 4),
(3, 'Andres Gonzalez', 'andres2', '$2y$10$NRNhbzPgwxb8TKqrVqZopu7Pwe.9eJVtK7srAcJWSSAtGXKv03nx.', 2, 0, 4),
(4, 'Usuario de Sistema', 'siracbit', '$2y$10$/dt7VoAbJrbZMdXwh7Mkt.9HiJsNqaTk8Fc6Wq4edjObMWvW7bxg2', 1, 1, NULL),
(5, 'Jose Garcia', 'garcia1', '$2y$10$kFo20zIw6zDyfQ4sNr6jKO8X5v9jHNsPrJtikIToMtDLBdKO//ANa', 4, 1, 4),
(6, 'Edward Castañeda', 'edward1', '$2y$10$cdQw/DY/V553w8prcnkFFupiR4jjOHGMm80Zyt7IsbSINnxaHc.Mi', 4, 1, 4),
(7, 'Yovanny Urbina', 'urbina1', '$2y$10$mGZ21N9I50.HwgbnD3KRT.W1oMZoeWTqg10PE8FtJooDQ4zfahQ6q', 1, 1, NULL),
(8, 'Nellys Malave', 'Nmalave', '$2y$10$ZuzLUbTZB7o10xAxyiGbFu4OVgI0hgzs.vGe.Yzm4HH9Is61.EFG.', 2, 1, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vista_recaudos`
-- (See below for the actual view)
--
CREATE TABLE `vista_recaudos` (
`recaudos_id` int(11)
,`fechas_realizacion` datetime
);

-- --------------------------------------------------------

--
-- Structure for view `vista_recaudos`
--
DROP TABLE IF EXISTS `vista_recaudos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_recaudos`  AS SELECT coalesce(`caracterizacion`.`id`,`act_formativas`.`id`,`r_educativos`.`id`,`eformativo`.`id`,`rfotografico`.`id`) AS `recaudos_id`, coalesce(`caracterizacion`.`fecha_realizacion`,`act_formativas`.`fecha_realizacion`,`r_educativos`.`fecha_realizacion`,`eformativo`.`fecha_realizacion`,`rfotografico`.`fecha_realizacion`) AS `fechas_realizacion` FROM ((((`caracterizacion` join `act_formativas`) join `r_educativos`) join `eformativo`) join `rfotografico`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `act_formativas`
--
ALTER TABLE `act_formativas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caracterizacion`
--
ALTER TABLE `caracterizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eformativo`
--
ALTER TABLE `eformativo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rfotografico`
--
ALTER TABLE `rfotografico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indexes for table `r_educativos`
--
ALTER TABLE `r_educativos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `act_formativas`
--
ALTER TABLE `act_formativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `caracterizacion`
--
ALTER TABLE `caracterizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eformativo`
--
ALTER TABLE `eformativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rfotografico`
--
ALTER TABLE `rfotografico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `r_educativos`
--
ALTER TABLE `r_educativos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
