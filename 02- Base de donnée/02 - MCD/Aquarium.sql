#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS Aquarium;
CREATE DATABASE Aquarium;
USE Aquarium;

#------------------------------------------------------------
# Table: Soins
#------------------------------------------------------------

CREATE TABLE Soins(
        idSoins     Int  Auto_increment  NOT NULL PRIMARY KEY,
        natureSoins Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ordre
#------------------------------------------------------------

CREATE TABLE Ordre(
        idOrdre      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleOrdre Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Famille
#------------------------------------------------------------

CREATE TABLE Famille(
        idFamille      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleFamille Varchar (50) NOT NULL ,
        idOrdre        Int NOT NULL

	,CONSTRAINT Famille_Ordre_FK FOREIGN KEY (idOrdre) REFERENCES Ordre(idOrdre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Genre
#------------------------------------------------------------

CREATE TABLE Genre(
        idGenre      Int  Auto_increment  NOT NULL ,
        libelleGenre Varchar (50) NOT NULL ,
        idFamille    Int NOT NULL
	,CONSTRAINT Genre_PK PRIMARY KEY (idGenre)

	,CONSTRAINT Genre_Famille_FK FOREIGN KEY (idFamille) REFERENCES Famille(idFamille)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Especes
#------------------------------------------------------------

CREATE TABLE Especes(
        idEspece  Int  Auto_increment  NOT NULL ,
        nomEspece Varchar (50) NOT NULL ,
        idGenre   Int NOT NULL
	,CONSTRAINT Especes_PK PRIMARY KEY (idEspece)

	,CONSTRAINT Especes_Genre_FK FOREIGN KEY (idGenre) REFERENCES Genre(idGenre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Animaux
#------------------------------------------------------------

CREATE TABLE Animaux(
        idAnimal              Int  Auto_increment  NOT NULL ,
        immatriculationAnimal Varchar (50) NOT NULL ,
        idEspece              Int NOT NULL
	,CONSTRAINT Animaux_PK PRIMARY KEY (idAnimal)

	,CONSTRAINT Animaux_Especes_FK FOREIGN KEY (idEspece) REFERENCES Especes(idEspece)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Pieces
#------------------------------------------------------------

CREATE TABLE Pieces(
        idPiece      Int  Auto_increment  NOT NULL ,
        libellePiece Varchar (50) NOT NULL
	,CONSTRAINT Pieces_PK PRIMARY KEY (idPiece)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Bassins
#------------------------------------------------------------

CREATE TABLE Bassins(
        idBassin      Int  Auto_increment  NOT NULL ,
        libelleBassin Varchar (50) NOT NULL ,
        idPiece       Int NOT NULL
	,CONSTRAINT Bassins_PK PRIMARY KEY (idBassin)

	,CONSTRAINT Bassins_Pieces_FK FOREIGN KEY (idPiece) REFERENCES Pieces(idPiece)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: beneficie
#------------------------------------------------------------

CREATE TABLE beneficie(
        idSoins  Int NOT NULL ,
        idAnimal Int NOT NULL ,
        dateSoin Date NOT NULL
	,CONSTRAINT beneficie_PK PRIMARY KEY (idSoins,idAnimal)

	,CONSTRAINT beneficie_Soins_FK FOREIGN KEY (idSoins) REFERENCES Soins(idSoins)
	,CONSTRAINT beneficie_Animaux0_FK FOREIGN KEY (idAnimal) REFERENCES Animaux(idAnimal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: place
#------------------------------------------------------------

CREATE TABLE place(
        idBassin   Int NOT NULL ,
        idAnimal   Int NOT NULL ,
        dateEntree Date NOT NULL ,
        dateSortie Date NOT NULL
	,CONSTRAINT place_PK PRIMARY KEY (idBassin,idAnimal)

	,CONSTRAINT place_Bassins_FK FOREIGN KEY (idBassin) REFERENCES Bassins(idBassin)
	,CONSTRAINT place_Animaux0_FK FOREIGN KEY (idAnimal) REFERENCES Animaux(idAnimal)
)ENGINE=InnoDB;

