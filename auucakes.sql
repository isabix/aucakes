-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/11/2023 às 02:53
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `auucakes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(110) NOT NULL,
  `nome` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `telefone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `email`, `senha`, `telefone`) VALUES
(13, 'bea', 'bea@gmail.com', '2810', '(44) 22222-2222'),
(19, 'isa', 'isa@gmail.com', '2610', '(00) 00000-0000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(110) NOT NULL,
  `nome` varchar(110) NOT NULL,
  `preco` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(1, 'Limão Siciliano', 'R$30,00/kg'),
(2, 'Banoffe', 'R$38,00/KG'),
(3, 'Frutas Amarelas', 'R$28,00/KG'),
(4, 'Trufado de Chocolate Zero Açúcar', 'R$45,00/KG'),
(5, 'Trufado de Chocolate com Morango Zero Açúcar', 'R$48,00/KG'),
(6, 'Trufado de Chocolate', 'R$40,00/KG'),
(7, 'CHOCOLATE CHIPS', 'R$5,00/UNI'),
(8, 'TRIPLE CHOCOLATE', 'R$5,50/UNI'),
(9, 'DOUBLE CHOCOLATE', 'R$5,25/UNI'),
(10, 'OATMEAL RAISINS', 'R$5,00/UNI'),
(11, 'WHITE CHOCOLATE CHIPS WHITE WALNUTS', 'R$5,75/UNI'),
(12, 'BROWNIE COOKIE', 'R$5,50/UNI'),
(13, 'COOKIE WITH FRUITS', 'R$9,75/UNI'),
(14, 'CHOCOLATE CHIPS WITH MACADAMIA', 'R$7,00/UNI'),
(15, 'CHOCOLATE CHIPS WITH WALNUTS', 'R$5,75/UNI'),
(16, 'COOKIE FIT', 'R$5,25/UNI'),
(17, 'DUPLO DIET', 'R$5,00/UNI'),
(18, 'COOKIE SANDWICH', 'R$12,00/UNI'),
(19, 'FRAMBOESA', 'R$12,00'),
(20, 'MAÇA VERDE', 'R$11,50'),
(21, 'PINK LEMONADE', 'R$11,75'),
(22, 'LIMÃO SICILIANO', 'R$11,25'),
(23, 'COOKIE SHAKE', 'R$13,00'),
(24, 'MILK SHAKE', 'R$12,50'),
(25, 'MALCHENEY', 'R$12,75'),
(26, 'Bolo Massa Folhada com baba de moça e doce de leite', 'R$55,00/KG'),
(27, 'Red velvet perfil brasileiro', 'R$42,00/KG'),
(28, 'Red velvet perfil americano', 'R$45,00/KG'),
(29, 'Bolo Moça de churros', 'R$35,00/KG'),
(30, 'Bolo da Maria', 'R$50,00/KG'),
(31, 'Brigadeirinho', 'R$32,00/KG'),
(32, 'MUD FRAPPÉ', 'R$13,25'),
(33, 'CHOCOLATE GELADO', 'R$12,50'),
(34, 'PÃO DE QUEIJO', 'R$26,90/KG'),
(35, 'SONOMA', 'R$10,50/UNI'),
(36, 'TURLOCK', 'R$10,25/UNI'),
(37, 'PETALUMA', 'R$10,75/UNI'),
(38, 'SAN DIEGO', 'R$11,00/UNI'),
(39, 'YUBA', 'R$11,50/UNI');

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `visitasN` int(110) NOT NULL,
  `pedidosN` varchar(110) NOT NULL,
  `entregues` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `relatorio`
--

INSERT INTO `relatorio` (`visitasN`, `pedidosN`, `entregues`) VALUES
(6, '4', '14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(110) NOT NULL,
  `nome` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `pessoas` varchar(110) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `dataP` date NOT NULL,
  `produtos` varchar(110) NOT NULL,
  `cpf` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `pessoas`, `telefone`, `dataP`, `produtos`, `cpf`) VALUES
(34, 'isabeli', 'isa1@gmail.com', '3', '(41) 88888-8888', '2023-11-18', '3', '003.948.089-59'),
(35, 'isabeli', 'isa2@gmail.com', '4', '(11) 11111-1111', '2023-11-23', '4', '003.948.089-59'),
(36, 'isabeli vitoria lopes barbosa', 'isa1@gmail.com', '3', '(41) 99112-2651', '2023-11-23', '1', '003.948.089-59'),
(43, 'aaaa', 'aaaa@gmail.com', '3', '(44) 44444-4444', '2023-11-23', '3', '777.777.777-77');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_excluido`
--

CREATE TABLE `usuario_excluido` (
  `id` int(110) NOT NULL,
  `nome` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `pessoas` varchar(110) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `dataP` date NOT NULL,
  `produtos` varchar(110) NOT NULL,
  `cpf` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario_excluido`
--

INSERT INTO `usuario_excluido` (`id`, `nome`, `email`, `pessoas`, `telefone`, `dataP`, `produtos`, `cpf`) VALUES
(31, 'teste1', 'teste1@gmail.com', '1', '(47) 47474-7471', '2023-11-16', '1', '003.003.003-00'),
(32, 'teste2', 'teste2@gmail.com', '2', '(22) 22222-2222', '2023-11-10', '2', '222.222.222-22'),
(33, 'TESTE4', 'TESTE4@GMAI.COM', '2', '(41) 99112-2653', '2023-11-10', '2', '000.000.000-00'),
(37, 'maria eduarda', 'maria@gmail.com', '7', '(41) 99112-2651', '2023-11-23', '5', '039.341.619-44'),
(38, 'isabeli', 'isa1@gmail.com', '5', '(41) 99287-8900', '2023-11-24', '5', '003.948.089-59'),
(39, 'isabeli vitoria lopes barbosa', 'wfefw@gmail.com', '9', '(41) 99287-8900', '2023-11-30', '39', '003.948.089-59'),
(40, 'ma', 'ma@gmail.com', '8', '(41) 99287-8902', '2024-01-25', '1', '000.000.000-00'),
(41, 'bbbbbbbbb', 'b@gmail.com', '5', '(44) 44444-4440', '2023-11-24', '5', '444.444.444-44'),
(42, 'beatriz', 'beatriz@gmail.com', '7', '(77) 77777-7777', '2023-11-25', '12', '777.777.777-77'),
(44, 'isabeli vitoria lopes barbosa', 'isa1@gmail.com', '3', '(41) 99287-8900', '2023-11-30', '15', '003.948.089-59'),
(45, 'isabeli vitoria lopes barbosa', 'isa1@gmail.com', '3', '(41) 99287-8907', '2024-01-18', '8', '777.777.777-77'),
(46, 'teste', 'wfefw@gmail.com', '3', '(44) 44444-4444', '2023-11-23', '1', '444.444.444-44'),
(47, 'isabeli', 'isa1@gmail.com', '3', '(55) 55555-5555', '2023-11-22', '3', '888.888.888-88'),
(48, 'isabeli vitoria lopes barbosa', 'isa1@gmail.com', '3', '(44) 44444-4440', '2023-11-24', '7', '202.020.202-02');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario_excluido`
--
ALTER TABLE `usuario_excluido`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `usuario_excluido`
--
ALTER TABLE `usuario_excluido`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
