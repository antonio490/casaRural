
DROP DATABASE IF EXISTS casaRural;
CREATE DATABASE IF NOT EXISTS casaRural;

##TABLA RESERVAS:

CREATE TABLE Reservas (
    ID int NOT NULL AUTO_INCREMENT,
    Nombre varchar(255),
    Email varchar(255),
    Numero int(4),
    Comentario text,
    Entrada date,
    Salida date,
    Telefono int(6),
    PRIMARY KEY(ID)

);
