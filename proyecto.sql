-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2022 a las 18:11:36
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agente`
--

CREATE TABLE `agente` (
  `idAgente` varchar(20) NOT NULL,
  `NombreAgente` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `codigoEquipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agente`
--

INSERT INTO `agente` (`idAgente`, `NombreAgente`, `direccion`, `codigoEquipo`) VALUES
('1', 'inkafarma', ' San Antonio 21112', '1'),
('2', 'Botica abc', 'san antonio 2312231', '2'),
('3', '312321', '321321', '3'),
('4', 'bcp', '321', '4'),
('5', '1231', '312', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `idBanco` varchar(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`idBanco`, `nombre`) VALUES
('1', 'BCP11231'),
('2', 'Pichincha1'),
('3', 'Interbank32133'),
('4', 'Interbank12312'),
('5', '32131231111'),
('6', '132213');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasusuario`
--

CREATE TABLE `cuentasusuario` (
  `idCuenta` varchar(20) NOT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `saldo` varchar(50) DEFAULT NULL,
  `Id_Usuario` varchar(20) DEFAULT NULL,
  `idBanco` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentasusuario`
--

INSERT INTO `cuentasusuario` (`idCuenta`, `numero`, `saldo`, `Id_Usuario`, `idBanco`) VALUES
('1', '30-205-1245', '100', '1', '1'),
('2', '20-105-1111', '100', '2', '2'),
('3', '333-333-333', '100', '3', '3'),
('4', '999-123312-31', '1600', '4', '4'),
('5', '32132125sdsdads321312', '321321', '5', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` varchar(20) NOT NULL,
  `Giro_rubro` varchar(50) DEFAULT NULL,
  `nroCuenta` varchar(50) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `Giro_rubro`, `nroCuenta`, `Nombre`, `codigo`) VALUES
('1', 'Farmacia1', '11099', 'Cosio', '1'),
('2', 'Negocio1', '22222', 'Zeballos', '2'),
('3', 'Negocio', '333-333-333', 'Ian', '3'),
('4', 'Negocio', '213321', 'Zeballos', '4'),
('5', '231132', '231321', '12312321345', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `documento` varchar(120) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `rol` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `idperfil` int(11) NOT NULL,
  `perfil` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`idperfil`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipotransaccion`
--

CREATE TABLE `tipotransaccion` (
  `idTipoTransaccion` varchar(20) NOT NULL,
  `Transaccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipotransaccion`
--

INSERT INTO `tipotransaccion` (`idTipoTransaccion`, `Transaccion`) VALUES
('1', 'Deposito'),
('2', 'Retiro'),
('3', 'Pago Servicios'),
('4', '3004'),
('5', '23132321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` varchar(20) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `tipo`) VALUES
('1', 'Registrado1'),
('11221', '1212'),
('2', 'Inscrito'),
('3', 'Inscrito321'),
('4', '21312321'),
('5', 'ri');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` varchar(20) NOT NULL,
  `DNI` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `idTipoUsuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `DNI`, `nombre`, `idTipoUsuario`) VALUES
('1', '75331923', 'Luis ', '1'),
('2', '77335663', 'juan', '2'),
('3', '77335663', 'juana', '1'),
('4', '77556678', 'Rodrigo', '3'),
('5', '77341235', 'Cristian', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario2`
--

CREATE TABLE `usuario2` (
  `cod_usu` int(11) NOT NULL,
  `cta_usu` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario2`
--

INSERT INTO `usuario2` (`cod_usu`, `cta_usu`, `contrasena`) VALUES
(1, '72897847', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `login` varchar(15) DEFAULT NULL,
  `pasword` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fechaalta` datetime DEFAULT NULL,
  `idperfil` int(11) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre`, `login`, `pasword`, `estado`, `fechaalta`, `idperfil`, `email`, `telefono`) VALUES
(1, 'Ian Vizcarra Escobar', 'ian', '12345', 1, '2022-10-10 16:23:57', 2, 'ianfranco12@gmail.com', '990220266'),
(2, 'Cristian Zeballos', 'cristian', '12345', 1, '2022-11-14 18:25:25', 1, 'cristian123@gmail.com', '953888777'),
(3, 'Abraham Ticona Acero', 'abraham', '12345', 1, '2022-12-01 10:57:50', 2, 'abrahamc10@gmail.com\r\n', '953539128'),
(4, 'Ronny Hualpa Apaza', 'ronny', '12345', 1, '2022-12-01 10:57:50', 1, 'ronny123@gmail.com\r\n', '945678912');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioslogin`
--

CREATE TABLE `usuarioslogin` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarioslogin`
--

INSERT INTO `usuarioslogin` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Usuario Administrador', 'admin', 'admin123', 'Administrador', '', 1, '0000-00-00 00:00:00', '2022-12-11 02:00:09'),
(19, 'Ian Vizcarra', 'ian123', '12345', 'Administrador', '', 0, '0000-00-00 00:00:00', '2022-11-13 18:20:16'),
(20, 'Arturo', 'Art1', '12345', 'Usuario', '', 0, '0000-00-00 00:00:00', '2022-11-13 19:23:21'),
(21, 'juan', 'juan123', '12345', 'Usuario', '', 0, '0000-00-00 00:00:00', '2022-11-13 19:25:01'),
(22, '213', '321', '231', 'Usuario', '', 0, '0000-00-00 00:00:00', '2022-11-13 19:37:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voucher`
--

CREATE TABLE `voucher` (
  `Id_voucher` varchar(20) NOT NULL,
  `Fecha` varchar(50) DEFAULT NULL,
  `Hora` varchar(50) DEFAULT NULL,
  `Numero_operacion` varchar(50) DEFAULT NULL,
  `Importe_transaccion` varchar(50) DEFAULT NULL,
  `Cargo_fijo` varchar(50) DEFAULT NULL,
  `Mora` varchar(50) DEFAULT NULL,
  `Total_deuda` varchar(50) DEFAULT NULL,
  `Comision` varchar(50) DEFAULT NULL,
  `Total_pagar` decimal(9,4) DEFAULT NULL,
  `idEmpresa` varchar(20) DEFAULT NULL,
  `idAgente` varchar(20) DEFAULT NULL,
  `idTipoTransaccion` varchar(20) DEFAULT NULL,
  `idCuenta` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `voucher`
--

INSERT INTO `voucher` (`Id_voucher`, `Fecha`, `Hora`, `Numero_operacion`, `Importe_transaccion`, `Cargo_fijo`, `Mora`, `Total_deuda`, `Comision`, `Total_pagar`, `idEmpresa`, `idAgente`, `idTipoTransaccion`, `idCuenta`) VALUES
('1', '2022-07-13', '12:50:01', '1', '50', '0', '0', '50', '10', '51.0000', '1', '1', '1', '1'),
('2', '2022-07-18', '13:31', '1', '1', '0', '0', '500', '2', '502.0000', '1', '2', '1', '2'),
('3', '312321', '32132', '321321', '312321', '3213', '132321', '213321', '123213', '99999.9999', '3', '3', '3', '3'),
('4', 'fafas', 'sfafas', '12231312', '321321', '231321', '321231', '231', '231', '231.0000', '4', '4', '4', '4'),
('5', '10/09', '321321', '123321', '213321', '213213', '231123', '123312', '132321', '99999.9999', '5', '5', '5', '5'),
('6', '121', '213321', '321213', '231321', '321312', '2133123', '213321', '123123', '1.0000', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_usuariosaldo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_usuariosaldo` (
`idusuario` int(11)
,`email` varchar(80)
,`nombreusuario` varchar(50)
,`telefono` varchar(15)
,`idCuenta` varchar(20)
,`numero` varchar(50)
,`saldo` varchar(50)
,`idBanco` varchar(20)
,`nombrebanco` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `v_usuariosaldo`
--
DROP TABLE IF EXISTS `v_usuariosaldo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_usuariosaldo`  AS SELECT `u`.`idusuario` AS `idusuario`, `u`.`email` AS `email`, `u`.`nombre` AS `nombreusuario`, `u`.`telefono` AS `telefono`, `c`.`idCuenta` AS `idCuenta`, `c`.`numero` AS `numero`, `c`.`saldo` AS `saldo`, `c`.`idBanco` AS `idBanco`, `b`.`nombre` AS `nombrebanco` FROM ((`usuarios` `u` join `cuentasusuario` `c` on(`u`.`idusuario` = `c`.`Id_Usuario`)) join `bancos` `b` on(`b`.`idBanco` = `c`.`idBanco`))  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agente`
--
ALTER TABLE `agente`
  ADD PRIMARY KEY (`idAgente`);

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`idBanco`);

--
-- Indices de la tabla `cuentasusuario`
--
ALTER TABLE `cuentasusuario`
  ADD PRIMARY KEY (`idCuenta`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `idBanco` (`idBanco`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`idperfil`);

--
-- Indices de la tabla `tipotransaccion`
--
ALTER TABLE `tipotransaccion`
  ADD PRIMARY KEY (`idTipoTransaccion`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD KEY `idTipoUsuario` (`idTipoUsuario`);

--
-- Indices de la tabla `usuario2`
--
ALTER TABLE `usuario2`
  ADD PRIMARY KEY (`cod_usu`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `R_19` (`idperfil`);

--
-- Indices de la tabla `usuarioslogin`
--
ALTER TABLE `usuarioslogin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`Id_voucher`),
  ADD KEY `idEmpresa` (`idEmpresa`),
  ADD KEY `idAgente` (`idAgente`),
  ADD KEY `idTipoTransaccion` (`idTipoTransaccion`),
  ADD KEY `idCuenta` (`idCuenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario2`
--
ALTER TABLE `usuario2`
  MODIFY `cod_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarioslogin`
--
ALTER TABLE `usuarioslogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuentasusuario`
--
ALTER TABLE `cuentasusuario`
  ADD CONSTRAINT `cuentasusuario_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`),
  ADD CONSTRAINT `cuentasusuario_ibfk_2` FOREIGN KEY (`idBanco`) REFERENCES `bancos` (`idBanco`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`);

--
-- Filtros para la tabla `voucher`
--
ALTER TABLE `voucher`
  ADD CONSTRAINT `voucher_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`),
  ADD CONSTRAINT `voucher_ibfk_2` FOREIGN KEY (`idAgente`) REFERENCES `agente` (`idAgente`),
  ADD CONSTRAINT `voucher_ibfk_3` FOREIGN KEY (`idTipoTransaccion`) REFERENCES `tipotransaccion` (`idTipoTransaccion`),
  ADD CONSTRAINT `voucher_ibfk_4` FOREIGN KEY (`idCuenta`) REFERENCES `cuentasusuario` (`idCuenta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
