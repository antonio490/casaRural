
DROP DATABASE IF EXISTS casaRural;
CREATE DATABASE IF NOT EXISTS casaRural;

##TABLA RESERVAS:

CREATE TABLE Reservas (
    ID int NOT NULL AUTO_INCREMENT,
    Nombre varchar(255),
    Email varchar(255),
    numero int(4),
    Comment text,
    Entrada date,
    Salida date,
    PRIMARY KEY(ID)

);
