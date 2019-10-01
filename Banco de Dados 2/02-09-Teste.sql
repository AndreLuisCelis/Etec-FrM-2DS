--DML DE TESTE

-- SELECIONANDO TODOS OS DADOS A TABELA

USE Empresax;
GO

SELECT * FROM
RecursosHumanos.Departamento;
GO



-- selecionando dados de funcionario

SELECT * FROM
RecursosHumanos.Funcionario;
GO

-- ATUALIZANDO OS DADOS DE FUNCIONARIO

UPDATE RecursosHumanos.Funcionario
SET Sigla = 'FIN'
WHERE Matricula = 6;
GO

UPDATE RecursosHumanos.Funcionario
SET Sigla ='TI'
WHERE Matricula = '6';
GO

-- ATUALIZANDO UM DEPARTAMENTO

UPDATE RecursosHumanos.Departamento
SET Sigla = 'TI' , Departamento = ' Tecnolgia da Informação'
WHERE Sigla ='CPD';
GO