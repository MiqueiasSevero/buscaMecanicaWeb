CREATE database buscamecanica;
use	buscamecanica;






create table tbl_pessoa(
		id_pessoa INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
		nome varchar(50) not null,
		sobreNome varchar(50) not null,
		cpf varchar(11) not null,
		email varchar(255) not null,
		senha varchar(255) not null,
		tp_usuario char(1),
		tp_status int default 1 ,
        	rua varchar(50) not null,
		bairro varchar(50) not null,
		cidade varchar(50) not null,
		cep varchar(8) not null,
		uf char(3) not null,
		celular varchar(15) not null,
		telefone varchar(15) not null,
		pais varchar(50) default 'BRASIL',
		numero varchar(11) not null,
		complemento varchar(50)
);

create table tbl_veiculos(
		id_veiculo INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    		marca varchar(50) not null,
    		modelo varchar(50) not null,
    		placa varchar(7) not null,
		fk_id_pessoa_dono_veiculo int not null,
		ano_fabricacao date,
		foreign key (fk_id_pessoa_dono_veiculo) references tbl_pessoa(id_pessoa)

);
create table tbl_oficinas(
	   	id_oficina INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    		razao_social varchar(50) not null,
    		cnpj varchar(14) not null,
    		fk_id_pessoa_resp int not null,
    		tp_status int default 1 ,
        	rua varchar(50) not null,
		bairro varchar(50) not null,
		cidade varchar(50) not null,
		cep varchar(8) not null,
		uf char(3) not null,
		pais varchar(50) default 'BRASIL',
		numero varchar(11) not null,
		celular varchar(15) not null,
		telefone varchar(15) not null,
		complemento varchar(50),
    		foreign key ( fk_id_pessoa_resp) references tbl_pessoa(id_pessoa)
    
);
CREATE TABLE tbl_servicos (
		id_servico INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
		nome VARCHAR(70) NOT NULL,
		valor REAL(12 , 2 ) NOT NULL,
        	fk_id_oficina int not null,
		descricao_detalhada VARCHAR(255),
        	foreign key (fk_id_oficina) references tbl_oficinas(id_oficina)

);

create table tbl_sevicos_realizados(
		id_serv_realizado  INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        	fk_id_servico int not null,
        	valor_servico real(12,2) not null,
        	fk_id_veiculo int not null,
        	data datetime ,
        	duracao varchar(10) not null,
        	foreign key ( fk_id_servico) references tbl_servicos(id_servico),
        	foreign key ( fk_id_veiculo ) references tbl_veiculos(id_veiculo)

);



create view V_LISTA_SERVICOS AS SELECT oficina.id_oficina as id_oficina , 
	oficina.razao_social as nome_oficina,
	oficina.rua  as rua_oficina, oficina.bairro as bairro_oficina, 
	oficina.cidade as cidade_oficina, oficina.cep as cep_oficina, 
	oficina.numero as numero_oficina,oficina.celular as celular_oficina,oficina.telefone as telefone_oficina, servico.id_servico as id_servico,
	servico.nome as nome_servico, servico.fk_id_oficina as  fk_id_oficina, 
	servico.valor as  valor from 
	tbl_servicos as servico inner join tbl_oficinas as oficina
	on oficina.id_oficina = servico.fk_id_oficina; 
