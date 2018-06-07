-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2018 às 00:40
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_sisreq`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `tipos_curso` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `tipos_curso`, `created`, `modified`) VALUES
(1, 'Licenciatura -- Ciências da Computação', '2018-06-06 18:23:19', '2018-06-06 18:23:19'),
(2, 'Licenciatura -- Letras/Inglês', '2018-06-06 18:23:31', '2018-06-06 18:23:31'),
(3, 'Licenciatura -- Letras/Português', '2018-06-06 18:23:41', '2018-06-06 18:23:41'),
(4, 'Bacharelado -- Administração', '2018-06-06 18:23:52', '2018-06-06 18:23:52'),
(5, 'Bacharelado -- Ciências Contábeis', '2018-06-06 18:24:02', '2018-06-06 18:24:02'),
(6, 'Bacharelado -- Relações Internacionais', '2018-06-06 18:24:16', '2018-06-06 18:24:16'),
(7, 'Bacharelado -- Sistema de Informação', '2018-06-06 18:24:30', '2018-06-06 18:24:30'),
(8, 'Licenciatura -- Computação', '2018-06-06 18:24:44', '2018-06-06 18:24:44'),
(9, 'Licenciatura -- Pedagogia', '2018-06-06 18:25:00', '2018-06-06 18:25:00'),
(10, 'Tecnologia -- Análise e Desenvolvimento de Sistemas', '2018-06-06 18:25:21', '2018-06-06 18:25:21'),
(11, 'Tecnologia -- Jogos Digitais', '2018-06-06 18:25:36', '2018-06-06 18:25:36'),
(12, 'Tecnologia -- Redes de Computadores', '2018-06-06 18:26:00', '2018-06-06 18:26:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatus`
--

CREATE TABLE `estatus` (
  `id` int(11) NOT NULL,
  `tipo_estatus` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estatus`
--

INSERT INTO `estatus` (`id`, `tipo_estatus`, `created`, `modified`) VALUES
(1, 'Deferido', '2018-06-06 19:12:43', '2018-06-06 19:12:43'),
(2, 'Em avaliação', '2018-06-06 19:12:54', '2018-06-06 19:12:54'),
(3, 'Enviado para avaliação', '2018-06-06 19:13:04', '2018-06-06 19:13:04'),
(4, 'Indeferido', '2018-06-06 19:13:14', '2018-06-06 19:13:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis`
--

CREATE TABLE `perfis` (
  `id` int(11) NOT NULL,
  `tipo_perfis` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfis`
--

INSERT INTO `perfis` (`id`, `tipo_perfis`, `created`, `modified`) VALUES
(1, 'Coordenador(a)', '2018-06-06 18:17:48', '2018-06-06 18:17:48'),
(2, 'Aluno(a)', '2018-06-06 18:18:03', '2018-06-06 18:18:03'),
(3, 'Agente de Secretaria', '2018-06-06 18:18:14', '2018-06-06 18:18:14'),
(4, 'Administrador', '2018-06-06 18:18:27', '2018-06-06 18:18:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `requerimentos`
--

CREATE TABLE `requerimentos` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `Justificativa` text NOT NULL,
  `setores_id` int(11) NOT NULL,
  `cursos_id` int(11) NOT NULL,
  `tiposrequerimentos_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `tipo_resposta` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores`
--

CREATE TABLE `setores` (
  `id` int(11) NOT NULL,
  `tipo_setor` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setores`
--

INSERT INTO `setores` (`id`, `tipo_setor`, `created`, `modified`) VALUES
(1, 'Acadêmico', '2018-06-06 19:15:52', '2018-06-06 19:15:52'),
(2, 'Coordenação', '2018-06-06 19:16:03', '2018-06-06 19:16:03'),
(3, 'Financeiro', '2018-06-06 19:16:13', '2018-06-06 19:16:13'),
(4, 'Secretaria', '2018-06-06 19:16:23', '2018-06-06 19:16:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposrequerimentos`
--

CREATE TABLE `tiposrequerimentos` (
  `id` int(11) NOT NULL,
  `tipo_requerimento` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tiposrequerimentos`
--

INSERT INTO `tiposrequerimentos` (`id`, `tipo_requerimento`, `created`, `modified`) VALUES
(1, 'Declaração de Passe', '2018-06-06 18:27:52', '2018-06-06 18:27:52'),
(2, 'Declaração de Escolaridade', '2018-06-06 18:28:01', '2018-06-06 18:28:01'),
(3, 'Declaração de Vínculo Acadêmico', '2018-06-06 18:28:11', '2018-06-06 18:28:11'),
(4, 'Cancelamento de Matrícula', '2018-06-06 18:28:22', '2018-06-06 18:28:22'),
(5, 'Conteúdo Programático das Disciplinas Cursadas (Ementas)', '2018-06-06 18:28:52', '2018-06-06 18:28:52'),
(6, 'Crítério de Avaliação', '2018-06-06 18:29:06', '2018-06-06 18:29:06'),
(7, 'Declaração anual de I.R', '2018-06-06 18:29:24', '2018-06-06 18:29:24'),
(8, 'Declaração de Conclusão', '2018-06-06 18:29:38', '2018-06-06 18:29:38'),
(9, 'Histórico Escolar', '2018-06-06 18:29:53', '2018-06-06 18:29:53'),
(10, 'Matrícula em Disciplina Especial', '2018-06-06 18:30:10', '2018-06-06 18:30:10'),
(11, 'Outros (Especificação/Justificativa)', '2018-06-06 18:30:28', '2018-06-06 18:30:28'),
(12, 'Transferência para outra IES', '2018-06-06 18:30:52', '2018-06-06 18:30:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(225) NOT NULL,
  `username` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `email` varchar(225) NOT NULL,
  `matricula` varchar(220) NOT NULL,
  `telefone` varchar(225) NOT NULL,
  `perfis_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `username`, `password`, `email`, `matricula`, `telefone`, `perfis_id`) VALUES
(1, 'teste1', 'teste', '123', 'teste@email.com', '123qweasd.3`', '(61)3333-4433', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfis`
--
ALTER TABLE `perfis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requerimentos`
--
ALTER TABLE `requerimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setores`
--
ALTER TABLE `setores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiposrequerimentos`
--
ALTER TABLE `tiposrequerimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `perfis`
--
ALTER TABLE `perfis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `requerimentos`
--
ALTER TABLE `requerimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setores`
--
ALTER TABLE `setores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tiposrequerimentos`
--
ALTER TABLE `tiposrequerimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Add Setores_id for table `users` by well
--
ALTER TABLE `users` ADD `setores_id` INT NOT NULL AFTER `perfis_id` ;
