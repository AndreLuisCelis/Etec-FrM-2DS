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

EXEC sp_help 'RecursosHumanos.Departamento';-- sp story procedure
GO

-- exibindo os dados da tabela

SELECT* FROM RecursosHumanos.Departamento;
GO

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









