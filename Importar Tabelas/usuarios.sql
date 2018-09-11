-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2018 às 02:55
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
-- Estrutura da tabela `assinaturas`
--

CREATE TABLE `assinaturas` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(200) NOT NULL,
  `descricao_produto` text,
  `url` varchar(300) NOT NULL,
  `preco` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assinaturas`
--

INSERT INTO `assinaturas` (`id`, `nome_produto`, `descricao_produto`, `url`, `preco`) VALUES
(1, 'Caixa 01', 'Caixa desenvolvida', 'img/farm1.jpg', '12,30'),
(2, 'Caixa 02', 'Caixa desenvolvida', 'img/farm1.jpg', '12,30'),
(3, 'Caixa 03', 'Caixa desenvolvida', 'img/farm1.jpg', '12,30'),
(4, 'Caixa 04', 'Caixa desenvolvida', 'img/farm1.jpg', '12,30'),
(5, 'Caixa do Arion', 'peidorrero', './img/back12.jpg', '120,00'),
(6, 'Exemplo edu', 'sadasdsadsadsa', './img/back12.jpg', '5.000'),
(7, 'kk bigarel', 'lembra de editar em', './img/back12.jpg', '23'),
(8, 'Produto 8', 'Detalhes', './img/back12.jpg', '25'),
(9, 'Produto 9', 'Detalhes', './img/back12.jpg', '25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ass_detalhes`
--

CREATE TABLE `ass_detalhes` (
  `id` int(11) NOT NULL,
  `id_ass` int(11) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ass_detalhes`
--

INSERT INTO `ass_detalhes` (`id`, `id_ass`, `url`) VALUES
(1, 1, 'https://sfagro.uol.com.br/wp-content/uploads/2017/01/2301-frutas-uva-melao-melancia-abacaxi-banana-pera-maca-pessego.jpg'),
(2, 2, 'https://sfagro.uol.com.br/wp-content/uploads/2017/01/2301-frutas-uva-melao-melancia-abacaxi-banana-pera-maca-pessego.jpg'),
(3, 3, 'https://sfagro.uol.com.br/wp-content/uploads/2017/01/2301-frutas-uva-melao-melancia-abacaxi-banana-pera-maca-pessego.jpg'),
(4, 4, 'https://sfagro.uol.com.br/wp-content/uploads/2017/01/2301-frutas-uva-melao-melancia-abacaxi-banana-pera-maca-pessego.jpg'),
(5, 5, './img/back12.jpg'),
(6, 6, './img/back12.jpg'),
(7, 7, './img/back12.jpg'),
(8, 8, './img/back12.jpg'),
(9, 9, './img/back12.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `minha_ass`
--

CREATE TABLE `minha_ass` (
  `id` int(11) NOT NULL,
  `id_assinaturas` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT 'medio',
  `modo_entrega` varchar(200) DEFAULT 'nulo',
  `forma_pagamento` varchar(200) DEFAULT 'Boleto',
  `titulo_produto` varchar(200) DEFAULT NULL,
  `preco_produto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `minha_ass`
--

INSERT INTO `minha_ass` (`id`, `id_assinaturas`, `id_usuario`, `quantidade`, `tipo`, `modo_entrega`, `forma_pagamento`, `titulo_produto`, `preco_produto`) VALUES
(45, 2, 3, 3, 'medio', 'mensais', 'Boleto', 'Caixa 02', '12,30'),
(46, 3, 3, 2, 'medio', 'quinzenal', 'Cartao', 'Caixa 03', '12,30'),
(47, 2, 3, 1, 'medio', 'mensais', 'Boleto', 'Caixa 02', '12,30'),
(48, 2, 1, 3, 'medio', 'mensais', 'Boleto', 'Caixa 02', '12,30');

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
(2, 'Bruce', 'bruce@leon', 'Bruce', 'abcde', 'MG', 'Joao', 'SSSSS', 'KKKKK', 566),
(3, 'EduardoMelo', 'eduardomsena@hotmail.com', 'HomenAco', '123456', 'MG', 'Betim', 'Bom retiro', 'Rua JÃºlio CÃ©sar de Freitas', 326);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assinaturas`
--
ALTER TABLE `assinaturas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ass_detalhes`
--
ALTER TABLE `ass_detalhes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ass` (`id_ass`);

--
-- Indexes for table `minha_ass`
--
ALTER TABLE `minha_ass`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_assinaturas` (`id_assinaturas`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assinaturas`
--
ALTER TABLE `assinaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ass_detalhes`
--
ALTER TABLE `ass_detalhes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `minha_ass`
--
ALTER TABLE `minha_ass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ass_detalhes`
--
ALTER TABLE `ass_detalhes`
  ADD CONSTRAINT `ass_detalhes_ibfk_1` FOREIGN KEY (`id_ass`) REFERENCES `assinaturas` (`id`);

--
-- Limitadores para a tabela `minha_ass`
--
ALTER TABLE `minha_ass`
  ADD CONSTRAINT `minha_ass_ibfk_1` FOREIGN KEY (`id_assinaturas`) REFERENCES `assinaturas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
