-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/11/2024 às 19:25
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
-- Banco de dados: `munduca_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividades`
--

CREATE TABLE `atividades` (
  `id_atividade` int(11) NOT NULL,
  `materia` varchar(45) NOT NULL,
  `num_att` int(45) NOT NULL,
  `pontos` int(110) NOT NULL,
  `rg_pai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `calendar`
--

CREATE TABLE `calendar` (
  `id_calendar` int(11) NOT NULL,
  `materia` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `rg_pai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `configurações`
--

CREATE TABLE `configurações` (
  `id_config` int(45) NOT NULL,
  `font_size` varchar(45) NOT NULL,
  `alto_contra` tinyint(1) NOT NULL,
  `tip_daltonismo` varchar(100) NOT NULL,
  `rg_pai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `criancas`
--

CREATE TABLE `criancas` (
  `rg_pai` varchar(200) NOT NULL,
  `nome_aluno` varchar(110) NOT NULL,
  `instituicao_ensino` varchar(45) NOT NULL,
  `ano_ensino` varchar(45) NOT NULL,
  `nivel_escolaridade` varchar(110) NOT NULL,
  `foto_perfil` varchar(110) NOT NULL,
  `pontos` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `desenhos`
--

CREATE TABLE `desenhos` (
  `rg_pai` varchar(200) NOT NULL,
  `desenho` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `emblemas`
--

CREATE TABLE `emblemas` (
  `rg_pai` varchar(200) NOT NULL,
  `emblema` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pais_responsaveis`
--

CREATE TABLE `pais_responsaveis` (
  `rg_pai` varchar(200) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `tipo_de_conta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id_atividade`);

--
-- Índices de tabela `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id_calendar`);

--
-- Índices de tabela `configurações`
--
ALTER TABLE `configurações`
  ADD PRIMARY KEY (`id_config`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id_atividade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id_calendar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `configurações`
--
ALTER TABLE `configurações`
  MODIFY `id_config` int(45) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
