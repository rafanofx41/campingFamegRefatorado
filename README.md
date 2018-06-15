# campingFamegRefatorado
SQL PARA O BANCON:

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Jun-2018 às 22:52
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campings`
--

DROP TABLE IF EXISTS `campings`;
CREATE TABLE IF NOT EXISTS `campings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `campings`
--

INSERT INTO `campings` (`id`, `user_id`, `titulo`, `body`, `imagem`, `create_date`, `user_name`) VALUES
(2, 1, 'asdasaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2018-05-29 23:04:06', 'rafa'),
(3, 1, 'asdasddddd', 'ddddddd', 'dddddddddddddddd', '2018-06-03 14:43:07', 'faustao'),
(4, 1, 'ddddddddd', 'dddddddddddd', 'asd.PNG', '2018-06-03 14:43:30', ''),
(19, 1000, 'aaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaa.png', '2018-06-10 19:45:03', 'ultimot teste'),
(20, 1000, 'bbbbbbbbbbbbb', 'bbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbb.png', '2018-06-10 19:45:26', 'ultimot teste'),
(21, 1000, 'cccccccccccccc', 'cccccccccccccccccccc', 'ccccccccccccccccccccccccccccccc.png', '2018-06-10 19:45:44', 'ultimot teste'),
(22, 1000, 'sdasdasd', 'asdasdsad', 'camping-beira-rio.jpg', '2018-06-14 19:11:53', 'ultimot teste'),
(23, 1001, 'campingagora', 'asldkjaskldjlkasd asdasd asd asd asdasdmopasdom', 'primeiro.jpg', '2018-06-15 19:02:12', 'testeagora'),
(24, 1002, 'zxczxcxzc', 'zxczxczxcx', 'segundo.jpg', '2018-06-15 19:06:03', 'oi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `user_name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `camping_id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`user_name`, `id`, `camping_id`, `comentario`, `user_id`) VALUES
('bolinha', 1, 3, 'comentario de teste', 5),
('bola', 2, 4, 'segundo comentario', 6),
('bolinha', 3, 4, 'comentario teste', 3),
('bolinha', 4, 4, 'comentario teste', 3),
('bolinha', 5, 4, 'comentario teste', 3),
('chorao', 6, 2, 'novo teste', 2),
('testeagora', 7, 1001, 'comentario inserido', 1001);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1003 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(2, 'teste', 'teste', '698dc19d489c4e4db73e28a713eab07b'),
(3, 'bola', 'bola', 'aec07f935649a5b028c070251f617de7'),
(5, 'bolinha', 'bolinha@bolinha.com.br', '98ba5150709f5d78212cd07d234cfb98'),
(6, 'lelele', 'lelele@lelele.com.br', '3b79c04ca94351cb6754731f0d37fcfe'),
(1000, 'ultimot teste', 'ultimoteste@teste.com.br', 'd723273c1f95fa34bf0e9a072fb2830a'),
(1001, 'testeagora', 'testeagora@teste.com.br', 'a9a81484b70e4932b1db4b01d13d29d5'),
(1002, 'oi', 'oi@oi.com.net', '5e9b9edbe4c007c65c56c686ea22c594');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
