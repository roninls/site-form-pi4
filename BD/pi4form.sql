-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Abr-2021 às 04:16
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pi4form`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Masculino', '2021-04-26 00:00:00', NULL),
(2, 'Feminino', '2021-04-26 00:00:00', NULL),
(3, 'Prefiro não dizer', '2021-04-26 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grau_esc`
--

DROP TABLE IF EXISTS `grau_esc`;
CREATE TABLE IF NOT EXISTS `grau_esc` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grau_esc`
--

INSERT INTO `grau_esc` (`id`, `nome`) VALUES
(1, 'Até 5º Ano Incompleto'),
(2, '5º Ano Completo'),
(3, '6º ao 9º Ano do Fundamental\r\n'),
(4, 'Fundamental Completo'),
(5, 'Médio Incompleto'),
(6, 'Médio Completo'),
(7, 'Superior Incompleto'),
(8, 'Superior Completo'),
(9, 'Mestrado'),
(10, 'Doutorado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

DROP TABLE IF EXISTS `niveis_acessos`;
CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(0, 'Cliente', '2021-04-07 00:00:00', NULL),
(1, 'TESTANDO', '2021-04-07 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL DEFAULT '0',
  `genero_id` int(11) NOT NULL,
  `grau_esc_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `niveis_acesso_id`, `genero_id`, `grau_esc_id`, `created`) VALUES
(1, 'LosTSouL', 'anonysbsb@gmail.com', '$2y$10$u8n.CPwuumTQJZ3s00h1z.NZi76LW4iaXNGolk0RZZ2JCiUGvQZ.C', '', 1, 0, 0, '2021-04-11 03:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
