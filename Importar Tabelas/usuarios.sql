-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Set-2018 às 00:33
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nomes` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `rua` varchar(250) NOT NULL,
  `ncasa` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomes`, `email`, `login`, `senha`, `estado`, `cidade`, `bairro`, `rua`, `ncasa`) VALUES
(1, 'Arion Pereira', 'arion.cerceau@gmail.com', 'Arion49', '12345', 'MG', 'Betim', 'Santa Lucia', 'Rua Joaquim Luiz de Carvalho', 473),
(2, 'Bruce', 'bruce@leon', 'Bruce', 'abcde', 'MG', 'Joao', 'SSSSS', 'KKKKK', 566);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
