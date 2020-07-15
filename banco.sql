CREATE DATABASE lojavirtual;

USE lojavirtual;

CREATE TABLE usuarios (
  id_usuario INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  usuario VARCHAR(100) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  data_cadastro DATETIME NOT NULL)


CREATE TABLE clientes (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100),
	cidade VARCHAR(50),
	estado VARCHAR(2))


CREATE TABLE produtos (
  id_produto INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  descricao VARCHAR(100) NOT NULL,
  valor VARCHAR(100) NOT NULL)


insert into lojavirtual.clientes (nome, email, cidade, estado)
         values('Ricardo','ricardo@teste.com','Itapevi','SP');
insert into lojavirtual.clientes (nome, email, cidade, estado)
         values('Haruo','haruo@teste.com','Barueri','SP');