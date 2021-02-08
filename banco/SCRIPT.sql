-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE cadastroFunc (
CodFunc INT(20) PRIMARY KEY,
Nome VARCHAR(100)
);

CREATE TABLE ponto (
CodPonto INT(20) PRIMARY KEY,
DataPonto DATETIME,
HoraEntrada TIME,
HoraAlmoco TIME,
HoraRetornoAlmoco TIME,
HoraSaida TIME,
CodFunc INT(20),
FOREIGN KEY(CodFunc) REFERENCES CadastroFunc (CodFunc)
)

