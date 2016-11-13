-- phpMyAdmin SQL Dump
-- version 4.5.1--------------85047928027618
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2016 a las 12:20:13
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_info`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_info`
--

CREATE TABLE `blog_info` (
  `id_art` int(11) NOT NULL,
  `fec_art` varchar(10) NOT NULL,
  `titulo_art` varchar(100) NOT NULL,
  `cont_art` longtext NOT NULL,
  `img_art` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog_info`
--

INSERT INTO `blog_info` (`id_art`, `fec_art`, `titulo_art`, `cont_art`, `img_art`) VALUES
(7, '31-10-2016', 'el infocentro sueÃ±os del gigante sembrando futuro', '                                                \r\n                        aqui vemos es esta fotogradia al facilitador mervin villalobos y el programador rafael orozco sembrando caraotas en los terrenos del infocentro en la comunidad del gaitero                        ', '13335928_1736329809958001_1040388195133493840_n.jpg'),
(9, '31-10-2016', 'infocentro celebra su 16 aniversario', '                        \r\n                        la fundacion infocentro festeja el decimo sexto aniversario de este pryecto fundado por el presidente Chavez y prepara varias actividades a desarrollarse en el centro cep de santa rosa de aguas', 'aniversario.png'),
(10, '31-10-2016', 'infocentro dictara proximamente curso de php', '                                                                        \r\n                la fundacion infocentro adelanta los preparativos para coordinar el curso de programacion en php mysql        que se dictara proximamente en el infocentro sueÃ±os del gigante el la comuna del gaitero.\r\n\r\nlos facilitadores seran los progrmadores mervin villalobos y rafael orozco el unicio del curso esta sujeto a la cantidad de inscripciones pero el mismo se anunciara por este medio asi que esten atentos y no olviden dejar sus comentarios.                                                ', 'POO-Programacion-orientada-a-objetos-ejemplos-en-PHP.jpg'),
(11, '31-10-2016', 'curso html basico', '                        la fundacion infocentro dictara cursos de html basico en el infocentro sueÃ±os del gigante del barrio el gaitero el inicio del curso sera abubciado por este mismo sitio esten atentos y no dejejn de hacer comentarios\r\n                        ', 'HTML5.jpg'),
(12, '31-10-2016', 'curso de programacion en python basico', '                        \r\n                        la fundacion infocentro dictara un curso de python basico para principiantes dictado por el reconocido programador y facilitador rafael orozco', 'python_code.png'),
(13, '31-10-2016', 'curso de programacion pseudocodigo', '                        \r\n                        en este curso se aprenderan las bases del programacion y los diferentes lenguajes de programacion que existen asi como sus extructuras basicas', 'coworkers.jpg'),
(15, '31-10-2016', 'SUEÃ‘OS DEL GIGANTE', '                                                \r\n                        Un sueÃ±o que nacio en la mente del presidente chavez y que hoy dia es uno de sus mas grandes legados a la patria con la que siempre disfrutando de la tecnologia para el bien comun.                        ', 'logo infocentrozul56.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comenta`
--

CREATE TABLE `comenta` (
  `id_come` int(11) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `nick` varchar(100) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `id_art` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comenta`
--

INSERT INTO `comenta` (`id_come`, `fecha`, `hora`, `nick`, `comentario`, `id_art`) VALUES
(1, '26-10-2016', '06-23-04 p', 'rafael', 'que vaine amas boba esta', 5),
(14, '26-10-2016', '07-06-58 p', 'melvin', 'Volviendo a las disciplinas clÃ¡sicas de la ingenierÃ­a y la arquitectura, el objetivo de estas no es el de las ciencias clÃ¡sicas de carÃ¡cter analÃ­tico, es decir, no intenta entender, explicar y describir algo ya existente como lo hacen la fÃ­sica, la quÃ­mica o la biologÃ­a, sino mÃ¡s bien sintÃ', 5),
(15, '26-10-2016', '07-11-57 p', 'rafael', 'El desarrollo de software es una disciplina prÃ¡ctica relativamente nueva que tiene poco mÃ¡s de medio siglo de existencia, pero que conceptualmente es hija de las disciplinas clÃ¡sicas constructivas englobadas bajo el paraguas de las ingenierÃ­as y la arquitectura. De ellas hereda una de las habili', 2),
(16, '27-10-2016', '07-36-41 a', 'jose perez', '                        \r\n                        Comprendemos que usted como venezolano proviene de una forma de vida rÃ¡pida, donde es valioso el tiempo, pero el panameÃ±o por lo general toma la vida de forma mÃ¡s tranquila y mÃ¡s lenta, aun proyectando PanamÃ¡ una imagen de metrÃ³polis y primer m', 6),
(17, '29-10-2016', '11-59-33 a', 'rafael', 'No se que hace Mirla en la inauguracion del infocentro se pelo el bonche                        \r\n                        ', 2),
(18, '30-10-2016', '06-27-30 a', 'jose perez', '                        esta si es una celebracion x todo lo alto\r\n                        ', 1),
(19, '02-11-2016', '10-12-49 a', 'maria', '                        \r\n                       trabajando con empeÃ±o', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cont`
--

CREATE TABLE `cont` (
  `id_cont` int(11) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `cont_nuevos` int(9) NOT NULL,
  `cont_regulo` int(9) NOT NULL,
  `cont_indio` int(9) NOT NULL,
  `cont_desc` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cont`
--

INSERT INTO `cont` (`id_cont`, `dia`, `fecha`, `cont_nuevos`, `cont_regulo`, `cont_indio`, `cont_desc`) VALUES
(1, 'sabado', '2016-10-29', 1, 0, 1, 1),
(2, 'viernes', '2016-10-28', 0, 1, 1, 1),
(3, 'jueves', '2016-10-27', 1, 0, 1, 1),
(4, 'domingo', '2016-10-30', 0, 1, 1, 1),
(5, 'lunes', '2016-10-31', 1, 1, 2, 2),
(6, 'martes', '2016-11-01', 2, 2, 1, 1),
(7, 'miercoles', '2016-11-02', 0, 5, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discap`
--

CREATE TABLE `discap` (
  `id_disc` int(11) NOT NULL,
  `discapacida` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `discap`
--

INSERT INTO `discap` (`id_disc`, `discapacida`) VALUES
(1, 'no discapacitado'),
(2, 'auditiva '),
(3, 'visual'),
(4, 'bucal'),
(5, 'tactil'),
(6, 'fisica'),
(7, 'sicomotora'),
(8, 'mental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disc_user`
--

CREATE TABLE `disc_user` (
  `id_disc_user` int(11) NOT NULL,
  `id_user` int(9) NOT NULL,
  `disc_user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disc_user`
--

INSERT INTO `disc_user` (`id_disc_user`, `id_user`, `disc_user`) VALUES
(1, 1, 2),
(2, 2, 6),
(3, 3, 7),
(4, 4, 3),
(5, 5, 8),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indigena`
--

CREATE TABLE `indigena` (
  `id_ind` int(11) NOT NULL,
  `comunidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `indigena`
--

INSERT INTO `indigena` (`id_ind`, `comunidad`) VALUES
(1, 'no indigena'),
(2, 'guajiro'),
(3, 'wayu'),
(4, 'yanomami'),
(5, 'coreano'),
(6, 'indio'),
(7, 'gocho'),
(8, 'cachaco'),
(12, 'caleÃ±o'),
(13, ''),
(14, ''),
(15, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indigena_user`
--

CREATE TABLE `indigena_user` (
  `id_ind_user` int(11) NOT NULL,
  `id_user` int(9) NOT NULL,
  `indi_user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `indigena_user`
--

INSERT INTO `indigena_user` (`id_ind_user`, `id_user`, `indi_user`) VALUES
(1, 1, 7),
(2, 2, 7),
(3, 3, 8),
(4, 4, 7),
(5, 5, 8),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infocentro`
--

CREATE TABLE `infocentro` (
  `id_info` int(11) NOT NULL,
  `cod_info` varchar(10) NOT NULL,
  `nombre_info` varchar(50) NOT NULL,
  `id_adm` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `infocentro`
--

INSERT INTO `infocentro` (`id_info`, `cod_info`, `nombre_info`, `id_adm`) VALUES
(1, 'zqr456', 'sueños del gigante', 2),
(2, 'z876', 'patria nueva', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mot_visita`
--

CREATE TABLE `mot_visita` (
  `id_mot` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mot_visita`
--

INSERT INTO `mot_visita` (`id_mot`, `motivo`) VALUES
(6, 'usar equipo'),
(7, 'realizar curso'),
(10, 'carta comunal'),
(11, 'impresiones'),
(12, ' consultar MADRES DEL BARRIO'),
(13, 'consultar amor mayor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `id_niv` int(11) NOT NULL,
  `nombre_niv` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nivel` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id_niv`, `nombre_niv`, `email`, `password`, `nivel`) VALUES
(1, 'RAFAEL OROZCO', 'rorozco2016@hotmail.com', 'alfa3000', 0),
(2, 'melvin villalobos', 'melvinvilla@gmail.com', 'gigante', 1),
(3, 'darwin chimon', 'chimon@gmail.com', 'tiramealgo', 2),
(10, 'RICHARD SILVA ', 'R_SILVA@HOTMAIL.COM', 'TIRAMEALGO', 1),
(14, 'laura bueno', 'laurabueno@gmail.com', 'blankita', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_mot_vis`
--

CREATE TABLE `reg_mot_vis` (
  `id_reg_vis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `mot_visita` int(2) NOT NULL,
  `fecha_visita` date NOT NULL,
  `dia_visita` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reg_mot_vis`
--

INSERT INTO `reg_mot_vis` (`id_reg_vis`, `id_user`, `mot_visita`, `fecha_visita`, `dia_visita`) VALUES
(9, 3, 7, '2016-10-29', 'sabado'),
(11, 4, 6, '2016-10-30', 'domingo'),
(13, 1, 7, '2016-10-31', 'lunes'),
(14, 5, 7, '2016-10-31', 'lunes'),
(15, 2, 12, '2016-11-01', 'martes'),
(16, 6, 13, '2016-11-01', 'martes'),
(17, 7, 11, '2016-11-01', 'martes'),
(18, 7, 10, '2016-11-01', 'martes'),
(19, 1, 11, '2016-11-02', 'miercoles'),
(20, 8, 6, '2016-11-02', 'miercoles'),
(21, 8, 7, '2016-11-02', 'miercoles'),
(22, 9, 6, '2016-11-02', 'miercoles'),
(23, 9, 11, '2016-11-02', 'miercoles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_user`
--

CREATE TABLE `reg_user` (
  `id_user` int(11) NOT NULL,
  `nombre_user` varchar(100) NOT NULL,
  `cedula_user` varchar(8) NOT NULL,
  `telefono_user` varchar(11) NOT NULL,
  `edad_user` varchar(2) NOT NULL,
  `sexo_user` varchar(1) NOT NULL,
  `fecha_inscrip` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Volcado de datos para la tabla `reg_user`
--

INSERT INTO `reg_user` (`id_user`, `nombre_user`, `cedula_user`, `telefono_user`, `fecha_nac`, `sexo_user`, `fecha_inscrip`, `tiempo`, `cont_vis`, `id_info`) VALUES
(1, 'laura bueno', '11391187', '02612116255', '1969/3/22', 'm', '2016-10-29 19:17:30.423818', 1, 2, 0),
(2, 'carlos bueno', '11111111', '55555555', '1968/3/22', 'm', '2016-10-29 19:20:47.205491', 0, 1, 0),
(3, 'eduardo bueno', '20303033', '22222222222', '1964/3/22', 'm', '2016-10-29 19:24:10.044879', 0, 1, 0),
(4, 'luz bueno', '29292929', '29292929', '1972/3/22', 'm', '2016-10-30 15:54:51.947660', 1, 1, 0),
(5, 'yuderkis bueno', '22222222', '22222222', '1974/3/22', 'm', '2016-10-31 11:53:13.093457', 0, 1, 0),
(6, 'zulay bueno', '33333333', '33333333', '1965/3/22', 'f', '2016-11-01 15:18:48.101626', 0, 1, 0),
(7, 'jose bueno', '44444444', '44444444', '1962/3/22', 'm', '2016-11-01 15:19:41.666942', 1, 3, 0),
(8, 'randy martinez', '55555555', '55555555', '2000/3/22', 'm', '2016-11-02 07:54:57.665312', 1, 2, 0),
(9, 'maria diaz', '20277827', '04246388299', '1984/3/22', 'f', '2016-11-02 14:45:57.243402', 1, 2, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_info`
--
ALTER TABLE `blog_info`
  ADD PRIMARY KEY (`id_art`);

--
-- Indices de la tabla `comenta`
--
ALTER TABLE `comenta`
  ADD PRIMARY KEY (`id_come`);

--
-- Indices de la tabla `cont`
--
ALTER TABLE `cont`
  ADD PRIMARY KEY (`id_cont`);

--
-- Indices de la tabla `discap`
--
ALTER TABLE `discap`
  ADD PRIMARY KEY (`id_disc`);

--
-- Indices de la tabla `disc_user`
--
ALTER TABLE `disc_user`
  ADD PRIMARY KEY (`id_disc_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `disc_user` (`disc_user`);

--
-- Indices de la tabla `indigena`
--
ALTER TABLE `indigena`
  ADD PRIMARY KEY (`id_ind`);

--
-- Indices de la tabla `indigena_user`
--
ALTER TABLE `indigena_user`
  ADD PRIMARY KEY (`id_ind_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `indi_user` (`indi_user`);

--
-- Indices de la tabla `infocentro`
--
ALTER TABLE `infocentro`
  ADD PRIMARY KEY (`id_info`);

--
-- Indices de la tabla `mot_visita`
--
ALTER TABLE `mot_visita`
  ADD PRIMARY KEY (`id_mot`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id_niv`);

--
-- Indices de la tabla `reg_mot_vis`
--
ALTER TABLE `reg_mot_vis`
  ADD PRIMARY KEY (`id_reg_vis`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `mot_visita` (`mot_visita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_info`
--
ALTER TABLE `blog_info`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `comenta`
--
ALTER TABLE `comenta`
  MODIFY `id_come` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `cont`
--
ALTER TABLE `cont`
  MODIFY `id_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `discap`
--
ALTER TABLE `discap`
  MODIFY `id_disc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `disc_user`
--
ALTER TABLE `disc_user`
  MODIFY `id_disc_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `indigena`
--
ALTER TABLE `indigena`
  MODIFY `id_ind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `indigena_user`
--
ALTER TABLE `indigena_user`
  MODIFY `id_ind_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `infocentro`
--
ALTER TABLE `infocentro`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `mot_visita`
--
ALTER TABLE `mot_visita`
  MODIFY `id_mot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id_niv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `reg_mot_vis`
--
ALTER TABLE `reg_mot_vis`
  MODIFY `id_reg_vis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `disc_user`
--
ALTER TABLE `disc_user`
  ADD CONSTRAINT `disc_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `reg_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `indigena_user`
--
ALTER TABLE `indigena_user`
  ADD CONSTRAINT `indigena_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `reg_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `indigena_user_ibfk_2` FOREIGN KEY (`indi_user`) REFERENCES `indigena` (`id_ind`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reg_mot_vis`
--
ALTER TABLE `reg_mot_vis`
  ADD CONSTRAINT `reg_mot_vis_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `reg_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_mot_vis_ibfk_2` FOREIGN KEY (`mot_visita`) REFERENCES `mot_visita` (`id_mot`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
