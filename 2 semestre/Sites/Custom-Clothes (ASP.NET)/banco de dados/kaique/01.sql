-- Script que será banco de dados de todo o projeto do TCC

-- Banco de dados do site da Custom Clothes
create database dbCustomClothesAspNet;
use dbCustomClothesAspNet;

-- Tabela do login e cadastro de clientes
create table tbLoginCliente(
	nome varchar(50) not null,
    email varchar(50) not null,
    senha password(30) not null,
    idCliente primary key autoincrement
);

-- Tabela do cadastro das compras do cliente
tbCadCompra(
	
);
