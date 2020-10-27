#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE IF EXISTS GestionStation;
CREATE DATABASE GestionStation;
USE GestionStation;

#------------------------------------------------------------
# Table: Stations
#------------------------------------------------------------

CREATE TABLE Stations(
        idStation  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomStation Varchar (50) NOT NULL ,
        altitude   Int NOT NULL
)ENGINE=InnoDB CHARSET=utf8;


#------------------------------------------------------------
# Table: Hotels
#------------------------------------------------------------

CREATE TABLE Hotels(
        idHotel      Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomHotel     Varchar (50) NOT NULL ,
        categorie    Varchar (50) NOT NULL ,
        adresseHotel Varchar (100) NOT NULL ,
        villeHotel   Varchar (50) NOT NULL ,
        idStation    Int NOT NULL
)ENGINE=InnoDB CHARSET=utf8;


#------------------------------------------------------------
# Table: Chambres
#------------------------------------------------------------

CREATE TABLE Chambres(
        idChambre       Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroChambre   Varchar (10) NOT NULL ,
        typeChambre     Varchar (50) NOT NULL ,
        capaciteChambre Int NOT NULL ,
        idHotel         Int NOT NULL
)ENGINE=InnoDB CHARSET=utf8;


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

CREATE TABLE Clients(
        idClient      Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomClient     Varchar (50) NOT NULL ,
        prenomClient  Varchar (50) NOT NULL ,
        adresseClient Varchar (100) NOT NULL ,
        villeClient   Varchar (50) NOT NULL
)ENGINE=InnoDB CHARSET=utf8;


#------------------------------------------------------------
# Table: Reservations
#------------------------------------------------------------

CREATE TABLE Reservations(
        idReservation   Int  Auto_increment  NOT NULL PRIMARY KEY,
        idChambre       Int NOT NULL ,
        idClient        Int NOT NULL ,
        dateReservation Date NOT NULL ,
        dateDebut       Date NOT NULL ,
        dateFin         Date NOT NULL ,
        prix            Float NOT NULL ,
        arrhes          Float NOT NULL
)ENGINE=InnoDB CHARSET=utf8;



ALTER TABLE Hotels ADD CONSTRAINT FK_Hotels_Stations FOREIGN KEY (idStation) REFERENCES Stations(idStation);
ALTER TABLE Chambres ADD CONSTRAINT FK_Chambres_Hotels FOREIGN KEY (idHotel) REFERENCES Hotels(idHotel);
ALTER TABLE Reservations ADD CONSTRAINT FK_Reservations_Chambres FOREIGN KEY (idChambre) REFERENCES Chambres(idChambre);
ALTER TABLE Reservations ADD CONSTRAINT FK_Reservations_Clients FOREIGN KEY (idClient) REFERENCES Clients(idClient);