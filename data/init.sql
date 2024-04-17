CREATE DATABASE test;
 use test;
CREATE TABLE users (
                       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(30) NOT NULL,
                       Password VARCHAR(30) NOT NULL,
                       email VARCHAR(50) NOT NULL,
                       date TIMESTAMP
);