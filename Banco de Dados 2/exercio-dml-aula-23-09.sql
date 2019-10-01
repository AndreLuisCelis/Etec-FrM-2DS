/* Atividade de DML 

Andre Luis Celis RM 19324 */

-- Questão 1 
USE OficinaMecanica;

SELECT * FROM Cliente;

UPDATE Cliente 
SET Nome = 'Maria dos Santos Braulio'
WHERE CodCliente = 2;


-- Questão 2
DESCRIBE Cliente;
SELECT * FROM Cliente;
INSERT INTO Cliente (Nome,Endereco,Telefone,CNH)
VALUES ('Andre Luis Celis',' Rua Laercio Ambrosio n 427 vassoura 1 F.Morato-SP',
'1144332211','32345678970');
SELECT * FROM Cliente;

DESCRIBE Veiculo;
SELECT * FROM Veiculo;
INSERT INTO Veiculo (Placa,CodCliente,Marca,Modelo,Ano,Renavam)
VALUES ('HJK5463',8,'Chevrolet','Corsa','1998','43576890');

DESCRIBE VeiculoPesado;
SELECT * FROM VeiculoPesado;
INSERT INTO Veiculo (Placa,CodCliente,Marca,Modelo,Ano,Renavam)
VALUES ('HIJ5678',8,'Mercedes','mb Atros','2010','23456789');
SELECT * FROM Veiculo;
-- SET foreign_key_checks = 0; -- PARA EVITAR O ERRO 1452 STACKOVERFLOW

INSERT INTO VeiculoPesado(Placa, PesoToneladas, NumeroEixos, ComprimentoMetros)
	VALUES('HIJ5678', 40.0, 8, 8.50);
-- SET foreign_key_checks = 1;-- VOLTA PARA AS CONFIGURAÇÕES ORIGINAIS

-- QUESTÃO 3

DESCRIBE Mecanico;
SELECT * FROM Mecanico;
SELECT * FROM Revisao;
DELETE FROM Mecanico
WHERE Nome ='Ronaldo Gafieira';

-- QUESTÃO 4
DESCRIBE Revisao;
DESCRIBE veiculo;
SELECT * FROM Revisao;
SELECT * FROM Cliente WHERE Nome='Roberto Borges';
SELECT * FROM veiculo WHERE CodCliente =3;
SELECT * FROM mecanico;
INSERT INTO Revisao (Placa,CREA,DataHoraRevisao,ValorRevisao,Relatorio,TrocaPecas)
VALUES('EFG5678','23456','2019-09-30 14:00',500.0,'Revisão Geral',1);
-- DELETE FROM revisao WHERE CodRevisao =2;

-- QUESTÃO 5
SELECT * FROM mecanico;
SELECT * FROM revisao WHERE CREA='34567';
UPDATE Revisao SET CREA='23456' WHERE CodRevisao=9;
SELECT * FROM Revisao;

-- QUESTÃO 6
SELECT * FROM Cliente ;
SELECT * FROM Veiculo WHERE CodCliente =1;
DELETE FROM Veiculo WHERE Placa='HJK5463';

-- QUESTÃO 7
SELECT * FROM Revisao WHERE Placa='DEF4567';
DESCRIBE Revisao;
UPDATE Revisao SET ValorRevisao=895.25, Relatorio ='ajuste da
embreagem, a regulagem dos freios e a troca de óleo do motor',
TrocaPecas =0 WHERE Placa = 'DEF4567';

-- QUESTÃO 8
DESCRIBE Veiculo;
INSERT INTO Veiculo (Placa,Marca,Modelo,Ano,Renavam)
VALUES ('DXK7189 ','SUZUKY','Yes','2009','000190867');
SELECT * FROM Veiculo;

-- QUESTÃO 9
SELECT * FROM VeiculoPesado;
SELECT * FROM Veiculo;

DELETE FROM VeiculoPesado WHERE Placa='HIJ5678';
DELETE FROM Veiculo WHERE Placa='HIJ5678';

-- QUESTÃO 10
SELECT * FROM Veiculo WHERE Placa='DXK7189';
SELECT * FROM Cliente;
UPDATE Veiculo SET CodCliente =7 WHERE Placa='DXK7189';
SELECT * FROM Revisao;
SELECT * FROM Mecanico;
INSERT INTO Revisao (Placa,CREA,DataHoraRevisao)
VALUES('DXK7189','45678','2019-09-30 09:00');