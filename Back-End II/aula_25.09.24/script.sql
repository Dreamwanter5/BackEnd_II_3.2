create database loja;
use loja;


create table usuario(
id int auto_increment primary key, /*A chave primária é um componente essencial obrigatório que não se repete, não pode faltar e seria referenciado ao ligar-se com outras tabelas.*/
email text,
senha text
);

insert into usuario (email, senha) values ('email@teste.com', '123');

select * from usuario;
