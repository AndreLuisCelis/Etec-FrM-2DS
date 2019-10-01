/* 

DDL DATA DEFINITION LANGUAGE

LINGUAGEM DE DEFINIÇÃO DE DADOS

CREATE - ALTER - DROP

/*

DML-- DATA MANIPULATION LANGUAGE

LINGUAGEM E MANIPULAÇÃO DE DAOS

COMANDOS - SELECT - UPDATE - INSERT - UPDATE - DELETE

*/

-- Exibindo  a estrutura da tabela departamento

-- usando o db empresa x

*/
USE Empresax;
GO

--EXEC sp_help 'RecursosHumanos.Departamento';-- sp story procedure
--GO

-- exibindo os dados da tabela

--SELECT* FROM RecursosHumanos.Departamento;
--GO

-- preenchendo registros na tabela

INSERT  INTO RecursosHumanos.Departamento(Sigla,Departamento,DataCadastro)
VALUES('COM','COMERCIAL','23-08-2019');
GO

INSERT  INTO RecursosHumanos.Departamento(Sigla,Departamento,DataCadastro)
VALUES('PCP','PLANEJAMENTO E CONTROLE','23-08-2019');
GO

INSERT  INTO RecursosHumanos.Departamento(Sigla,Departamento,DataCadastro)
VALUES('CPD','CENTRO DE PROCESSAMENYO DE DADOS','12-08-2019');
GO

INSERT  INTO RecursosHumanos.Departamento(Sigla,Departamento,DataCadastro)
VALUES('FIN','FINANCEIRO','15-08-2019');
GO

INSERT  INTO RecursosHumanos.Departamento(Sigla,Departamento,DataCadastro)
VALUES('LOG','LOGISITICA','23-08-2019');
GO

INSERT  INTO RecursosHumanos.Departamento(Sigla,Departamento,DataCadastro)
VALUES('CONT','CONTABILIDADE',GETDATE());
GO

-- peeenchimento da tabela funcionario

--EXEC sp_help 'RecursosHumanos.Funcionario';
--GO

-- SELECIONANDO OS DADOS DA TABELA

--SELECT * FROM
--RecursosHumanos.Funcionario;
--GO

-- INSERINDO  REGISTROS NA tABELA FUNCIONARIO

INSERT INTO RecursosHumanos.Funcionario(Sigla,Nome,Salario,Afastado)
VALUES ('PCP','João da Silva',5500.0,0);
GO

INSERT INTO RecursosHumanos.Funcionario(Sigla,Nome,Salario,Afastado)
VALUES ('PCP','Joquina dos Reis',5750.0,0);
GO

INSERT INTO RecursosHumanos.Funcionario(Sigla,Nome,Salario,Afastado)
VALUES ('PCP','Mario das Cruzes',5250.0,1);

GO
INSERT INTO RecursosHumanos.Funcionario(Sigla,Nome,Salario,Afastado)
VALUES ('COM','Raimunda de França',6700.0,0);
GO

INSERT INTO RecursosHumanos.Funcionario(Sigla,Nome,Salario,Afastado)
VALUES ('COM','Roberto Borges',6000.0,1);
GO

INSERT INTO RecursosHumanos.Funcionario(Sigla,Nome,Salario,Afastado)
VALUES ('CPD','Eliene de Meira',9500.0,0);
GO

INSERT INTO RecursosHumanos.Funcionario(Sigla,Nome,Salario,Afastado)
VALUES ('FIN','Amanda dos Anjos',7500.0,0);
GO



SELECT * FROM RecursosHumanos.Departamento;
SELECT * FROM RecursosHumanos.Funcionario;


-- DELETANDO O PESSOAL DO PCP

DELETE  FROM RecursosHumanos.Funcionario
WHERE Sigla = 'PCP';
GO

-- deletando funcionarios cuja matricula é maior que 12
DELETE FROM RecursosHumanos.Funcionario
WHERE Matricula > 12;
GO

--DELETE FROM RecursosHumanos.Funcionario
--WHERE Salario >700;

--DELETE FROM RecursosHumanos.Departamento
--WHERE Sigla <>'COM';
--GO



























