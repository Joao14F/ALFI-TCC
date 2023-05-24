-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2023 às 21:23
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `Id modelo` int(11) NOT NULL,
  `Título` varchar(50) NOT NULL,
  `Sustentável` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Comprimento` varchar(50) DEFAULT NULL,
  `Quadril` varchar(50) DEFAULT NULL,
  `Cintura` varchar(50) DEFAULT NULL,
  `Gancho` varchar(50) DEFAULT NULL,
  `Arquivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `moderador`
--

CREATE TABLE `moderador` (
  `Id moderador` int(11) NOT NULL,
  `Cadastro moderador` varchar(90) NOT NULL,
  `Nome moderador` varchar(30) NOT NULL,
  `E-mail moderador` varchar(30) NOT NULL,
  `Senha moderador` varchar(30) NOT NULL,
  `Modelos inspecionados` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuário`
--

CREATE TABLE `usuário` (
  `Id usuário` int(11) NOT NULL,
  `Cadastro` varchar(120) NOT NULL,
  `Nome usuário` varchar(30) NOT NULL,
  `E-mail usuário` varchar(30) NOT NULL,
  `Telefone usuário` varchar(30) NOT NULL,
  `Senha usuário` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`Id modelo`);

--
-- Índices para tabela `moderador`
--
ALTER TABLE `moderador`
  ADD PRIMARY KEY (`Id moderador`);

--
-- Índices para tabela `usuário`
--
ALTER TABLE `usuário`
  ADD PRIMARY KEY (`Id usuário`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `modelo`
--
ALTER TABLE `modelo`
  MODIFY `Id modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `moderador`
--
ALTER TABLE `moderador`
  MODIFY `Id moderador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuário`
--
ALTER TABLE `usuário`
  MODIFY `Id usuário` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
