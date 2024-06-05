-- Script que será banco de dados de todo o projeto do TCC

-- Banco de dados do site da Custom Clothes
create database dbCustomClothesAspNet;
use dbCustomClothesAspNet;

<<<<<<< HEAD
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
=======
-- Tabela do cadastro de cliente, dados que serão usados para fazer login
create table tbLoginCliente (
    id_cliente int auto_increment primary key,
    -- Lower é para garantir que os registros de informação sempre vai ser em minusculo
    nome varchar(50) not null check (nome = lower(nome)),
    email varchar(50) not null check (email = lower(email)),
    senha varchar(30) not null
);


-- Tabela das informações mais extensas para receber as compras
create table tbCadCompraCli (
    id_compra int auto_increment primary key,
    -- Check lower é para garantir que todas as informações está indo em minusculo
    nome varchar(50) not null check (nome = lower(nome)),
    email varchar(50) not null check (email = lower(email)),
    -- Telefone tem a quantidade de digitos do numero de telefone brasileiro +55 XX XXXXX XXXX
    telefone char(14) check (telefone = lower(telefone)),
    -- CEP está seguindo o padrão brasileiro XXXXX-XXX
    cep char(9) check (cep = lower(cep)),
    cidade varchar(50) check (cidade = lower(cidade)),
    estado varchar(50) check (estado = lower(estado)),
    pais varchar(50) check (pais = lower(pais)),
    rua varchar(50) check (rua = lower(rua)),
    numero char(6) check (numero = lower(numero)),
    complemento varchar(50) check (complemento = lower(complemento)),
    metodopagamento enum('pix', 'boleto', 'cartão de credito', 'cartão de debito'),
    parcelas int,
    datanascimento date,
    genero enum('masculino', 'feminino', 'outro')
);

-- Histórico de compras
create table tbHistCompras (
    registro_compra int auto_increment primary key,
    produtocomprado varchar(255) not null check (produtocomprado = lower(produtocomprado)),
    quantidadeproduto int not null,
    valorunitario decimal(10, 2) not null,
    descontoaplicado enum('5%', '10%'),
    metodopagamento enum('pix', 'boleto', 'cartão de credito', 'cartão de debito')
);

-- Adição das chaves estrangeiras
alter table tbCadCompraCli
	add constraint fk_id_cliente -- Chave primaria da tbLogin... na tbCad... como chave estrangeira
		foreign key (id_cliente) references tbLoginCliente(id_cliente);



>>>>>>> df88977e08126fee2ee675fe06f2cdc7c66b840d
