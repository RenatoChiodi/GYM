-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 23/04/2017 às 16:04
-- Versão do servidor: 10.1.19-MariaDB
-- Versão do PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `academia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrators`
--

CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `mobile` int(13) NOT NULL,
  `photo` longblob NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `ip` binary(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `cpf`, `mail`, `password`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `photo`, `created`, `modified`, `ip`) VALUES
(2, 'abc1', '', 'a', '$2y$10$nZcqO5P.5a97k3MHfQf7ieppAEQ/u/8P5/cA7qRJeC0oCRx.pYG8W', '0000-00-00', '', '', 0, '', '', 0, 0, 0x313438373938383830305f69636f6e2d38312e706e67, '2017-03-24 08:24:37', '2017-03-25 10:23:56', 0x00000000000000000000000000000000),
(4, 'jose', '', 'jose', '$2y$10$kdmQ.kmHrFI//MsmcunDPu5ZuoTDi2usvFFuBQVHrm82Z5dRlzljW', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-03-24 08:29:47', '2017-03-24 08:29:47', 0x00000000000000000000000000000000),
(23, '12345', '', '12345', '$2y$10$wZ2OxyWdqgyYTYWu5MPbsO3GM/u9npM.OFz5izlaBA5Ums2RE5xV6', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-03-24 09:00:22', '2017-03-24 09:00:22', 0x00000000000000000000000000000000),
(24, '1111', '', '1111', '$2y$10$TzhyCOOp1BlyC3/WcGyuVuHwKlPc8OGr5f6Yo5E9SuTMJRb75L36u', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-03-24 09:01:51', '2017-03-24 09:01:51', 0x00000000000000000000000000000000),
(25, '007', '', '007', '$2y$10$M4w2jpwRADZLSInbtce9.u/bLkYlBll1e6EKh6XU5pPf1WpbVgpGK', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-03-24 09:03:28', '2017-03-24 09:03:28', 0x00000000000000000000000000000000),
(27, '111', '', '111', '$2y$10$cr5UCGmu..DnzOrFAMV1T.NJPt.4Wodk1fAW8gbWwoZRj3mCHxRi6', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-03-24 17:33:07', '2017-03-24 17:33:07', 0x00000000000000000000000000000000),
(28, '', '', '1@mail.com', '$2y$10$Y0R6Nl5zI62iBACnfZ9GUeusa8OCLAOq7eIK92ki6Io.N/4Ly7pR.', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-03-28 13:11:15', '2017-03-28 13:11:15', 0x00000000000000000000000000000000),
(29, '1', '', '', '$2y$10$7FfUv/ytrMgkuTLFk1KBG.IUFGhjTaHWs35fIdF4Kql1UjutiGYB6', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-03-28 13:14:41', '2017-03-28 13:14:41', 0x00000000000000000000000000000000),
(30, '1', '', '', '$2y$10$.LlBTjYR2dNHmVk99uhvQOXZ/zruesxX0qs9/q9eUnKQ36wo1vUA6', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-03-28 13:15:47', '2017-03-28 13:15:47', 0x00000000000000000000000000000000),
(31, '', '', 'ffff', '$2y$10$5szBfBE4sb3xWbqP7/FBtu5Sjc3bN6cjJnmEZNCAYDPBopCQqc2Ra', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-04-14 10:09:12', '2017-04-14 10:09:12', 0x00000000000000000000000000000000);

-- --------------------------------------------------------

--
-- Estrutura para tabela `advisors`
--

CREATE TABLE `advisors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `mobile` int(13) NOT NULL,
  `photo` longblob NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `ip` binary(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `mobile` int(13) NOT NULL,
  `photo` longblob NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `ip` binary(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `customers`
--

INSERT INTO `customers` (`id`, `name`, `cpf`, `mail`, `password`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `photo`, `created`, `modified`, `ip`) VALUES
(2, 'a', '', 'a', '$2y$10$i/e01X5qriADDqdINxgNMOWetZJDfzGLVLkfqETqqaLhy4cNYACAC', '0000-00-00', '', '', 0, '', '', 0, 0, '', '2017-03-24 17:31:48', '2017-03-24 17:31:48', 0x00000000000000000000000000000000);

-- --------------------------------------------------------

--
-- Estrutura para tabela `gyms`
--

CREATE TABLE `gyms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `mobile` int(13) NOT NULL,
  `icon` longblob NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `advisors`
--
ALTER TABLE `advisors`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `gyms`
--
ALTER TABLE `gyms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de tabela `advisors`
--
ALTER TABLE `advisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `gyms`
--
ALTER TABLE `gyms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
