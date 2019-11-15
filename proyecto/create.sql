CREATE DATABASE IF NOT EXISTS txanpa;

use txanpa;

CREATE TABLE IF NOT EXISTS empleados (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    titulos VARCHAR(100) NOT NULL,
    fotodni VARCHAR(100)
);


/* insert blog */
INSERT INTO empleados (nombre, titulos, fotodni)
VALUES ('Titulua 1', 'Hau da informazioa','irudia01.png'); 

INSERT INTO empleados (nombre, titulos, fotodni)
VALUES ('Titulua 2', 'Hau da informazioa 2','irudia02.png'); 