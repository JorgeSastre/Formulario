--
-- Database: `formulario`
--

CREATE DATABASE formulario;

--
-- Table structure for table `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(11) NOT NULL,
  `preguntas` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `preguntas`
--

INSERT INTO `preguntas` (`id`, `preguntas`) VALUES
(1, 'Que es Zscaler?'),
(2, 'En que se diferencia Zscaler de otros productos de seguridad?'),
(3, 'Cuales son los retos de la transformacion digital?'),
(4, 'Cuales son las caracteristicas que han hecho que este servicio en la nube sea tan efectivo?'),
(5, 'Que modelo de pago tiene Zscaler?'),
(6, 'En que plataformas de virtualizacion se puede implementar el servicio de Zscaler?'),
(7, 'Cual de las siguientes opciones son añadidas al utilizar Zscaler como servicio?'),
(8, 'Para cuantos motores de busqueda esta incluido el complemento Compra segura Zscaler?'),
(9, 'Que es una pagina web dinamica?'),
(10, 'En que año fue fundado Zscaler?');

-- --------------------------------------------------------

--
-- Table structure for table `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(11) NOT NULL,
  `a` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `b` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `c` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `d` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `respuestas`
--

INSERT INTO `respuestas` (`id`, `a`, `b`, `c`, `d`) VALUES
(1, ' Es una empresa global de seguridad de la información basada en la nube.', 'Es una herramienta para almacenar datos en la nube.', 'Es una empresa nacional, ubicada en EE.UU, que se dedica al almacenamiento de datos en la nube.', ' Ninguna de las anteriores es correcta.'),
(2, 'Que es mas economico a la hora de solicitar sus servicios.', 'Que a la hora de subir los dats a a nube, es mas lento que otros servicios.', 'Que al ser un servicio de la nube, no necesita la instalacion de hardware o software.', 'Todas las anteriores'),
(3, 'Dejar de ser su propio enemigo y tener nuevas iquietudes por las nuevas tecnologias.', ' Renunciar al control y aceptar las nuevas tecnologias como algo mejor.', 'Disminuir la carga de trabajo, ya que ZScaler lo va a facilitar.', 'Todas las anteriores son correctas.'),
(4, 'Mayor capacidad de almacenamiento, accesibilidad y velocidad.', 'Mayor alcance, escalabilidad en tiempo real, innovación y mayor agilidad.', 'Ninguna, no ha sido tan efectivo como se esperaba.', 'Las respuestas a y b son correctas.'),
(5, 'Pago por el servicio contratado.', 'Pago por el uso del servicio.', 'Es un servicio gratuito.', 'Las respuestas a y b son correctas.'),
(6, 'Micosoft Azure.', 'Amazon Web Service.', 'Ninguna de las anteriores es correcta.', 'a y b son correctas.'),
(7, 'Restaurar tu perímetro de seguridad al estar conectado a la nube.', 'Las conexiones directas de Internet a una plataforma de seguridad en la nube garantizan una experiencia de usuario rápida y segura.', 'Todas las respuestas son correctas.', 'Una pila de seguridad como servicio mejora la protección.'),
(8, 'Solo para safari.', 'Solo para google chrome.', 'Para firefox, safari y google chrome.', 'Para firefox y google chrome.'),
(9, 'Todas las anteriores.', 'Incorpora efectos como texto que aparece y desaparece.', 'Elemento que hace referencia a otro valor.', 'Las instrucciones que forman un script.'),
(10, '1999.', '2008.', '2002.', 'Ninguna de las fechas anteriores.');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `rclave` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--
-- Este insert esta como ejemplo, pero tiene que contener los usuarios que se registren a traves de la pagina web.

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `rclave`) VALUES
(1, 'Jorge', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'a', '0cc175b9c0f1b6a831c399e269772661', '0cc175b9c0f1b6a831c399e269772661');

