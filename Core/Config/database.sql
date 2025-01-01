-- Creation de base de donnée
CREATE DATABASE biblioSchool;
USE biblioSchool;

-- Creation de la table des roles
CREATE TABLE roles(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
);