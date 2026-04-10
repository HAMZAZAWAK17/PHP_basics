CREATE DATABASE IF NOT EXISTS tpdb;
USE tpdb;

-- Création de la table users comme demandé (Partie 1, Q1)
CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(100) NOT NULL,
    lastName VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    age INT(11) NOT NULL
);

-- Insertion de l'utilisateur par défaut pour pouvoir se connecter au début compte tenu de l'authentification (admin/admin)
INSERT INTO users (firstName, lastName, username, password, age) 
VALUES ('Super', 'Admin', 'admin', 'admin', 30);
