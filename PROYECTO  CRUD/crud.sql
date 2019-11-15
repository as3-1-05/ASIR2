/* https://mariadb.com/kb/en/library/documentation/ */
/* databasea import */
/* $mysql -u user -p < crud.sql */

CREATE DATABASE IF NOT EXISTS joncrud;

use joncrud;

CREATE TABLE IF NOT EXISTS empleados (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(250) NOT NULL,
    img VARCHAR(100)
);


/* insert blog */
INSERT INTO empleados (nombre, apellido, img)
VALUES ('Jon', 'Badiola','irudia03.png'); 

INSERT INTO empleados (nombre, apellido, img)
VALUES ('Maialen', 'Arrieta','irudia04.png'); 