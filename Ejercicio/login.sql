CREATE DATABASE IF NOT EXISTS login;

use login;

CREATE TABLE IF NOT EXISTS users (

    user VARCHAR(50) NOT NULL PRIMARY KEY,
    password VARCHAR (250)
);

INSERT INTO users (user, password)
VALUES ('jon', '$2y$10$98MYa/LEPQtpdEMyO8PqY.xpQkqYMTvR9AxBLO0krrlTcJpgtsRGm');