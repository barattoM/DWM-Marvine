#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS Club;
CREATE DATABASE Club;
USE Club;


#------------------------------------------------------------
# Table: Commissions
#------------------------------------------------------------

CREATE TABLE Commissions(
        idCommission  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomCommission Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Membres
#------------------------------------------------------------

CREATE TABLE Membres(
        idMembres    Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomMembre    Varchar (50) NOT NULL ,
        prenomMembre Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: rattache
#------------------------------------------------------------

CREATE TABLE rattache(
        idrattachement   Int  Auto_increment  NOT NULL PRIMARY KEY,
        idMembres        Int NOT NULL ,
        idCommission     Int NOT NULL ,
        dateRattachement Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: parraine
#------------------------------------------------------------

CREATE TABLE parraine(
        idParraine        Int  Auto_increment  NOT NULL PRIMARY KEY,
        idMembres         Int NOT NULL ,
        idMembres_parrain Int NOT NULL ,
        dateParrainage    Date NOT NULL
)ENGINE=InnoDB;

#------------------------------------------------------------
# FOREIGN KEY
#------------------------------------------------------------

ALTER TABLE rattache ADD CONSTRAINT rattache_Membres_FK FOREIGN KEY (idMembres) REFERENCES Membres(idMembres);
ALTER TABLE rattache ADD CONSTRAINT rattache_Commissions0_FK FOREIGN KEY (idCommission) REFERENCES Commissions(idCommission);
ALTER TABLE parraine ADD CONSTRAINT parraine_Membres_FK FOREIGN KEY (idMembres) REFERENCES Membres(idMembres);
ALTER TABLE parraine ADD CONSTRAINT parraine_Membres0_FK FOREIGN KEY (idMembres_parrain) REFERENCES Membres(idMembres);
