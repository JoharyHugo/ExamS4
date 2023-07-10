create database ;
use ;
create table Admin(
    idAdmin int primary key AUTO_INCREMENT,
    nom VARCHAR(20),
    mdp VARCHAR(20)
);
create table User(
    idUser int primary key AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    mdp VARCHAR(50),
    mail VARCHAR(50),
    tel VARCHAR(20)
);
