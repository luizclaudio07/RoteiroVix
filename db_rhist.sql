-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2017 às 18:02
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rhist`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `url` varchar(45) NOT NULL,
  `id_local` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acesso`
--

CREATE TABLE `nivel_acesso` (
  `id` int(11) NOT NULL,
  `descricao` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nivel_acesso`
--

INSERT INTO `nivel_acesso` (`id`, `descricao`) VALUES
(1, 'Administrador'),
(9, 'Master');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estilo`
--

CREATE TABLE `tb_estilo` (
  `id` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_estilo`
--

INSERT INTO `tb_estilo` (`id`, `descricao`) VALUES
(1, 'Neocolonial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ponto`
--

CREATE TABLE `tb_ponto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `x` double NOT NULL,
  `y` double NOT NULL,
  `cep` int(11) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `construtor` varchar(255) DEFAULT NULL,
  `proprietario` varchar(255) DEFAULT NULL,
  `usuário_cadastro` varchar(15) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `estilo` int(11) NOT NULL,
  `utl_foto_capa` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_ponto`
--

INSERT INTO `tb_ponto` (`id`, `nome`, `tipo`, `x`, `y`, `cep`, `rua`, `bairro`, `autor`, `construtor`, `proprietario`, `usuário_cadastro`, `data_cadastro`, `estilo`, `utl_foto_capa`) VALUES
(1, 'Ponto A', 'CO', -20.300769, -40.291355, 29276531, 'Rua teste', 'Bairro teste', NULL, NULL, NULL, 'luizclaudio', '2017-09-05 00:00:00', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_ponto`
--

CREATE TABLE `tb_tipo_ponto` (
  `id` varchar(2) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tipo_ponto`
--

INSERT INTO `tb_tipo_ponto` (`id`, `descricao`) VALUES
('CO', 'Construção'),
('MO', 'Morro'),
('PR', 'Praça'),
('PA', 'Praia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` varchar(15) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `nivel_acesso` tinyint(1) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `senha` varchar(32) NOT NULL COMMENT 'Criptografia MD5'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `nivel_acesso`, `data_cadastro`, `senha`) VALUES
('admin', 'Administrador Master', 9, '2017-09-05 13:09:00', 'd829b843a6550a947e82f2f38ed6b7a7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`,`url`),
  ADD UNIQUE KEY `idFotos_UNIQUE` (`id`);

--
-- Indexes for table `tb_estilo`
--
ALTER TABLE `tb_estilo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ponto`
--
ALTER TABLE `tb_ponto`
  ADD PRIMARY KEY (`id`,`cep`),
  ADD UNIQUE KEY `nome_UNIQUE` (`nome`),
  ADD UNIQUE KEY `rua_UNIQUE` (`rua`),
  ADD UNIQUE KEY `cep_UNIQUE` (`cep`);

--
-- Indexes for table `tb_tipo_ponto`
--
ALTER TABLE `tb_tipo_ponto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IDTipo_UNIQUE` (`id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ponto`
--
ALTER TABLE `tb_ponto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
