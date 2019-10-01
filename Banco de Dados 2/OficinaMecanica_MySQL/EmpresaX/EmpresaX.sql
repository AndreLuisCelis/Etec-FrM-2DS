/*
 */
 USE test;
  
 DROP DATABASE EmpresaX;
 
 /*********************************************/

CREATE DATABASE EmpresaX;

USE EmpresaX;

CREATE TABLE Departamento(
	Sigla CHAR(5) NOT NULL,
	Departamento VARCHAR(30) NOT NULL
);

ALTER TABLE Departamento ADD
	CONSTRAINT PK_Departamento PRIMARY KEY(Sigla);

CREATE INDEX IDX_Departamento ON Departamento(Departamento);

CREATE TABLE Funcionario(
	CodFuncionario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Sigla CHAR(5),
	Nome CHAR(50) NOT NULL,
	DtNascimento DATETIME NOT NULL,
	Salario DECIMAL(8,2),
	Aposentado BIT,
	CPF CHAR(11) NOT NULL
);

CREATE INDEX IDX_Nome_DtNascimento ON Funcionario(Nome, DtNascimento DESC);

CREATE UNIQUE INDEX IDX_Cpf ON Funcionario(CPF);


ALTER TABLE Funcionario ADD
	CONSTRAINT FK_Departamento_Funcionario FOREIGN KEY(Sigla)
	REFERENCES Departamento(Sigla);

