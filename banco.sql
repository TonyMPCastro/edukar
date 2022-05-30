-- Banco de dados: `edukar_gestao`

-- $db = "mysql";//tipo de base de dados
-- $host = "localhost";//host da base de dados
-- $user = "root";//usuario da base de dados, se usar o xampp é root
-- $pass = "";// senha, se usar o xampp é vazio
-- $dbname = "edukar_gestao";// nome da base de dados


CREATE TABLE `menu_user` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `ico` varchar(255) NOT NULL,
  `comandoUrl` varchar(255) NOT NULL,
  `tipouser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `menu_user` (`id`, `nome`, `ico`, `comandoUrl`, `tipouser`) VALUES
(1, 'Home', 'mdi mdi-home', 'home/onShow', 1),
(2, 'Cursos', 'mdi mdi-table-large', 'adm_curso/index', 1),
(4, 'Home', 'mdi mdi-home', 'aluno/index', 2);

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipouser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `menu_user`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipouser`) VALUES
(1, 'antonio', 'antonio', '$2y$10$VywIVAane04e4.YjMlhgTOL687XtubBfax50hVgqYbfh.GQi0zwHK', 1),--senha : 123456
(2, 'user', 'user', '$2y$10$VywIVAane04e4.YjMlhgTOL687XtubBfax50hVgqYbfh.GQi0zwHK', 2);--senha : 123456
