
USE EmpresaX;

DESCRIBE Funcionario;

INSERT INTO Funcionario(Nome, DtNascimento, Salario, Aposentado, CPF)
	VALUES('João da Silva', '1967-04-21', 2500.0, 1, '12234456678');

SELECT *
FROM Funcionario;

DESCRIBE Departamento;

INSERT INTO Departamento
	VALUES('PRO', 'Produção');