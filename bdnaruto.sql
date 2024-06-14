-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/06/2024 às 00:23
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdnaruto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `justsu` varchar(100) NOT NULL,
  `datanascimento` int(8) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `endereco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `email`, `justsu`, `datanascimento`, `senha`, `endereco`) VALUES
('', '', '', '', 0, '', ''),
('000', 'talita ', 'talita@t.bnr', 'u', 2000, '12345', 'av'),
('04282246790', 'jr', 'oi@oi.br', 'oi', 2024, '0', 'a'),
('138', 'jean ', 'teste@teste.br', 'secreto da aldeia da folha', 0, '', 'av'),
('13885127776', 'jean pinheiro sobral', 'jeansobralrj@gmail.com', 'rinegan supremo ', 0, '123456', 'p'),
('13885127779', 'jean ', 'jeansobalrj@gmail.com', 'rinegan supremo ', 0, '', 'av'),
('2', 'JEAN PINHEIRO SOBRAL', 'ain@ainda.br', 'rinegan supremo ', 0, '0', '20950071'),
('3', 'JEAN PINHEIRO SOBRAL', 'jeanpsobral@teste.br', 'rinegan supremo ', 0, '0', '20950071'),
('6989771011', 'fab', 'oie@oie.br', 'rinegan supremo ', 2002, '0', 'av'),
('963', 'j', 'rinegan@ficitio.br', 'rinegan supremo ', 2003, '', 'ac'),
('999', 'JEAN PINHEIRO SOBRAL', 'jeanpsobral@teste.ber', 'rinegan supremo ', 0, '', '20950071'),
('99999', 'JEAN PINHEIRO SOBRAL', 'jeanpsobral@teste.bere', 'rinegan supremo ', 0, '', '20950071'),
('999999', 'JEAN PINHEIRO SOBRAL', 'jeanpsobral@teste.beree', 'rinegan supremo ', 0, '', '20950071'),
('caa', 'a', 'e@e', 'oi', 5, '', 'a');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `nomeproduto` varchar(70) NOT NULL,
  `valor` float NOT NULL,
  `descricao` varchar(70) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`nomeproduto`, `valor`, `descricao`, `codigo`) VALUES
('boneco naruto', 29.9, 'naruto crianca', 1),
('boneco naruto', 29.9, 'naruto crianca', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `codigovenda` int(11) NOT NULL,
  `codigoproduto` int(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `datavenda` int(11) NOT NULL DEFAULT current_timestamp(),
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`codigovenda`, `codigoproduto`, `email`, `datavenda`, `quantidade`) VALUES
(13, 0, '1', 1, NULL),
(14, 0, '1', 1, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`),
  ADD UNIQUE KEY `cpf` (`cpf`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`codigovenda`),
  ADD KEY `codigoproduto` (`codigoproduto`),
  ADD KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `codigovenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
