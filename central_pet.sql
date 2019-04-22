-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 22-Abr-2019 às 23:41
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `central_pet`
--
CREATE DATABASE IF NOT EXISTS `central_pet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `central_pet`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adocao`
--

CREATE TABLE IF NOT EXISTS `adocao` (
  `id_adocao` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `id_adotante` varchar(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_adocao`),
  KEY `id_animal` (`id_animal`),
  KEY `id_adotante` (`id_adotante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `adocao`
--

INSERT INTO `adocao` (`id_adocao`, `id_animal`, `id_adotante`, `data`) VALUES
(4, 12, '43044137871', '2019-04-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `adotantes`
--

CREATE TABLE IF NOT EXISTS `adotantes` (
  `id_adotante` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `especie_interesse` varchar(50) NOT NULL,
  `idade_interesse` int(11) NOT NULL,
  PRIMARY KEY (`id_adotante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adotantes`
--

INSERT INTO `adotantes` (`id_adotante`, `nome`, `telefone`, `endereco`, `especie_interesse`, `idade_interesse`) VALUES
('43044137871', 'Manuela Miranda', '1633360403', 'Av Diogenes Muniz Barreto', 'Cachorro', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `raca` varchar(30) NOT NULL,
  `peso` float NOT NULL,
  `sexo` char(1) NOT NULL,
  `idade` int(11) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `foto_animal` varchar(100) NOT NULL,
  PRIMARY KEY (`id_animal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`id_animal`, `nome`, `raca`, `peso`, `sexo`, `idade`, `especie`, `foto_animal`) VALUES
(11, 'Salem', 'Sem raça', 10, 'm', 8, 'Cachorro', '<img src=''img_upload/20190422225935_cao-vira-lata-1.jpg'' class= ''foto'' />'),
(12, 'Jujuba', 'Husky', 10, 'f', 2, 'Cachorro', '<img src=''img_upload/20190422225951_500000291_medium.jpg'' class= ''foto'' />');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_funcionario` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome`, `telefone`) VALUES
('43044137837', 'Marcos Pio', '16996448776');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` varchar(15) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` char(1) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `sexo`, `data_nascimento`, `email`, `senha`, `permissao`) VALUES
('marcos', 'Marcos José Pio', 'M', '1994-04-08', 'piio.marcos@gmail.com', 'Salem1994', 1),
('pedro', 'Pedro Henrique Barnabe', 'M', '1991-07-31', 'peehenriqueb@hotmail.com', 'pedro25*', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinacao`
--

CREATE TABLE IF NOT EXISTS `vacinacao` (
  `id_vacinacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` varchar(11) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_vacinacao`),
  KEY `id_funcionario` (`id_funcionario`),
  KEY `id_funcionario_2` (`id_funcionario`),
  KEY `id_animal` (`id_animal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `vacinacao`
--

INSERT INTO `vacinacao` (`id_vacinacao`, `id_funcionario`, `id_animal`, `data`) VALUES
(2, '43044137837', 12, '2019-01-10');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_adocao_adotante_animal`
--
CREATE TABLE IF NOT EXISTS `view_adocao_adotante_animal` (
`id_adocao` int(11)
,`animal` varchar(50)
,`adotante` varchar(50)
,`data` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_vacinacao_funcionario_animal`
--
CREATE TABLE IF NOT EXISTS `view_vacinacao_funcionario_animal` (
`id_vacinacao` int(11)
,`funcionario` varchar(50)
,`nome` varchar(50)
,`data` date
);
-- --------------------------------------------------------

--
-- Structure for view `view_adocao_adotante_animal`
--
DROP TABLE IF EXISTS `view_adocao_adotante_animal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_adocao_adotante_animal` AS select `adocao`.`id_adocao` AS `id_adocao`,`a`.`nome` AS `animal`,`adt`.`nome` AS `adotante`,`adocao`.`data` AS `data` from ((`animal` `a` join `adocao` on((`a`.`id_animal` = `adocao`.`id_animal`))) join `adotantes` `adt` on((`adocao`.`id_adotante` = `adt`.`id_adotante`)));

-- --------------------------------------------------------

--
-- Structure for view `view_vacinacao_funcionario_animal`
--
DROP TABLE IF EXISTS `view_vacinacao_funcionario_animal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_vacinacao_funcionario_animal` AS select `vacinacao`.`id_vacinacao` AS `id_vacinacao`,`f`.`nome` AS `funcionario`,`a`.`nome` AS `nome`,`vacinacao`.`data` AS `data` from ((`funcionario` `f` join `vacinacao` on((`f`.`id_funcionario` = `vacinacao`.`id_funcionario`))) join `animal` `a` on((`vacinacao`.`id_animal` = `a`.`id_animal`)));

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `adocao`
--
ALTER TABLE `adocao`
  ADD CONSTRAINT `adocao_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`),
  ADD CONSTRAINT `adocao_ibfk_2` FOREIGN KEY (`id_adotante`) REFERENCES `adotantes` (`id_adotante`);

--
-- Limitadores para a tabela `vacinacao`
--
ALTER TABLE `vacinacao`
  ADD CONSTRAINT `vacinacao_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`id_funcionario`),
  ADD CONSTRAINT `vacinacao_ibfk_2` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
