-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2018 às 20:37
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 5.6.36

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
  `preco` varchar(20) NOT NULL,
  `tipo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assinaturas`
--

INSERT INTO `assinaturas` (`id`, `nome_produto`, `descricao_produto`, `url`, `preco`, `tipo`) VALUES
(1, 'Pacote com verduras (P)', 'Pacote contendo só verduras para aqueles que não desejam frutas (pacote de tamanho pequeno)', 'img/farm1.jpg', '40,00', 'Pequeno'),
(2, 'Pacote com verduras (M)', 'Pacote contendo só verduras para aqueles que não desejam frutas (pacote de tamanho médio)', 'img/back2.jpg', '65,00', 'Médio'),
(3, 'Pacote com verduras (G)', 'Pacote contendo só verduras para aqueles que não desejam frutas (pacote de tamanho grande)', 'img/verG.jpg', '90,00', 'Grande'),
(4, 'Pacote misto (P)\r\n\r\n', 'Pacote misto surpresa pequeno contendo tanto verduras quanto frutas', 'img/farm1.jpg', '45,00', 'Pequeno'),
(5, 'Pacote misto (M)\r\n', 'Pacote misto surpresa médio contendo tanto verduras quanto frutas', './img/back12.jpg', '75,00', 'Médio'),
(6, 'Pacote misto (G)\r\n', 'Pacote misto surpresa grande contendo tanto verduras quanto frutas', './img/back12.jpg', '100,00', 'Grande'),
(7, 'Pacote com frutas (P)', 'Pacote contendo só frutas para aqueles que não desejam verduras (pacote de tamanho pequeno)', './img/back12.jpg', '42,00', 'Pequeno'),
(8, 'Pacote com frutas (M)', 'Pacote contendo só frutas para aqueles que não desejam verduras (pacote de tamanho médio)', './img/fruM.jpg', '67,00', 'Médio'),
(9, 'Pacote com frutas (G)', 'Pacote contendo só verduras para aqueles que não desejam verduras (pacote de tamanho grande)', './img/fruG.png', '95,00', 'Grande');

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
  `ncasa` int(250) NOT NULL,
  `tipo` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomes`, `email`, `login`, `senha`, `estado`, `cidade`, `bairro`, `rua`, `ncasa`, `tipo`) VALUES
(1, 'Arion Pereira', 'arion.cerceau@gmail.com', 'Arion49', '12345', 'MG', 'Betim', 'Santa Lucia', 'Rua Joaquim Luiz de Carvalho', 473, NULL),
(2, 'Bruce', 'bruce@leon', 'Bruce', 'abcde', 'MG', 'Joao', 'SSSSS', 'KKKKK', 566, NULL),
(3, 'EduardoMelo', 'eduardomsena@hotmail.com', 'HomenAco', '123456', 'MG', 'Betim', 'Bom retiro', 'Rua JÃºlio CÃ©sar de Freitas', 326, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

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
