CREATE DATABASE agatecnologia_db;
USE agatecnologia_db;

CREATE TABLE pergunta (
    id int auto_increment NOT NULL,
    descricao text NOT NULL,
    primary key (id)
);

CREATE TABLE resposta (
    id int auto_increment NOT NULL,
    id_pergunta int NOT NULL,
    descricao text NOT NULL,
    primary key (id),
    foreign key (id_pergunta) references pergunta (id)
);

CREATE TABLE funcionario (
    id int auto_increment NOT NULL,
    nome varchar(150) NOT NULL,
    email varchar(150) NOT NULL,
    senha varchar(100) NOT NULL,
    adm char(1) NOT NULL DEFAULT "N",
    primary key (id)
);