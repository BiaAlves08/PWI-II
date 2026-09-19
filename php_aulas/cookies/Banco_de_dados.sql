create database cookies;

show tables;

create table usuarios (
email varchar(100) not null,
senha varchar(20) not null,
nome varchar(100) not null,
cidade varchar(50) not null,
estado char(2) not null,
primary key(email)
);

insert into usuarios values 
('bianca1108alves@gmail.com', 'teste', 'BIANCA SANTOS', 'SÃO PAULO', 'SP');

