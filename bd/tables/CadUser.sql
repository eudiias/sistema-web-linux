-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24/03/2026 às 19:40
-- Versão do servidor: 8.0.45-0ubuntu0.24.04.1
-- Versão do PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_web_linux`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadUser`
--

CREATE TABLE `CadUser` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `CadUser`
--

INSERT INTO `CadUser` (`id`, `nome`, `email`, `senha`) VALUES
(7, '', '', ''),
(32, 'Diias', 'algumemail@gmail.com', '2202'),
(34, 'aaa', 'adada@ndadgn.coefini', 'r39j'),
(36, 'qwrqrqw', 'qwrqwr@feof', 'fwmowfw'),
(41, 'Dias', 'carlos.dias.o.n@gmail.com', '$2y$10$uxwCM3qoy591xJQWDrl.0.ITGEw1iSr8OISkxjEnr26WxYTDZbE.C'),
(42, 'Fer', 'fer@gmail.com', '$2y$10$RxMAb5rKR5JwCz6OmKGHSez0bTgBDqeQDkwRoF9FXvYngpM5DIrb2'),
(43, 'Diias', 'carlin@gmail.com', '$2y$10$VbPahFQ99025DPvDm7Bhbu/B86kTL90NokEio7xhz5kpCB54NXMjO'),
(45, 'Diiias', 'diazin@gmail.com', '$2y$10$09ZxS8ey3ztTPNujw/Y3numTeXdam0xlwrsyg9QXGXniMM.O3FC7K'),
(48, 'fowogwog', 'dojgowe@gojgn.c0en', '$2y$10$pvlptxgJ7/fjLBoGq3gjE.vwNVsbnKaZrCIKtfIyH7A.CPJevwKP2'),
(51, '3tj329tj', 'ojntqwogne@nignidg.cm', '$2y$10$hgZP24Voys.cRwV6sMrFc.EPnZ5LBX2bj2azSQYJ6Y2cDNnPCrOB6'),
(52, 'Carlos', 'Carlindograu@gmail.com', '$2y$10$gUtcm.t6MuhXhxPCSDyKme/m91QgSHKDvGSKA40QtnX9hsKqjV7j6'),
(53, 'carloos', 'sla@gmail.com', '$2y$10$ffrTXJNNfwDDga4M2/BRyOcQTeE20HE4ltPHSttRxwgA4h2KJ3UYa');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `CadUser`
--
ALTER TABLE `CadUser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `CadUser`
--
ALTER TABLE `CadUser`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
