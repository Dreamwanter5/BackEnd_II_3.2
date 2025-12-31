CREATE DATABASE produto;

USE produto;

CREATE TABLE usuario(
	id int auto_increment primary key,
    email text,
    senha text
);

CREATE TABLE produto(
    id int auto_increment primary key,
    nome text,
    descricao text,
    categoria text,
    preco numeric(15,2),
    estoque int default 0
);

insert into produto 
(nome, descricao, categoria, preco, estoque)
values
('testeA', 'testeA' , 'ROUPA', 10.05, 10),
('testeB', 'testeB' , 'ROUPA', 10.05, 10),
('testeC', 'testeC' , 'UTENSÍLIO', 10.05, 10),
('testeD', 'testeD' , 'ELETRÔNICO', 10.05, 10),
('testeE', 'testeE' , 'ROUPA', 10.05, 10);

