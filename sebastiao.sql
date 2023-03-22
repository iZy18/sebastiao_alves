-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2023 às 17:36
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `imagem` varchar(150) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `imagem`, `texto`) VALUES
(1, 'http://localhost/sebastiao_alves/uploads/imagens_autor/conteudo.jpg', '<p>O autor de \"O Colecionador de Amnésias, e \"Senhora do Amor e da Guerra\"&nbsp; nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido. Professor no Instituto Superior Técnico, é casado e tem duas filhas.&nbsp;</p><p>Até aos 45 anos, escreveu exclusivamente poesia, mas começou a sentir que se repetia, e decidiu fazer mais uma tentativa de escrever ficção, mas desta vez com um afinco que nunca pusera em anteriores tentativas. E finalmente descobriu que era capaz de escrever diálogos e congeminar enredos.</p><p>Publicou então sucessivamente um livro de contos, <i>“O caracol estrábico”</i> (2011), e os romances <i>“O colecionador de amnésias”</i> (2014), <i>“O velho que pensava que fugia”</i> (2017), o romance histórico <i>“Senhora do amor e da guerra”</i> (2020) e o romance \"<i>O homem certo é difícil de encontrar\"&nbsp;</i>(2021).</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cabecalho`
--

CREATE TABLE `cabecalho` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `imagem` text NOT NULL,
  `novidade` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `imagem_mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cabecalho`
--

INSERT INTO `cabecalho` (`id`, `titulo`, `descricao`, `imagem`, `novidade`, `link`, `imagem_mobile`) VALUES
(1, 'Senhora do Amor e da Guerra', '<p>Séculos antes do famoso Gilgamesh, uma bela mulher aparece a comandar os destinos da maior cidade do mundo.<br>Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a coragem, o dom de seduzir, que a conduzem a...</p>', 'http://localhost/sebastiao_alves/uploads/cabecalho_desktop/cabecalho1.jpg', 'Novidade', 'http://localhost/sebastiao_alves/livros/1	', 'http://localhost/sebastiao_alves/uploads/cabecalho_mobile/cabecalho1.jpg'),
(2, 'O caracol estrábico', '<p>12 PERSONAGENS. 12 HISTÓRIAS DE DESFECHO INSÓLITO:</p><p>* Xana desistiu por fim de repelir as atenções de um celibatário de meia-idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda.<br>* Rodrigo chega a ...</p>', 'http://localhost/sebastiao_alves/uploads/cabecalho_desktop/cabecalho2.jpg', '', 'http://localhost/sebastiao_alves/livros/2', 'http://localhost/sebastiao_alves/uploads/cabecalho_mobile/cabecalho2.jpg'),
(3, 'O Colecionador de Amnésias', '<p>Um lapso de memória, um acidente na fábrica …&nbsp; O Engº Zeferino não tem dúvidas: só lhe resta demitir-se. Até porque, tem reparado, lapsos destes tendem a ocorrer-lhe.&nbsp; Espaçados, é certo, mas in...</p>', 'http://localhost/sebastiao_alves/uploads/cabecalho_desktop/cabecalho3.jpg', '', 'http://localhost/sebastiao_alves/livros/3', 'http://localhost/sebastiao_alves/uploads/cabecalho_mobile/cabecalho3.jpg'),
(4, 'O Velho que Pensava que Fugia', '<p>Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos?<br>De que foge? Que procura? Quem o persegue?<br>Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros?<br>Porque&nbsp;...</p>', 'http://localhost/sebastiao_alves/uploads/cabecalho_desktop/cabecalho4.jpg', '', 'http://localhost/sebastiao_alves/livros/4', 'http://localhost/sebastiao_alves/uploads/cabecalho_mobile/cabecalho4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `horario` varchar(150) NOT NULL,
  `telefone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `email`, `morada`, `horario`, `telefone`) VALUES
(1, 'geral@sebastiaoalves.com', 'Rua Jorge Colaço 37A 1700-252 Lisboa, Portugal', 'Segunda a Sexta das 11:00h às 18:00h', '+351 123 456 789');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `ultimos_livros` longtext NOT NULL,
  `destaque_1` int(11) NOT NULL,
  `destaque_2` int(11) NOT NULL,
  `destaque_3` int(11) NOT NULL,
  `foto_autor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `ultimos_livros`, `destaque_1`, `destaque_2`, `destaque_3`, `foto_autor`) VALUES
(1, '', 1, 4, 3, 'http://localhost/sebastiao_alves/uploads/imagens_autor/FOTO-editada.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `data` varchar(500) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `titulo`, `data`, `texto`, `imagem`) VALUES
(2, 'lançamento do livro \"o velho que pensava que fugia\"', '6 de dezembro 2017', 'Terá lugar no dia 6 de Dezembro, pelas 18h10, no Anfiteatro\n                Abreu Faro, a sessão de lançamento do livro \"O velho que pensava\n                que fugia\", de Sebastião Alves. <br />\n                Nesta sessão o autor irá ler algumas passagens do livro. <br />\n                \"Às quatro da madrugada, que faz um homem de oitenta e três anos\n                escondido entre os eucaliptos? <br />\n                De que foge? Que procura? Quem o persegue? Onde irá ele arranjar\n                dinheiro para hóteis, táxis, comboios, autocarros? <br />\n                Porque elege para refúgio esse remoto lugar de romagem onde\n                Virgem Negra acolhe peregrinos desde a Idade Média? <br />\n                E que dilema o vem finalmente surpreender, quando pensava ter\n                descoberto a paz e mesmo reencontrado amor?\" <br />\n                \"Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em\n                engenharia química pela Universidade de Birmingham, Reino Unido,\n                Professor no Instituto <br />\n                Superior Técnico, é casado e tem duas filhas. Outras obras\n                publicadas: O caracol estrábico (contos), Chiado, Editora,\n                2011.\"', 'http://localhost/sebastiao_alves/uploads/imagens_imprensa/conteudo-imprensa2.jpg'),
(3, 'lançamento | senhora do amor e da guerra', '17 Junho 2020', '', 'http://localhost/sebastiao_alves/uploads/imagens_imprensa/conteudo-imprensa1.jpg'),
(7, 'lançamento | senhora do amor e da guerra', '15 Junho 2022', '', 'http://localhost/sebastiao_alves/uploads/imagens_imprensa/imprensa1.jpg'),
(10, 'Novo lancamento', '15 Junho 2022', '<p>Terá lugar no dia 6 de Dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro \"O velho que pensava que fugia\", de Sebastião Alves.<br>Nesta sessão o autor irá ler algumas passagens do livro.<br>\"Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos?<br>De que foge? Que procura? Quem o persegue? Onde irá ele arranjar dinheiro para hóteis, táxis, comboios, autocarros?<br>Porque elege para refúgio esse remoto lugar de romagem onde Virgem Negra acolhe peregrinos desde a Idade Média?<br>E que dilema o vem finalmente surpreender, quando pensava ter descoberto a paz e mesmo reencontrado amor?\"<br>\"Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido, Professor no Instituto<br>Superior Técnico, é casado e tem duas filhas. Outras obras publicadas: O caracol estrábico (contos), Chiado, Editora, 2011.\"</p>', 'http://localhost/sebastiao_alves/uploads/imagens_imprensa/conteudo-imprensa2.jpg'),
(11, 'lançamento | senhora do amor e da guerra', '	17 Junho 2020', '', 'http://localhost/sebastiao_alves/uploads/imagens_imprensa/conteudo-imprensa1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `descricao` text NOT NULL,
  `link` text NOT NULL,
  `destaque` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `descricao`, `link`, `destaque`) VALUES
(1, 'Senhora do amor e da guerra', '<p>Uruk, Mesopotâmia, 3000 a.C.</p><p>&nbsp;Séculos antes do famoso Gilgamesh, uma bela mulher aparece a comandar os destinos da maior cidade do mundo.<br>Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a coragem, o dom de seduzir, que a conduzem ao poder vencendo todas as adversidades; a luta contra a corrupção dos sacerdotes de Inanna; a vitória sobre os invasores amorritas; e finalmente o dia em que embarca para o reino das trevas, vitimada pela pestilência, após inundações que cobriram a terra como após um dilúvio bíblico…</p><p><br>As plaquetas chegam-nos assinadas por Zamug, o Coxo, que abandonou a cidade maldita levando consigo os ensinamentos de Nisaba, ou seja, o segredo da escrita.</p>', 'http://localhost/sebastiao_alves/uploads/livros/livro-conteudo.jpg', 'Novidade'),
(2, 'O caracol estrábico', '<p>12 PERSONAGENS. 12 HISTÓRIAS DE DESFECHO INSÓLITO:</p><p>* Xana desistiu por fim de repelir as atenções de um celibatário de meia-idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda.</p><p><br>* Rodrigo chega a casa angustiado, sabendo que as filhas ficaram sozinhas com a mãe…</p><p><br>* Joaquim acorda e descobre que está cego. A sua reacção não é a que seria de esperar.</p><p><br>* Emigrado em Inglaterra, naturalizado inglês e pouco orgulhoso das suas origens, António tem que deslocar-se à terra onde, certo dia por engano, a cegonha o depositou.</p><p><br>* O velho professor tenta assegurar-se de que está vivo.</p><p><br>* Um pai extraviado telefona à filha dias depois de esta receber a herança.</p><p><br>* Atormentado pelo reumatismo, há dois anos que o velho caçador não pega numa espingarda. Mas no dia do seu nonagésimo aniversário…</p><p><br>* Vendo a bandeira a meia haste, o presidente do instituto pergunta quem morreu…</p><p><br>* Uma esforçada pintora tenta gerir a relação com a sua talentosa mãe.</p><p><br>* O que poderá impedir um sem-abrigo de atingir a glória?</p><p><br>* Num lar de terceira idade, a amizade entre um surdo e um mudo é perturbada pela chegada de uma enigmática mulher.</p><p><br>* Um jovem cientista tem uma inspiração que pode revolucionar a Física Teórica. Infelizmente, como a História não se cansa de demonstrar, os verdadeiros génios não são apenas incompreendidos. São uma raça a abater</p>', 'http://localhost/sebastiao_alves/uploads/livros/livro-conteudo3.jpg', ''),
(3, 'O colecionador de amnésias', '<p>Um lapso de memória, um acidente na fábrica… O Engº Zeferino não tem dúvidas: só lhe resta demitir-se. Até porque, tem reparado, lapsos destes tendem a ocorrer-lhe. Espaçados, é certo, mas inevitáveis como o pingar de uma torneira avariada… Decide pois reformar-se e realizar o seu sonho de sempre: escrever um romance.</p><p><br>Mas a Ideia não vem e a reforma transforma-se num deserto. Horas, semanas, meses, iguais como grãos de areia… Até ao dia mágico em que, numa tabacaria em Pedrouços, repara num livrinho de absurdos com um título extraordinário: Memórias de um amnésico. E embora sinta que o título lhe foi roubado, ao mesmo tempo já sabe o que vai escrever.</p><p><br>Agora trabalha com método. De manhã escreve o passado, aquilo que lhe aconteceu desde o acidente na fábrica, com que se iniciou aquilo a que chama o resto da sua vida. À noite inventa o futuro, pois sabe que não pode dar-se ao luxo de esperar por ele.</p><p><br><i>Como filha e cuidadora de uma doente de Alzheimer, revivi e revi-me, emocionada, em muitas das situações aqui narradas, nestes momentos de ternura, nestes momentos de humor, nestes momentos de tristeza e solidão que fazem o percurso de um homem, desde os tempos em que, embora já atingido pela doença, ainda tinha autonomia... Eis uma forma diferente - e comovente - de falar sobre um doente de Alzheimer.</i><br><strong>Manuela Morais, Associação Alzheimer Portugal</strong></p>', 'http://localhost/sebastiao_alves/uploads/livros/livro-conteudo2.jpg', 'Em promoção'),
(4, 'O velho que pensava que fugia', '<p>Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos?<br>&nbsp;De que foge? Que procura? Quem o persegue?<br>Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros?<br>Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média?<br>E que dilema o vem finalmente surpreender, quando pensava ter encontrado a paz e mesmo reencontrado amor?</p>', 'http://localhost/sebastiao_alves/uploads/livros/livro-conteudo4.jpg', 'Mais vendido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redessociais`
--

CREATE TABLE `redessociais` (
  `id` int(11) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `linkedin` varchar(500) NOT NULL,
  `instagram` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `redessociais`
--

INSERT INTO `redessociais` (`id`, `facebook`, `linkedin`, `instagram`) VALUES
(1, 'https://www.facebook.com/', 'https://www.linkedin.com', 'https://www.instagram.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `last_login`) VALUES
(1, 'teste', 'teste', '16:14:57 - 05/03/2023');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cabecalho`
--
ALTER TABLE `cabecalho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `redessociais`
--
ALTER TABLE `redessociais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cabecalho`
--
ALTER TABLE `cabecalho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `redessociais`
--
ALTER TABLE `redessociais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
