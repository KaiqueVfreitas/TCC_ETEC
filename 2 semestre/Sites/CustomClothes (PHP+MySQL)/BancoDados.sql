create database dbCustomClothes;
use dbCustomClothes;

create table tbProduto(
Id int primary key auto_increment,
peca varchar(40) not null,
cor varchar(20),
estampa varchar(50),
tamanho char(2),
preco decimal(8,2) not null
);
select * from tbProduto;
insert into tbProduto (peca, preco) values ("Teste", 100.50);












