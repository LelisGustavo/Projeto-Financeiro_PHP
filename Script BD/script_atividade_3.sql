-- 1
select nome_contratante,
		cnpj,
        rua_endereco,
        bairro_endereco,
        cep_endereco
	from tb_contratante
inner join tb_endereco 
	on tb_contratante.id_contratante = tb_endereco.id_contratante;
		
 ------------------------------------------------------
 -- 2
select nome_funcionario,
	   data_admissao,
       nome_cidade,
       nome_estado
	from tb_funcionario
inner join tb_endereco
	on tb_funcionario.id_funcionario = tb_endereco.id_funcionario
inner join tb_cidade
	on tb_cidade.id_cidade = tb_endereco.id_cidade
inner join tb_estado
	on tb_estado.id_estado = tb_cidade.id_estado;
 
 ------------------------------------------------------
 -- 3
select nome_cliente,
	   data_cadastro,
       obs_cliente,
       rua_endereco,
       bairro_endereco,
       nome_pais
	from tb_cliente
inner join tb_endereco
	on tb_cliente.id_cliente = tb_endereco.id_cliente
inner join tb_cidade
	on tb_cidade.id_cidade = tb_endereco.id_cidade
inner join tb_estado
	on tb_estado.id_estado = tb_cidade.id_estado
inner join tb_pais
	on tb_pais.id_pais = tb_estado.id_pais;
    
------------------------------------------------------
-- 4
select nome_funcionario,
	   cargo_funcionario,
       email_funcionario,
       status
	from tb_funcionario
inner join tb_acesso
	on tb_acesso.id_acesso = tb_funcionario.id_acesso;
    
------------------------------------------------------
-- 5
select nome_funcionario, 
	   cargo_funcionario
	from tb_funcionario
inner join tb_cargo
	on tb_cargo.id_cargo = tb_funcionario.id_cargo
    where tb_cargo.id_cargo = 1;
    
------------------------------------------------------
-- 6
select nome_cliente,
	   nome_cidade,
       nome_estado
	from tb_endereco
inner join tb_cliente
	on tb_endereco.id_cliente = tb_cliente.id_cliente
inner join tb_cidade
	on tb_endereco.id_cidade = tb_cidade.id_cidade
inner join tb_estado
	on tb_cidade.id_estado = tb_estado.id_estado
    where nome_estado like '%Paraná%';
	
------------------------------------------------------
-- 7
select rua_endereco,
	   bairro_endereco,
	   cep_endereco
	from tb_endereco
    where rua_endereco between 1 and 10;
    
------------------------------------------------------
-- 8
select email_funcionario
	from tb_funcionario
    where email_funcionario between 1 and 10;
    
------------------------------------------------------
-- 9
select nome_funcionario
	   data_demissao
	from tb_funcionario
    where data_demissao between '1900-01-01' and '2022-12-31'
    and nome_funcionario between 1 and 10;
    
------------------------------------------------------
-- 10
select nome_cliente,
	   data_nasc_cliente
	from tb_cliente
    where data_nasc_cliente between '1980-01-01' and '2000-01-01';




	

