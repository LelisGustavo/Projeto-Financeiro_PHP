insert into tb_contratante
(nome_contratante, cnpj)
values
('WM Barros', 01234567890);

insert into tb_acesso
(login, senha, status, id_contratante)
values
('Gustavo Lélis', '300396', '1', 1);

insert into tb_cargo
(nome_cargo, descricao_cargo)
values
('Recrutador', 'Responsável por selecionar novos funcionarios');

insert into tb_funcionario
(nome_funcionario, data_admissao, cargo_funcionario, email_funcionario, id_cargo, id_acesso, id_contratante)
values
('Lucas', '2020-12-12', 'Recrutador', 'Lucas@hotmail.com', 1, 1, 1);

insert into tb_cliente
(nome_cliente, data_nasc_cliente, funcionario_cadastro, email_cliente, obs_cliente, id_funcionario)
values
('Cedrico', '2012-03-30', 'Lucas', 'Cedrico@gmail.com', null, 2);

insert into tb_pais
(nome_pais, sigla_pais)
values
('Brasil', 'BRA');

insert into tb_estado
(nome_estado, uf_estado, id_pais)
values
('São Paulo', 'SP', 1);

insert into tb_cidade
(nome_cidade, id_estado)
values
('Americana', 1);

insert into tb_endereco
(cep_endereco, rua_endereco, bairro_endereco, id_cliente, id_funcionario, id_contratante, id_cidade)
values
('123456789', 'Av. Paulista', 'Mocca', 2, 2, 1, 1);

-----------------------------------------

insert into tb_contratante
(nome_contratante, cnpj)
values
('Sons of Anarchy', 98765432109);

insert into tb_acesso
(login, senha, status, id_contratante)
values
('Jackson Teller', '123456', '1', 2);

insert into tb_cargo
(nome_cargo, descricao_cargo)
values
('Presidente', 'Responsável pelo moto clube');

insert into tb_funcionario
(nome_funcionario, data_admissao, cargo_funcionario, email_funcionario, id_cargo, id_acesso, id_contratante)
values
('Tiggs', '1996-12-12', 'Vice', 'Tiggs@gmail.com', 2, 2, 2);

insert into tb_cliente
(nome_cliente, data_nasc_cliente, funcionario_cadastro, email_cliente, obs_cliente, id_funcionario)
values
('Tara', '1984-03-30', 'Tiggs', 'Tara@hotmail.com', 'Esposa do Presidente', 4);

insert into tb_pais
(nome_pais, sigla_pais)
values
('Brasil', 'BRA');

insert into tb_estado
(nome_estado, uf_estado, id_pais)
values
('Minhas', 'MG', 1);

insert into tb_cidade
(nome_cidade, id_estado)
values
('Belo Horizonte', 3);

insert into tb_endereco
(cep_endereco, rua_endereco, bairro_endereco, id_cliente, id_funcionario, id_contratante, id_cidade)
values
('987654321', 'Rua da Saudade', 'Konoha', 3, 4, 2, 2);

-----------------------------------------

insert into tb_contratante
(nome_contratante, cnpj)
values
('Aldeia da Folha', 00112233445);

insert into tb_acesso
(login, senha, status, id_contratante)
values
('Naruto Uzumaki', '987654', '1', 3);

insert into tb_cargo
(nome_cargo, descricao_cargo)
values
('Hokage', 'Responsável pela aldeia');

insert into tb_funcionario
(nome_funcionario, data_admissao, cargo_funcionario, email_funcionario, id_cargo, id_acesso, id_contratante)
values
('Sasuke', '1990-12-12', 'Vice', 'Sasuke@gmail.com', 3, 3, 3);

insert into tb_cliente
(nome_cliente, data_nasc_cliente, funcionario_cadastro, email_cliente, obs_cliente, id_funcionario)
values
('Sakura', '1992-03-30', 'Sasuke', 'Sakura@hotmail.com', null, 5);

insert into tb_pais
(nome_pais, sigla_pais)
values
('Brasil', 'BRA');

insert into tb_estado
(nome_estado, uf_estado, id_pais)
values
('Londrina', 'PR', 1);

insert into tb_cidade
(nome_cidade, id_estado)
values
('Paraná', 4);

insert into tb_endereco
(cep_endereco, rua_endereco, bairro_endereco, id_cliente, id_funcionario, id_contratante, id_cidade)
values
('987654321', 'Av Saul', 'Sebastião', 4, 5, 3, 3);