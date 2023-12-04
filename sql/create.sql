DROP SCHEMA IF EXISTS bestemmie;
CREATE SCHEMA bestemmie;
USE
    bestemmie;

--
-- bestemmie table
--
DROP TABLE IF EXISTS bestemmie;
CREATE TABLE bestemmie
(
    id      INT AUTO_INCREMENT PRIMARY KEY,
    bestemmia   VARCHAR(1024) NOT NULL,
    created TIMESTAMP    NOT NULL
);
