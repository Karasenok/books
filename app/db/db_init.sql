CREATE DATABASE my_db;

CREATE TABLE books
(
    id        INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name      VARCHAR(30) NOT NULL,
    fk_author NUMERIC(10),
    year      TIMESTAMP,
    image     VARCHAR(100)
);

CREATE TABLE authors
(
    id   INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    year TIMESTAMP
);
INSERT books (id, name, fk_author)
VALUES (1, "Тринадцатая сказка", 1);