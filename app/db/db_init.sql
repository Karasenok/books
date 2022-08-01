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
INSERT books (id, name, fk_author, year)
VALUES ( "Тринадцатая сказка", 1, "2009-06-04");

INSERT authors (name, year)
VALUES ( "Диана Сеттерфилд", "2009-06-04");

UPDATE books
SET image =
    'https://images-na.ssl-images-amazon.com/images/I/71zeyn-2KaL.jpg'
WHERE id = 1;