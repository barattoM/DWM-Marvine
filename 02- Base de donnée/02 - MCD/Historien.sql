#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS historien;
CREATE DATABASE historien;
USE historien;

#------------------------------------------------------------
# Table: Batailles
#------------------------------------------------------------

CREATE TABLE Batailles(
        idBataille   Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomBataille  Varchar (50) NOT NULL ,
        lieuBataille Varchar (50) NOT NULL ,
        dateDebut    Date NOT NULL ,
        dateFin      Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Blessures
#------------------------------------------------------------

CREATE TABLE Blessures(
        idBlessure   Int  Auto_increment  NOT NULL PRIMARY KEY,
        typeBlessure Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Grades
#------------------------------------------------------------

CREATE TABLE Grades(
        idGrade  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomGrade Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Unites
#------------------------------------------------------------

CREATE TABLE Unites(
        idUnite  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomUnite Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Soldats
#------------------------------------------------------------

CREATE TABLE Soldats(
        idSoldat           Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomSoldat          Varchar (50) NOT NULL ,
        prenomSoldat       Varchar (50) NOT NULL ,
        dateObtentionGrade Date NOT NULL ,
        dateDeces          Date NOT NULL ,
        idGrade            Int NOT NULL ,
        idBataille         Int

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Rattachement
#------------------------------------------------------------

CREATE TABLE Rattachement(
        idRattachement   Int  Auto_increment  NOT NULL PRIMARY KEY,
        idSoldat         Int NOT NULL ,
        idUnite          Int NOT NULL ,
        dateRattachement Date NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: subit
#------------------------------------------------------------

CREATE TABLE subit(
        idSubit      Int  Auto_increment  NOT NULL PRIMARY KEY,
        idSoldat     Int NOT NULL ,
        idBlessure   Int NOT NULL ,
        dateBlessure Date NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: inflige
#------------------------------------------------------------

CREATE TABLE inflige(
        idInflige  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        idBlessure Int NOT NULL ,
        idBataille Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participation
#------------------------------------------------------------

CREATE TABLE Participation(
        idParticipation Int  Auto_increment  NOT NULL PRIMARY KEY,
        idBataille Int NOT NULL ,
        idSoldat   Int NOT NULL


)ENGINE=InnoDB;

#------------------------------------------------------------
# FOREIGN KEY
#------------------------------------------------------------

ALTER TABLE Soldats ADD CONSTRAINT Soldats_Grades_FK FOREIGN KEY (idGrade) REFERENCES Grades(idGrade);
ALTER TABLE Soldats ADD CONSTRAINT Soldats_Batailles0_FK FOREIGN KEY (idBataille) REFERENCES Batailles(idBataille);
ALTER TABLE Rattachement ADD CONSTRAINT rattachement_Soldats_FK FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);
ALTER TABLE Rattachement ADD CONSTRAINT rattachement_Unites0_FK FOREIGN KEY (idUnite) REFERENCES Unites(idUnite);
ALTER TABLE subit ADD CONSTRAINT subit_Soldats_FK FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);
ALTER TABLE subit ADD CONSTRAINT subit_Blessures0_FK FOREIGN KEY (idBlessure) REFERENCES Blessures(idBlessure);
ALTER TABLE inflige ADD CONSTRAINT inflige_Blessures_FK FOREIGN KEY (idBlessure) REFERENCES Blessures(idBlessure);
ALTER TABLE inflige ADD CONSTRAINT inflige_Batailles0_FK FOREIGN KEY (idBataille) REFERENCES Batailles(idBataille);
ALTER TABLE Participation ADD CONSTRAINT participation_Batailles_FK FOREIGN KEY (idBataille) REFERENCES Batailles(idBataille);
ALTER TABLE Participation ADD CONSTRAINT participation_Soldats0_FK FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);