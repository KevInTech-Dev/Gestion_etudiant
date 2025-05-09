CREATE DATABASE IF NOT EXISTS universite;

USE universite;

CREATE TABLE IF NOT EXISTS Administrateur (
    idAdmin INT AUTO_INCREMENT PRIMARY KEY,
    nomAdmin VARCHAR(100) NOT NULL,
    prenomAdmin VARCHAR(100) NOT NULL,
    numTelAdmin VARCHAR(15),
    emailAdmin VARCHAR(100) UNIQUE NOT NULL,
    passWordAdmin VARCHAR(255) NOT NULL,
    confirmpassWord VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS Responsable (
    idResponsable INT AUTO_INCREMENT PRIMARY KEY,
    nomResponsable VARCHAR(100) NOT NULL,
    professionResponsable VARCHAR(100),
    emailResponsable VARCHAR(100) UNIQUE NOT NULL,
    NumTelResponsable VARCHAR(15)
);

CREATE TABLE IF NOT EXISTS Etudiant (
    idEtu INT AUTO_INCREMENT PRIMARY KEY,
    nomEtu VARCHAR(100) NOT NULL,
    prenomEtu VARCHAR(100) NOT NULL,
    adresseEtu VARCHAR(255) NOT NULL,
    dateNais DATE NOT NULL,
    lieuNais VARCHAR(100),
    pays VARCHAR(100),
    nationalité VARCHAR(100),
    sexe ENUM('Masculin', 'Féminin', 'Autre') DEFAULT 'Autre',
    situationMatrimoniale VARCHAR(50),
    email VARCHAR(100) UNIQUE NOT NULL,
    niveauEtude VARCHAR(100),
    parcours VARCHAR(100),
    filière VARCHAR(100),
    photo VARCHAR(255),
    acteNaissance VARCHAR(255),
    relevé VARCHAR(255),
    dateInscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    idAdmin INT,
    idResponsable INT NULL,
    FOREIGN KEY (idAdmin) REFERENCES Administrateur(idAdmin),
    FOREIGN KEY (idResponsable) REFERENCES Responsable(idResponsable)
);