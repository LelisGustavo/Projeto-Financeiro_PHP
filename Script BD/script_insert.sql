-- COMANDO PARA INSERIR
-- insert into nome_da_tabela (colunas) values (valores)

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Ana Maria', 'ana@gmail.com', 'senha123', '2021-02-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Carlos Junior', 'carlos@gmail.com', '44510', '2021-02-25');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Alexandre Junior', 'ale@gmail.com', '3323', '2021-02-25');

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 1);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Viagens', 2);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Colchão', '4399924455', 'Rua dos Colchões', 1);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Comer Bem', '5599983456', 'Rua dos restaurantes', 2);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1122', '112233', 4500.20, 1);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '4433', '335566',5678.89, 2);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2021-01-10', 45, null, 1, 1, 1, 1);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2021-02-15', 34.12, 'Pagamento adiantado', 2, 2, 2, 2);

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Cedrico Zabuza', 'cedrico@gmail.com', 'cedrico123', '2022-06-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Khaleesi Lélis', 'khaleesi@hotmail.com', 'khaleesi123', '2022-06-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Churumela Rocha', 'chuchu@gmail.com', 'chuchu444', '2022-06-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Gustavo Lélis', 'lelisgustavo@hotmail.com', 'lelis3003', '2022-06-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Jotaro Joestar', 'jojo@gmail.com', 'jojo123', '2022-06-21');

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Arroz', '19993576996', 'Rua dos Alimentos', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Feijão', '19994687007', 'Rua dos Condimentos', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa DorFlex', '1734567890', 'Rua dos Remédios', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Neusadina', '1734789621', 'Rua dos Medicamentos', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Netflix', '1893476556', 'Rua do Lazer', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa AmazonPrime', '1834667654', 'Rua do Entreterimento', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Wild', '1184084802', 'Rua dos Lolzeiros', 7);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Rift', '1134576689', 'Rua do Vazio', 7);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Stand', '2134578910', 'Avenida DIO', 8);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Hamon', '21946996', 'Avenida dos Pilares', 8);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('NuBank', 2211, 221100, 3000.38, 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Caixa', 3344, 334455, 19.97, 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Itaú', 6789, 667788, 1560, 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', 9876, 889977, 157.98, 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', 5566, 556677, 7000.50, 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('HSBC', 7788, 778899, 500.39, 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('NuBank', 9911, 991155, 78.78, 7);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Caixa', 1397, 139700, 900, 7);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco do Brasil', 0033, 300396, 3000, 8);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('NuBank', 4466, 446677, 15.98, 8);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Automovel', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Farmácia', 5);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Saúde', 5);


insert into tb_categoria
(nome_categoria, id_usuario)
values
('Entreterimento', 6);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Cinema', 6);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Jogos', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Lazer', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Serviços', 8);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Viagens', 8);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2022-03-30', 97.65, null, 3, 3, 3, 4);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2022-03-30', 7.48, 'Mercadinho', 4, 4, 4, 4);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2022-05-09', 9.99, null, 5, 5, 5, 5);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2022-05-09', 155, 'Pagamento luz', 6, 6, 6, 5);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2022-04-18', 14.99, null, 7, 7, 7, 6);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2022-04-18', 100.75, null, 8, 8, 8, 6);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2022-01-01', 800.34 , null, 9, 9, 9, 7);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2022-01-01', 756.89, 'IPVA', 10, 10, 10, 7);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2022-10-28', 5000, null, 11, 11, 11, 8);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2022-10-28', 4500.98, 'Agiota', 12, 12, 12, 8);


