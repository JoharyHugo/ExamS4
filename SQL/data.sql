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
    poids INT,
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
    dureeRegime INT,
    Prix INT,
    FOREIGN KEY (idObjectif) REFERENCES Objectif(idObjectif)
);

CREATE TABLE RegimeSakafo(
    idRegime INT,
    idSakafo INT,
    quantite Numeric,
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

CREATE OR REPLACE  view V_RegimeSakafoComplet as
select r.idRegime,r.idObjectif,r.p1,r.p2,r.dureeRegime,r.prix,Rsakafo.idSakafo,
Rsakafo.quantite,Sakafo.NomSakafo,Sakafo.photo from Regime as r 
join RegimeSakafo Rsakafo on r.idRegime=Rsakafo.idRegime
join Sakafo on Sakafo.idSakafo=Rsakafo.idSakafo;


CREATE OR REPLACE view  V_RegimeSportComplet as
select r.idRegime,r.idObjectif,r.p1,r.p2,r.dureeRegime,r.prix,Rsport.idSport,Sport.NomSport,Rsport.duree from Regime as r 
join RegimeSport Rsport on r.idRegime=Rsport.idRegime
join Sport on Sport.idSport=Rsport.idSport;

insert into Objectif values (null,'Augmenter le poids');
insert into Objectif values (null,'Reduire le poids');

insert into ObjectifUser values(1,2,20);
insert into ObjectifUser values(2,1,10);


insert into Sakafo values(null,'humbergeur','humbergeur.jpg');
insert into Sakafo values(null,'salade de fruit','salade de fruit.jpg');
insert into Sakafo values(null,'salade de pate','salade de pate.jpg');
insert into Sakafo values(null,'pomme','pomme.jpg');

insert into Sport values(null,'abdomino');
insert into Sport values(null,'vitesse');
insert into Sport values(null,'natation');


insert into Regime values(null,1,10,20,3,10000);
insert into Regime values(null,2,20,40,5,30000);
insert into Regime values(null,1,50,100,10,100000);


insert into RegimeSakafo values(1,2,20);
insert into RegimeSakafo values(2,1,50);
insert into RegimeSakafo values(3,4,10);


insert into RegimeSport values(1,2,20);
insert into RegimeSport values(2,1,30);
insert into RegimeSport values(3,3,60);

insert into code values(null,'1000123456',1000);
insert into code values(null,'2000780123',2000);
insert into code values(null,'5000456789',5000);
insert into code values(null,'1000012345',10000);
insert into code values(null,'2000067890',20000);
insert into code values(null,'3000123456',3000);
insert into code values(null,'4000789012',4000);
insert into code values(null,'6000345678',6000);
insert into code values(null,'7000901234',7000);
insert into code values(null,'8000567890',8000);
insert into code values(null,'5001234567',500);
insert into code values(null,'9000890123',9000);
insert into code values(null,'1000004567',100000);
insert into code values(null,'2500089012',25000);
insert into code values(null,'3000034567',30000);
