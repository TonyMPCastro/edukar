-- Banco de dados: `edukar_gestao`

-- $db = "mysql";tipo de base de dados
-- $host = "localhost";//host da base de dados
-- $user = "root";//usuario da base de dados, se usar o xampp é root
-- $pass = "";// senha, se usar o xampp é vazio
-- $dbname = "edukar_gestao";// nome da base de dados


-- CREATE TABLE `menu_user` (
--   `id` int(11) NOT NULL,
--   `nome` varchar(255) NOT NULL,
--   `ico` varchar(255) NOT NULL,
--   `comandoUrl` varchar(255) NOT NULL,
--   `tipouser` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INSERT INTO `menu_user` (`id`, `nome`, `ico`, `comandoUrl`, `tipouser`) VALUES
-- (1, 'Home', 'mdi mdi-home', 'home/onShow', 1),
-- (2, 'Cursos', 'mdi mdi-table-large', 'adm_curso/index', 1),
-- (4, 'Home', 'mdi mdi-home', 'aluno/index', 2);

-- CREATE TABLE `usuarios` (
--   `id` int(11) NOT NULL,
--   `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `senha` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `tipouser` int(11) NOT NULL
-- ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ALTER TABLE `menu_user`
--   ADD PRIMARY KEY (`id`);
-- ALTER TABLE `usuarios`
--   ADD PRIMARY KEY (`id`);
-- ALTER TABLE `menu_user`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
-- ALTER TABLE `usuarios`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
-- COMMIT;

-- INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipouser`) VALUES
-- (1, 'antonio', 'antonio', '$2y$10$VywIVAane04e4.YjMlhgTOL687XtubBfax50hVgqYbfh.GQi0zwHK', 1),--senha : 123456
-- (2, 'user', 'user', '$2y$10$VywIVAane04e4.YjMlhgTOL687XtubBfax50hVgqYbfh.GQi0zwHK', 2);--senha : 123456



insert tipo_atividade (id_tipo, tipo_atividade) values (1, 'TAREFA');
insert tipo_atividade (id_tipo, tipo_atividade) values (2, 'AVALIAÇÃO');
insert tipo_aula (tipo_aula) values ('ASSICRONA');
insert tipo_aula (tipo_aula) values ('VIDEO');
insert tipo_aula (tipo_aula) values ('LIVE');
insert tipo_aula (tipo_aula) values ('VIDEO-CHAMADA');
insert user (tipo_user, nome_user, email, senha, telefone, data_nascimento, cpf, grau_formacao, formacao_instituicao) values (2, 'Gestrude das Flores', 'Gesflores@edukar.com', md5(123), '98988203742', '1980-05-10', '081.232.401-21', 'Ensino Superior', 'Universidade São Luís'); 
insert user (tipo_user, nome_user, email, senha, telefone, data_nascimento, cpf, grau_formacao, formacao_instituicao) values (2, 'Franscico Raimundo', 'Fraraimundos@edukar.com', md5(123), '98989670143', '1988-08-15', '020.142.805-17', 'Ensino Superior', 'Universidade Paulista');
insert user (tipo_user, nome_user, email, senha, telefone, data_nascimento, cpf, grau_formacao, formacao_instituicao) values (2, 'Janaina Almeida', 'Janalmeida@edukar.com', md5(123), '98988250575', '1999-04-01', '053.124.879-37', 'Ensino Médio', 'Colegio Educacional');
insert user (tipo_user, nome_user, email, senha, telefone, data_nascimento, cpf, grau_formacao, formacao_instituicao) values (2, 'Enzo Henrique', 'Enzherinque@edukar.com', md5(123), '98988734509', '2001-05-20', '203.401.245-10', 'Ensino Médio', 'Colegio Brasil do Saber');

INSERT INTO `curso` VALUES ('1', '1', 'PHP AVANÇADO', '160', 'modelo1.png');
INSERT INTO `curso` VALUES ('2', '1', 'Eletronica Industrial', '300', 'A1');
INSERT INTO `curso` VALUES ('5', '1', 'Sistemas Industriais', '300', 'A1');
INSERT INTO `curso` VALUES ('6', '1', 'Algoritmo', '140', 'A1');
INSERT INTO `curso` VALUES ('7', '1', 'Java Básico', '140', 'A1');
INSERT INTO `curso` VALUES ('8', '1', 'PHP POO', '140', 'A1');
INSERT INTO `curso` VALUES ('9', '1', 'Java POO', '140', 'A1');
INSERT INTO `curso` VALUES ('10', '1', 'MySQL', '140', 'A1');
INSERT INTO `curso` VALUES ('11', '1', 'Python 3', '140', 'A1');
INSERT INTO `curso` VALUES ('12', '1', 'Javascript ', '140', 'A1');
INSERT INTO `curso` VALUES ('13', '1', 'HTML5 e CSS3', '140', 'A1');
INSERT INTO `curso` VALUES ('14', '1', 'Git e GitHub', '140', 'A1');

INSERT INTO `cursa`(`id_user`, `id_curso`, `progresso`, `status`, `data_conclusao`) VALUES (2,1,0,"CURSANDO",null);
INSERT INTO `cursa`(`id_user`, `id_curso`, `progresso`, `status`, `data_conclusao`) VALUES (2,2,0,"CURSANDO",null);
INSERT INTO `cursa`(`id_user`, `id_curso`, `progresso`, `status`, `data_conclusao`) VALUES (2,6,0,"CURSANDO",null);
INSERT INTO `cursa`(`id_user`, `id_curso`, `progresso`, `status`, `data_conclusao`) VALUES (2,7,50,"CURSANDO",null);

INSERT INTO `cursa`(`id_user`, `id_curso`, `progresso`, `status`, `data_conclusao`) VALUES (3,12,0,"CURSANDO",null);
INSERT INTO `cursa`(`id_user`, `id_curso`, `progresso`, `status`, `data_conclusao`) VALUES (3,6,0,"CURSANDO",null);
INSERT INTO `cursa`(`id_user`, `id_curso`, `progresso`, `status`, `data_conclusao`) VALUES (3,11,0,"CURSANDO",null);
INSERT INTO `cursa`(`id_user`, `id_curso`, `progresso`, `status`, `data_conclusao`) VALUES (3,8,50,"CURSANDO",null);


INSERT INTO `modulos`(`id_modulo`,`id_curso`, `nome_modulo`, `descricao`, `posicao`) VALUES (1,10,'Banco de Dados','Banco de Dados é um componente que reúne informações de maneira organizada, consistente, protegida e acessível em tempo hábil por pessoas especializadas. ',1);
INSERT INTO `aulas`( `aula_conteudo`,`descricao`, `id_modulo`, `tipo_aula`) VALUES ('https://youtu.be/Ofktsne-utM','O que é um Banco de Dados?',1,2);
INSERT INTO `aulas`( `aula_conteudo`,`descricao`, `id_modulo`, `tipo_aula`) VALUES ('https://youtu.be/Ofktsne-utM','Criando o primeiro Banco de Dados',1,2);

INSERT INTO `atividade`( `conteudo`,`descricao`, `resposta`, `id_modulo`, `tipo_atividade`) VALUES ('https://docente.ifrn.edu.br/nickersonferreira/disciplinas/programacao-com-acesso-a-banco-de-dados-3o-ano/lista-de-exercicios-sql/at_download/file','TESTE DE MYSQL','A,B,B,C,D,E',1,2);

INSERT INTO `modulos`(`id_modulo`,`id_curso`, `nome_modulo`, `descricao`, `posicao`) VALUES (2,1,'PHP POO','Curso completo de Programação Orientada a Objetos (POO) com a linguagem PHP. Aborda os principais conceitos como Classes, Objetos, instanciamento, abstração, encapsulamento, herança, polimorfismo e muito mais.',1);
INSERT INTO `aulas`( `aula_conteudo`,`descricao`, `id_modulo`, `tipo_aula`) VALUES ('https://youtu.be/Ofktsne-utM',' O que é Programação Orientada a Objetos?',2,2);
INSERT INTO `aulas`( `aula_conteudo`,`descricao`, `id_modulo`, `tipo_aula`) VALUES ('https://youtu.be/Ofktsne-utM','O que é um Objeto?',2,2);

INSERT INTO `atividade`( `conteudo`,`descricao`, `resposta`, `id_modulo`, `tipo_atividade`) VALUES ('https://docente.ifrn.edu.br/nickersonferreira/disciplinas/programacao-com-acesso-a-banco-de-dados-3o-ano/lista-de-exercicios-sql/at_download/file','Teste POO PHP','A,B,B,C,D,E',2,2);

INSERT INTO `modulos`(`id_modulo`,`id_curso`, `nome_modulo`, `descricao`, `posicao`) VALUES (3,2,'Basico','O curso online de eletrônica industrial oferece conhecimento nas áreas de comunicação e automação de processos industriais. ',1);
INSERT INTO `aulas`( `aula_conteudo`,`descricao`, `id_modulo`, `tipo_aula`) VALUES ('https://youtu.be/Ofktsne-utM','Informática Básica',3,2);
INSERT INTO `aulas`( `aula_conteudo`,`descricao`, `id_modulo`, `tipo_aula`) VALUES ('https://youtu.be/Ofktsne-utM','Desenho Técnico',3,2);

INSERT INTO `atividade`( `conteudo`,`descricao`, `resposta`, `id_modulo`, `tipo_atividade`) VALUES ('https://docente.ifrn.edu.br/nickersonferreira/disciplinas/programacao-com-acesso-a-banco-de-dados-3o-ano/lista-de-exercicios-sql/at_download/file','Teste 1','A,B,B,C,D,E',3,2);




CREATE or REPLACE VIEW  view_cursos_modulos_aulas AS
Select   `m`.`id_curso`  as `id_curso`, `m`.`id_modulo`  as `id_modulo`, `a`.`id_aula` as `id_aula`,`a`.`aula_conteudo` as `aula_conteudo`,`a`.`descricao` as `descricao`, `ta`.`tipo_aula` as `tipo_aula`
 from (((`modulos` `m` join `aulas` `a`  ON  `m`.`id_modulo` = `a`.`id_modulo` )
 join `atividade` `at`  ON  `m`.`id_modulo` = `at`.`id_modulo`)
 join `tipo_aula` `ta`  ON  `ta`.`id_tipo_aula` = `a`.`tipo_aula` )
group by `a`.`id_aula`;


CREATE or REPLACE VIEW view_cursos_modulos_atividades AS
Select   `m`.`id_curso`  as `id_curso`, `m`.`id_modulo`  as `id_modulo`,`at`.`id_atividade` as `id_atividade`,`at`.`conteudo` as `conteudo`,`at`.`descricao` as `descricao`, `at`.`resposta` as `resposta`,`tat`.`tipo_atividade` as `tipo_atividade`
 from ((`modulos` `m` join `atividade` `at`  ON  `m`.`id_modulo` = `at`.`id_modulo`)
 join `tipo_atividade` `tat`  ON  `tat`.`id_tipo` = `at`.`tipo_atividade`)
group by `at`.`id_atividade`;

CREATE or REPLACE VIEW view_cursos_user AS 
select `u`.`id_user` AS `id_user`,
`c`.`id_curso` AS `id_curso`,
`c`.`id_user` AS `id_adm`,
`c`.`nome_curso` AS `nome_curso`,
`ca`.`data_conclusao` AS `data_conclusao`,
`ca`.`progresso` AS `progresso`,
`ca`.`status` AS `status` 
from ((`user` `u` join `cursa` `ca` on(`u`.`id_user` = `ca`.`id_user`)) 
join `curso` `c` on(`ca`.`id_curso` = `c`.`id_curso`))

CREATE or REPLACE VIEW view_cert_user AS 
select `u`.`id_user` AS `id_user`,
`c`.`id_curso` AS `id_curso`,
`c`.`id_user` AS `id_adm`,
`c`.`nome_curso` AS `nome_curso`,
`ca`.`data_conclusao` AS `data_conclusao`,
`ca`.`progresso` AS `progresso`,
`ca`.`status` AS `status` ,
`cer`.`chave_verificacao`,
`cer`.`nome_arquivo`,
`cer`.`data_emissao`
from (((`user` `u` join `cursa` `ca` on(`u`.`id_user` = `ca`.`id_user`)) 
join `curso` `c` on(`ca`.`id_curso` = `c`.`id_curso`))
join `certificado` `cer` on(`cer`.`cursa_id_user` = `ca`.`id_user` and `cer`.`cursa_id_curso` = `ca`.`id_curso`))