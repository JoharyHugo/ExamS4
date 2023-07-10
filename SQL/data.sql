CREATE DATABASE Regime;

USE Regime;

CREATE TABLE Admin(
    idAdmin INT PRIMARY KEY Auto_increment,
    nom VARCHAR(20),
    mdp VARCHAR(20)
);
CREATE TABLE User(
    idUser INT PRIMARY KEY Auto_increment,
    nom VARCHAR(20),
    mdp VARCHAR(20),
    genre VARCHAR(20),
    taille INT,
    poid INT,
    compte INT
);
CREATE TABLE Objectif(
    idObjectif INT PRIMARY KEY Auto_increment,
    NomObjectif VARCHAR(20)
);

CREATE TABLE ObjectifUser(
    idUser INT,
    idObjectif INT,
    poidS INT,
    FOREIGN KEY (idUser) REFERENCES User(idUser),
    FOREIGN KEY (idObjectif) REFERENCES Objectif(idObjectif)
);

CREATE TABLE Sakafo (
    idSakafo INT  PRIMARY KEY Auto_increment,
    NomSakafo VARCHAR(20),
    photo VARCHAR(15)
);

CREATE TABLE Sport (
    idSport INT  PRIMARY KEY Auto_increment,
    NomSport VARCHAR(20)
);

CREATE TABLE Regime(
    idRegime INT PRIMARY KEY Auto_increment,
    idObjectif INT,
    p1 INT,
    p2 INT,
    duree INT,
    Prix INT,
    FOREIGN KEY (idObjectif) REFERENCES Objectif(idObjectif)
);

CREATE TABLE RegimeSakafo(
    idRegime INT,
    idSakafo INT,
    quatite Numeric,
    FOREIGN KEY (idRegime) REFERENCES Regime(idRegime),
    FOREIGN KEY (idSakafo) REFERENCES Sakafo(idSakafo)
);

CREATE TABLE RegimeSport(
    idRegime INT,
    idSport INT,
    duree INT,
    FOREIGN KEY (idRegime) REFERENCES Regime(idRegime),
    FOREIGN KEY (idSport) REFERENCES Sport(idSport)
);

CREATE TABLE Code(
    idCode INT PRIMARY KEY Auto_increment,
    code VARCHAR(15),
    prix INT
);

CREATE TABLE CodeUser(
    idCodeUser INT PRIMARY KEY Auto_increment,
    idCode INT ,
    idUser INT,
    etat INT,
    FOREIGN KEY (idCode) REFERENCES Code(idCode),
    FOREIGN KEY (idUser) REFERENCES User(idUser)
);

INSERT INTO User VALUES (null,'Nirina','huhu','Homme',170,65,0);