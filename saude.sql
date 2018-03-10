-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Mar-2018 às 15:50
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saude`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimentos`
--

CREATE TABLE `depoimentos` (
  `id` int(11) NOT NULL,
  `depoi` text NOT NULL,
  `name_depo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `depoimentos`
--

INSERT INTO `depoimentos` (`id`, `depoi`, `name_depo`) VALUES
(1, 'Teste', 'testando'),
(2, 'Novo depoimento', 'Cecel'),
(3, 'Depoimento de fulano', 'Fulano'),
(4, 'Cicrano faz seu depoimento', 'Cicrano'),
(5, 'Cicrano faz seu depoimento', 'Cicrano'),
(6, 'Meu depoimento', 'Eu ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicios`
--

CREATE TABLE `exercicios` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(36) NOT NULL,
  `txbody` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `exercicios`
--

INSERT INTO `exercicios` (`id`, `name`, `url`, `txbody`) VALUES
(1, 'AirÃ³bica', '', '<p>Um dos melhores e mais utilizado em todo o mundo  de fazer muito bem ao seu corpo, faz muito bem a sua alma tamb&eacute;m, sempre de bem com a vida.</p>'),
(2, 'Zumba live', '', '<p>Uma &oacute;tima op&ccedil;&atilde;o para quem quer emagrecer e se divertir ao mesmo tempo, muito todo o seu corpo.</p>'),
(3, 'Caminhada ha tarde', '', '<p>Outra &oacute;tima op&ccedil;&atilde;o para quem n&atilde;o quer gastar seu dinheiro com academias entre outros</p>'),
(4, 'Bike', '', '<p>Mais uma exelente forma de mater a boa forma e ainda se divertir fora de casa</p>'),
(5, 'Esteira ', '', '<p>Bom para quem quer se exercitar em seguran&ccedil;a</p>'),
(6, 'Bicicleta ErgomÃ©trica', '', '<p>Ou se prefirir ainda voc&ecirc; podar&aacute; se exercitar no conforto de seu lar, fazendo uso de uma bicicleta ergom&eacute;trica</p>'),
(7, 'Mantem se Protegido', '', '<p>Lembre-se de tomar muito l&iacute;quido antes e durante todas as atividades f&iacute;sicas</p>'),
(8, 'Teste normal', '', '<p>Um teste normal</p>'),
(9, 'Outro teste de exercicio', '', '<p>Agora vai dar certo....</p>'),
(12, 'Legal', '', '<p>Muito legal</p>'),
(15, 'Meu deus', '70f826960c807f11a23dd3ff9bcc650b.jpg', '<p>Meu Deus que bobeira.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historia`
--

CREATE TABLE `historia` (
  `id` int(11) NOT NULL,
  `rotulo` varchar(100) NOT NULL,
  `url` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historia`
--

INSERT INTO `historia` (`id`, `rotulo`, `url`) VALUES
(1, 'Uma das mais boas lembranÃ§as', 'a99d7c6202bb1ea6b8612b6d71afd848.jpg'),
(2, 'Segunda feira', 'cf86dd5526631cb043059fb810effb4d.jpg'),
(3, 'Alimentando a galeria', 'b9d487ebca86aedd41a5cdad2136a818.jpg'),
(4, 'Mais uma foto legal', 'ef0f727d3bd18ca04a37a17683b7b866.jpg'),
(5, 'Outra foto legal', '151b8651ee808c6c40216fce875bed94.jpg'),
(6, 'Mais uma foto show de bola', '88cd0015f4e762e25dda62d287a24be1.jpg'),
(7, 'Aquele momento inesquecivel', '62c5b07919368025b9ebbf8108e4c004.jpg'),
(8, 'Mais uma foto bacana', '4ce6ec6e174fc427eb4f6a25e895a478.jpg'),
(9, 'Momentos bons', '5c55266d6e0e52a14036d115a3748c5c.jpg'),
(10, 'So mais essa', '6d2e07e379450bb65769303361ac2a1f.jpg'),
(11, 'Foto de teste', 'f9606690b150c716237bf60c0a878313.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `url` varchar(36) NOT NULL,
  `corpo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`id`, `titulo`, `url`, `corpo`) VALUES
(8, 'Post dois', '92cdf337884939eb8c95c44d77c8d3ab.jpg', '<p>Esse e o post de numero dois</p>'),
(9, 'Post tres', '9aff1db42cb637b673a1090f112773bd.jpg', '<p>E esse e o post tres</p>'),
(10, 'Post quatro ', 'bdeb329b7418b703618bb68bd3f7189e.jpg', '<p>Post de numero quatro</p>'),
(12, 'Recuperando o post apagado', '249384518350518f41c7b7d4b59db5f1.jpg', '<p>Caramba apaguei sem querer o post</p>'),
(13, 'Testando tamanho de imagem', '90fa70bfb37ef68657b47be367c4e383.jpg', '<p>Esse &eacute; um teste de imagem grande</p>'),
(14, 'Mais um teste de imagem', 'bc364c30d89f2673a59703b9143128cc.jpg', '<p>Essa imagem j&aacute; est&aacute; no site</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `img` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(2, 'Simone', 'simone@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercicios`
--
ALTER TABLE `exercicios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `depoimentos`
--
ALTER TABLE `depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exercicios`
--
ALTER TABLE `exercicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `historia`
--
ALTER TABLE `historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
