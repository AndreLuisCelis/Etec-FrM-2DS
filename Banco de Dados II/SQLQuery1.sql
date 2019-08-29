USE master;
GO

--APAGANDO O BD EMPRESA X

DROP DATABASE Empresax;
GO

CREATE DATABASE Empresax;
GO

USE Empresax;
GO

CREATE SCHEMA RecursosHumanos;
GO
CREATE TABLE RecursosHumanos.Departamento(
Sigla CHAR(5)	 NOT NULL,
Departamento VARCHAR (50) NOT NULL,
DataCadastro DATETIME
);
GO

ALTER TABLE RecursosHumanos.Departamento
ADD CONSTRAINT PK_Departamento PRIMARY KEY(Sigla);
GO

CREATE UNIQUE INDEX IDX_Depertamento
	ON RecursosHumanos.Departamento(Departamento);
	GO

	CREATE TABLE RecursosHumanos.Funcionario (
	Matricula INT NOT NULL IDENTITY,
	Sigla CHAR(5) NOT NULL,
	Nome VARCHAR(50) NOT NULL,
	Salario DECIMAL(8,2)
	);
	GO

	ALTER TABLE RecursosHumanos.Funcionario 
	ADD CONSTRAINT PK_Funcionario PRIMARY KEY (Matricula);

--criação de um indice repetido clusterizado

	
	GO

	--CRIAÇÃO DA CHAVE ESTRANGEIRA

	ALTER TABLE RecursosHumanos.Funcionario
	ADD CONSTRAINT FK_Departamento_Funcionario
	FOREIGN KEY(Sigla) REFERENCES RecursosHumanos.Departamento(Sigla);
	GO