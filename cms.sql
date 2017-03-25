-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2017 a las 06:41:25
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `children` varchar(2) DEFAULT NULL,
  `young` varchar(2) DEFAULT NULL,
  `adult` varchar(2) DEFAULT NULL,
  `type_course` varchar(30) NOT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `children`, `young`, `adult`, `type_course`, `image`) VALUES
(7, ' Calculo I', 'En general el tÃ©rmino cÃ¡lculo (del latÃ­n calculus = piedra)1 hace referencia al resultado correspondiente a la acciÃ³n de calcular. Calcular, por su parte, consiste en realizar las operaciones nece', 'Si', 'Si', 'Si', 'Academico', './img/cursos/calculo.jpg'),
(9, 'Gimnasia Ritmica', 'En este deporte se realizan tanto competiciones como exhibiciones en las que la gimnasta se acompaÃ±a de mÃºsica para mantener un ritmo en sus movimientos, realizando un montaje con o sin aparato. La gimnasia rÃ­tmica desarrolla la armonÃ­a, la gracia y la belleza mediante movimientos creativos, traducidos en expresiones personales a travÃ©s de la combinaciÃ³n musical, teatral y tÃ©cnica, que transmite, principalmente, satisfacciÃ³n estÃ©tica a los espectadores. Practicada principalmente por mujeres, en los Ãºltimos aÃ±os estÃ¡ aumentando el nÃºmero de practicantes masculinos. Las pruebas se realizan sobre un tapiz y la duraciÃ³n de los ejercicios es de aproximadamente 90 segundos en la modalidad individual y de 150 en la de conjuntos.', 'Si', 'Si', 'No', 'Deportivo', './img/cursos/5428318119e4b.jpg'),
(10, 'Piano Acustico', 'EstÃ¡ compuesto por una caja de resonancia, a la que se ha agregado un teclado mediante el cual se percuten las cuerdas de acero con macillos forrados de fieltro, produciendo el sonido. Las vibraciones se transmiten a travÃ©s de los puentes a la tabla armÃ³nica, que las amplifica. EstÃ¡ formado por un arpa cromÃ¡tica de cuerdas mÃºltiples, accionada por un mecanismo de percusiÃ³n indirecta, a la que se le han aÃ±adido apagadores. Fue inventado en torno al aÃ±o 1700 por el paduano Bartolomeo Cristofori. Entre sus antecesores se encuentran instrumentos como la cÃ­tara, el monocordio, el dulcÃ©mele, el clavicordio y el clavecÃ­n.', 'Si', 'Si', 'Si', 'Musical', './img/cursos/u1.jpg'),
(11, 'Guitarra avanzda', 'Blablahaksdnjlkasdl', 'Si', 'Si', 'No', 'Musical', './img/cursos/Logo4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `name`, `address`, `telephone`, `email`) VALUES
(4, 'iDeartech', 'Calle 22 # 55-36 Fusagasuga', '3043380660', 'gerencia@ideartech.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `body` varchar(8000) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `title`, `body`, `image`) VALUES
(2, 'Prueba 2', 'Otra prueba.', './img/blog/Parcial2.PNG'),
(3, 'Nuevo Curso de Algebra', 'El proximo viernes 30 de Mayo lanzaremos al mercado un nuevo curso de Algebra.', './img/blog/telollevo.png'),
(4, 'Su empresa en la WEB', 'blablablalalalaaskjdnfkasdjnfkas', './img/blog/'),
(5, 'Prueba 5', 'Jelou mister', './img/blog/ab-testing_icon-icons.com_53768.png'),
(6, 'ASÃ SE PREPARAN DOS CIUDADES PARA LA VISITA DEL PAPA', 'El Nuncio ApostÃ³lico en Colombia, Mons. Ettore Balestrero, anunciÃ³ la visita del Papa Francisco al paÃ­s para septiembre de este aÃ±o, y dos arzobispos de las ciudades a las que llegarÃ¡ el Santo Padre han expresado su alegrÃ­a y explicaron cÃ³mo se van a preparar sus ciudades.\r\nEn conferencia de prensa el 10 de marzo en la sede de la Conferencia Episcopal de Colombia, en BogotÃ¡, Mons. Balestrero indicÃ³ que Francisco llegarÃ¡ al paÃ­s el 6 de septiembre y PermanecerÃ¡ ahÃ­ hasta el 10. Durante su viaje, el Papa visitarÃ¡ BogotÃ¡, Villavicencio, MedellÃ­n y Cartagena.\r\nEn declaraciones a ACI Prensa, Mons. Jorge Enrique JimÃ©nez, Arzobispo de Cartagena, al norte del paÃ­s, asegurÃ³ que la noticia le produjo â€œuna gran alegrÃ­aâ€.\r\nâ€œQuÃ© mejor noticia que el Papa venga a nuestra casa a visitarnos y a darnos esperanzaâ€, seÃ±alÃ³.\r\nMons. JimÃ©nez dijo que en Colombia, como en otros paÃ­ses latinoamericanos, se viven problemas y situaciones difÃ­ciles, â€œpero siempre tenemos esperanza y cuando alguien viene a darnos esperanza, y a fortalecer nuestra esperanza, todo el mundo estÃ¡ feliz y dichosoâ€.\r\nEl Prelado indicÃ³ que es necesario â€œpreparar muy bien la visita, porque no se trata de un evento de tipo mundano, sino que se trata de un evento de tipo espiritualâ€.\r\nEl Papa, dijo, â€œtrae un mensaje espiritual. Ã‰l quiere fortalecer los corazones en la esperanza y en el Ã¡nimo de que podemos vivir de una manera humana, y de que el Evangelio nos da fuerza para vivir de una manera humana. Entonces, estamos felices y dichosos por esoâ€.\r\nâ€œEs la mejor noticia que hemos podido recibir en medio de todas las dificultades y situaciones complicadas que vivimosâ€, asegurÃ³.\r\nMons. JimÃ©nez indicÃ³ que en un evento como este, â€œel que da la energÃ­a es Dios, es el EspÃ­ritu Santo, es JesÃºs, es el Evangelioâ€, y destacÃ³ que la noticia haya llegado en tiempo de cuaresma lo cual para nosotros va a ser muy interesante, muy importante, porque ya podemos ayudar a preparar los corazones para que ese mensaje, esa semilla que Ã©l nos trae y que quiere caer en el corazÃ³n, porque si no nos cae en el corazÃ³n resbala y no sirve para mayor cosaâ€.\r\nâ€œLa gran preparaciÃ³n va a ser que preparemos el corazÃ³n para que el mensaje toque nuestras vidas y para que podamos todos nosotros tener una actitud diferente frente a las diversas situaciones complicadas que vivimosâ€.\r\nEl Prelado pidiÃ³ a los fieles de otros paÃ­ses que â€œoren por nosotros, oren, porque el que no abre el corazÃ³n no se puede encontrar con Diosâ€.\r\nPor su parte, Mons. Ã“scar Urbina, Arzobispo de Villavicencio, a 126 kilÃ³metros al sureste de BogotÃ¡, seÃ±alÃ³ que la noticia le produce â€œuna doble alegrÃ­aâ€, tanto porque el Papa â€œvenga a Colombia, es una alegrÃ­a de todos los colombianos y grande para nosotrosâ€, y porque llegue Villavicencio.\r\nâ€œEn las dos anteriores visitas, los Papas nunca pudieron venir a esta tierra que es inmensa. La provincia eclesiÃ¡stica tiene 454 mil kilÃ³metros cuadrados, y de ahÃ­ todavÃ­a faltan otros territorios que hacen parte de esta regiÃ³n que se llama la Orinoquia y la AmazonÃ­a que hacemos parte del bioma amazÃ³nico, del cual el PerÃº tambiÃ©n hace parte con los otros siete paÃ­sesâ€.\r\nPara el Prelado, esta â€œes una periferia muy importante, primero porque esta ha sido una tierra golpeada por la violencia del conflicto, y en segundo lugar porque es una tierra de esperanza en el sentido de que hay todavÃ­a mucha creaciÃ³n que proteger y mucha tierra tambiÃ©n que se puede utilizar para el alimento de la naciÃ³n y del mundoâ€.\r\nMons. Urbina seÃ±alÃ³ que en su ArquidiÃ³cesis se realizarÃ¡ â€œuna preparaciÃ³n espiritualâ€ con miras a la visita del Papa, â€œ en la cual queremos aprovechar en primer lugar la celebraciÃ³n de la Semana Santa, el mes de la Virgen MarÃ­a y encuentros por familiasâ€.\r\n', './img/blog/Francisco_DanielIbanezACIPrensa_100317.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id`, `name`, `email`, `content`) VALUES
(2, 'Carlos Guample', 'carlosguampe@gmail.com', 'Me encanta el trabajo de esta empresa.'),
(3, 'Andres Nieto', 'nietoandres03@gmail.com', 'Estupendas clases'),
(4, 'Karen Murillo', 'karenm.murillo@gmail.com', 'Me encantan sus clases.'),
(5, 'Carlos Andres Nieto', 'iacarlosnieto@yahoo.com.mx', 'Excelente atenciÃ³n.'),
(6, 'Laura', 'laura@gmail', 'blablabla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `type_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`, `type_user`) VALUES
(4, 'Admin', '1234', 'Administrador'),
(5, 'Andres Nieto', 'anieto95', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
