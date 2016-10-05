-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `supoinfor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado`
--

CREATE TABLE IF NOT EXISTS `chamado` (
  `id_chamado` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(70) NOT NULL,
  `servico` varchar(50) DEFAULT NULL,
  `assunto` varchar(60) DEFAULT NULL,
  `militar_chamado` varchar(100) NOT NULL,
  `texto` text,
  `parecer` text NOT NULL,
  `situacao` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(18) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `secao_chamado` varchar(20) NOT NULL,
  PRIMARY KEY (`id_chamado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Extraindo dados da tabela `chamado`
--

INSERT INTO `chamado` (`id_chamado`, `tipo`, `servico`, `assunto`, `militar_chamado`, `texto`, `parecer`, `situacao`, `data`, `hora`, `ip`, `status`, `secao_chamado`) VALUES
(77, 'problema', 'ManutenÃ§Ã£o e instalaÃ§Ã£o de impressoras', 'xwxaxsaxxs', 'sdqsw', 'slsckmdlkcdskksckslm', '', 0, '2014-04-09', '22:22:39', '::1', 1, 'Administrador'),
(76, 'incidente', 'ManutenÃ§Ã£o e instalaÃ§Ã£o de impressoras', 'acscsaxsax', 'scdscdscds', 'csdcsajcka k', '', 0, '2014-04-09', '22:22:13', '::1', 1, 'Administrador'),
(75, 'solicitacao', 'ManutenÃ§Ã£o e instalaÃ§Ã£o de impressoras', 'sdjdcjkdckd kcs dnm', 's nsnm sdmn cnm ', 'sjkc dns cnd cmds mn&nbsp;', '', 0, '2014-04-09', '22:22:01', '::1', 1, 'Administrador'),
(73, 'solicitacao', 'ManutenÃ§Ã£o de hardware', 'teste', 'teste', 'atestaaasas', 'NÃ£o encontramos uma soluÃ§Ã£o', 2, '2014-04-02', '14:03:17', '127.0.0.1', 0, 'Administrador'),
(74, 'problema', 'Redes de dados', 'sfldjsn', 'qsddcdsm', 'sdlcm,sd c, dsn ncs n&nbsp;<div><br></div><div>slddcsdcs</div><div><br></div>', '', 0, '2014-04-09', '22:21:45', '::1', 1, 'Administrador'),
(71, 'solicitacao', 'ManutenÃ§Ã£o de hardware', 'ManutenÃ§Ã£o ', 'Sgt Teste', 'Solicito-vos que seja feita uma manutenÃ§Ã£o no hardware desta seÃ§Ã£o.&nbsp;<div>Estamos precisando tambÃ©m atualizar o JAVA</div><div>Att. Fulano</div>', 'teste de parecer<div><br></div>', 1, '2014-04-02', '13:06:58', '127.0.0.1', 0, 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacao`
--

CREATE TABLE IF NOT EXISTS `informacao` (
  `id_informacao` int(11) NOT NULL AUTO_INCREMENT,
  `informe` text NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `ip` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_informacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `om`
--

CREATE TABLE IF NOT EXISTS `om` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_om` varchar(70) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `secao_res` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `om`
--

INSERT INTO `om` (`id`, `nome_om`, `cidade`, `secao_res`, `foto`) VALUES
(1, '25Âº BatalhÃ£o de CaÃ§adores', 'Teresina-PI', 'SeÃ§Ã£o de InformÃ¡tica - 25ÂºBC', 'imagens/25bc_logo.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem_de_servico`
--

CREATE TABLE IF NOT EXISTS `ordem_de_servico` (
  `id_ordem_servico` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_chamado` int(11) NOT NULL,
  PRIMARY KEY (`id_ordem_servico`,`id_usuario`,`id_chamado`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_chamado` (`id_chamado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Extraindo dados da tabela `ordem_de_servico`
--

INSERT INTO `ordem_de_servico` (`id_ordem_servico`, `id_usuario`, `id_chamado`) VALUES
(71, 38, 71),
(72, 37, 72),
(73, 38, 73),
(74, 38, 74),
(75, 38, 75),
(76, 38, 76),
(77, 38, 77);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE IF NOT EXISTS `resposta` (
  `id_resposta` int(11) NOT NULL AUTO_INCREMENT,
  `id_chamado` int(11) NOT NULL,
  `resposta` text,
  `resposta_secao` varchar(20) NOT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(18) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_resposta`,`id_chamado`),
  KEY `id_chamado` (`id_chamado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=184 ;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`id_resposta`, `id_chamado`, `resposta`, `resposta_secao`, `data`, `hora`, `ip`, `status`) VALUES
(181, 71, 'Teste de resposta<div><b>UsuÃ¡rio: </b>Teste</div><div><b>Senha: </b>Teste</div>', '1Âª SeÃ§Ã£o', '2014-04-02', '13:12:37', '127.0.0.1', 0),
(183, 74, 'Teste de resposta<div>aqui novo</div>', 'Sec Infor', '2014-04-14', '23:47:34', '::1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(60) DEFAULT NULL,
  `secao` varchar(45) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `login`, `senha`, `secao`, `data`, `hora`, `ip`, `status`, `nivel`) VALUES
(40, 'Sgt Carlos', 'tecnico', 'e10adc3949ba59abbe56e057f20f883e', 'SeÃ§Ã£o de InformÃ¡tica', '2014-04-11', '23:31:33', '::1', 1, 3),
(39, 'Sgt Ãlvaro ', 'alvaro', 'e10adc3949ba59abbe56e057f20f883e', 'SeÃ§Ã£o de InformÃ¡tica', '2014-04-09', '21:17:11', '::1', 1, 0),
(38, '1Âª SeÃ§Ã£o ', '1sec', 'bfaf36eccde70b4626aac0b0a12be94c', '1Âª SeÃ§Ã£o', '2014-04-02', '13:05:02', '127.0.0.1', 1, 1),
(36, 'PelotÃ£o de CominucaÃ§Ãµes', 'pelcom', '3aa4b2b468a05a0fa395b86b199e614d', 'Pel Com', '2014-03-31', '23:43:38', '127.0.0.1', 1, 2),
(37, 'SeÃ§Ã£o de InformÃ¡tica', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Sec Infor', '2014-04-01', '13:02:33', '127.0.0.1', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
