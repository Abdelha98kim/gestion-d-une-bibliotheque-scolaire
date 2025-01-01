-- Creation de base de donnée
CREATE DATABASE biblioSchool;
USE biblioSchool;

-- Creation de la table des roles
CREATE TABLE roles(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
);

-- Creation de la table d'etat
CREATE TABLE etat(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20)
);

-- Creation de la table des categorie
CREATE TABLE categorie(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
);
