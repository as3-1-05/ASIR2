CREATE DATABASE IF NOT EXISTS Txanpa;

use Txanpa;

CREATE TABLE IF NOT EXISTS empleados (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
    Títulos VARCHAR(250) NOT NULL,
    Foto VARCHAR(100)
);


/* insert blog */
INSERT INTO empleados (title, info, img)
VALUES ('Nombre', 'Títulos','Foto1.jpg'); 

INSERT INTO empleados (title, info, img)
VALUES ('Nombre', 'Títulos','Foto2.jpg'); 