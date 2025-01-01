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

-- Creation de la table des tags
CREATE TABLE tag(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20)
);

-- Creation de la table des livre
CREATE TABLE livre(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(150),
    auteur VARCHAR(30),
    date_creation DATE,
    prix DECIMAL(4,2),
    seriale VARCHAR(10),
    quantite INT DEFAULT(0),
    tag_id INT,
    categorie_id INT,
    CONSTRAINT FK_tagId FOREIGN KEY (tag_id) REFERENCES tag(id),
    CONSTRAINT FK_categorieId FOREIGN KEY (categorie_id) REFERENCES categorie(id)
);