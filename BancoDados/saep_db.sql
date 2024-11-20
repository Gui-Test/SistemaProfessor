CREATE DATABASE saep_db;

USE saep_db;

CREATE TABLE Professor(
	id_professor int AUTO_INCREMENT PRIMARY KEY,
    nome_professor varchar(45) not null,
    email_professor varchar(100) not null,
    senha_professor varchar(45) not null
);

CREATE TABLE Turma(
	id_turma int AUTO_INCREMENT PRIMARY KEY,
    nome_turma varchar(45) not null,
    fk_professor int,
    FOREIGN KEY(fk_professor) REFERENCES Professor(id_professor)
);

CREATE TABLE Atividades(
	id_atividade int AUTO_INCREMENT PRIMARY KEY,
    nome_atividade varchar(45) not null,
    fk_turma int,
    FOREIGN KEY(fk_turma) REFERENCES Turma(id_turma)
);

INSERT INTO Professor(nome_professor, email_professor, senha_professor) VALUES
('Hille', 'guilherme@gmail', '123'),
('Higor', 'higor@gmail', '456'),
('Ludovico', 'ludovico@gmail', '789');

INSERT INTO Turma(nome_turma, fk_professor) VALUES
('DS1',1),
('DS2',1),
('DS3',2),
('DS4',3);

INSERT INTO Atividades(nome_atividade, fk_turma) VALUES
('Exercício1',1),
('Exercício2',1),
('Exercício3',2),
('Exercício4',2),
('Exercício5',3);