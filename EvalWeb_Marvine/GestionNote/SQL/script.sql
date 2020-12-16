#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS GestionNote;
CREATE DATABASE GestionNote;
USE GestionNote;

#------------------------------------------------------------
# Table: Eleves
#------------------------------------------------------------

CREATE TABLE Eleves(
        idEleve        Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomEleve       Varchar (50) NOT NULL ,
        prenomEleve      Varchar (50) NOT NULL ,
        classe Varchar (50) NOT NULL 
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Matieres
#------------------------------------------------------------

CREATE TABLE Matieres(
        idMatiere        Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleMatiere       Varchar (50) NOT NULL 
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        idUtilisateur        Int  Auto_increment  NOT NULL PRIMARY KEY,
        login       Varchar (50) NOT NULL ,
        nomUtilisateur       Varchar (50) NOT NULL ,
        prenomUtilisateur       Varchar (50) NOT NULL ,
        motDePasse       Varchar (50) NOT NULL ,
        role            Int NOT NULL DEFAULT '2',
        idMatiere            Int NOT NULL
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Suivis
#------------------------------------------------------------

CREATE TABLE Suivis(
        idSuivi        Int  Auto_increment  NOT NULL PRIMARY KEY,
        idMatiere      Int NOT NULL ,
        idEleve       Int NOT NULL ,
        note       Int NOT NULL ,
        coefficient       Int NOT NULL 
)ENGINE=InnoDB;

ALTER TABLE Suivis ADD CONSTRAINT FK_Suivis_Eleves FOREIGN KEY (idEleve) REFERENCES Eleves(idEleve);
ALTER TABLE Suivis ADD CONSTRAINT FK_Suivis_Matieres FOREIGN KEY (idMatiere) REFERENCES Matieres(idMatiere);

INSERT INTO `eleves` (`idEleve`, `nomEleve`, `prenomEleve`, `classe`) VALUES (NULL, 'Dupond', 'toto', 'test'), (NULL, 'Dupont', 'tata', 'test2') ;
INSERT INTO `matieres` (`idMatiere`, `libelleMatiere`) VALUES (NULL, 'Math'), (NULL, 'Français') ;
INSERT INTO `utilisateurs` (`idUtilisateur`, `login`, `nomUtilisateur`, `prenomUtilisateur`, `motDePasse`, `role`, `idMatiere`) VALUES (NULL, 'Proviseur', 'toto', 'titi', '202cb962ac59075b964b07152d234b70', '1', '1'), (NULL, 'ProfFrançais', 'titi', 'toto', '202cb962ac59075b964b07152d234b70', '2', '2') ;
INSERT INTO `suivis` (`idSuivi`, `idMatiere`, `idEleve`, `note`, `coefficient`) VALUES (NULL, '2', '1', '10', '2'), (NULL, '1', '2', '20', '5') ;