-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: historien
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `historien`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `historien` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `historien`;

--
-- Table structure for table `batailles`
--

DROP TABLE IF EXISTS `batailles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batailles` (
  `idBataille` int(11) NOT NULL AUTO_INCREMENT,
  `nomBataille` varchar(50) NOT NULL,
  `lieuBataille` varchar(50) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  PRIMARY KEY (`idBataille`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batailles`
--

LOCK TABLES `batailles` WRITE;
/*!40000 ALTER TABLE `batailles` DISABLE KEYS */;
/*!40000 ALTER TABLE `batailles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blessures`
--

DROP TABLE IF EXISTS `blessures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blessures` (
  `idBlessure` int(11) NOT NULL AUTO_INCREMENT,
  `typeBlessure` varchar(50) NOT NULL,
  PRIMARY KEY (`idBlessure`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blessures`
--

LOCK TABLES `blessures` WRITE;
/*!40000 ALTER TABLE `blessures` DISABLE KEYS */;
/*!40000 ALTER TABLE `blessures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commissions`
--

DROP TABLE IF EXISTS `commissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commissions` (
  `idCommission` int(11) NOT NULL AUTO_INCREMENT,
  `nomCommission` varchar(50) NOT NULL,
  PRIMARY KEY (`idCommission`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commissions`
--

LOCK TABLES `commissions` WRITE;
/*!40000 ALTER TABLE `commissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `commissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grades` (
  `idGrade` int(11) NOT NULL AUTO_INCREMENT,
  `nomGrade` varchar(50) NOT NULL,
  PRIMARY KEY (`idGrade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grades`
--

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inflige`
--

DROP TABLE IF EXISTS `inflige`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inflige` (
  `idInflige` int(11) NOT NULL AUTO_INCREMENT,
  `idBlessure` int(11) NOT NULL,
  `idBataille` int(11) NOT NULL,
  PRIMARY KEY (`idInflige`),
  KEY `inflige_Blessures_FK` (`idBlessure`),
  KEY `inflige_Batailles0_FK` (`idBataille`),
  CONSTRAINT `inflige_Batailles0_FK` FOREIGN KEY (`idBataille`) REFERENCES `batailles` (`idBataille`),
  CONSTRAINT `inflige_Blessures_FK` FOREIGN KEY (`idBlessure`) REFERENCES `blessures` (`idBlessure`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inflige`
--

LOCK TABLES `inflige` WRITE;
/*!40000 ALTER TABLE `inflige` DISABLE KEYS */;
/*!40000 ALTER TABLE `inflige` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membres`
--

DROP TABLE IF EXISTS `membres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membres` (
  `idMembres` int(11) NOT NULL AUTO_INCREMENT,
  `nomMembre` varchar(50) NOT NULL,
  `prenomMembre` varchar(50) NOT NULL,
  PRIMARY KEY (`idMembres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membres`
--

LOCK TABLES `membres` WRITE;
/*!40000 ALTER TABLE `membres` DISABLE KEYS */;
/*!40000 ALTER TABLE `membres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participation`
--

DROP TABLE IF EXISTS `participation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participation` (
  `idParticipation` int(11) NOT NULL AUTO_INCREMENT,
  `idBataille` int(11) NOT NULL,
  `idSoldat` int(11) NOT NULL,
  PRIMARY KEY (`idParticipation`),
  KEY `participation_Batailles_FK` (`idBataille`),
  KEY `participation_Soldats0_FK` (`idSoldat`),
  CONSTRAINT `participation_Batailles_FK` FOREIGN KEY (`idBataille`) REFERENCES `batailles` (`idBataille`),
  CONSTRAINT `participation_Soldats0_FK` FOREIGN KEY (`idSoldat`) REFERENCES `soldats` (`idSoldat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participation`
--

LOCK TABLES `participation` WRITE;
/*!40000 ALTER TABLE `participation` DISABLE KEYS */;
/*!40000 ALTER TABLE `participation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rattachement`
--

DROP TABLE IF EXISTS `rattachement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rattachement` (
  `idRattachement` int(11) NOT NULL AUTO_INCREMENT,
  `idSoldat` int(11) NOT NULL,
  `idUnite` int(11) NOT NULL,
  `dateRattachement` date NOT NULL,
  PRIMARY KEY (`idRattachement`),
  KEY `rattachement_Soldats_FK` (`idSoldat`),
  KEY `rattachement_Unites0_FK` (`idUnite`),
  CONSTRAINT `rattachement_Soldats_FK` FOREIGN KEY (`idSoldat`) REFERENCES `soldats` (`idSoldat`),
  CONSTRAINT `rattachement_Unites0_FK` FOREIGN KEY (`idUnite`) REFERENCES `unites` (`idUnite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rattachement`
--

LOCK TABLES `rattachement` WRITE;
/*!40000 ALTER TABLE `rattachement` DISABLE KEYS */;
/*!40000 ALTER TABLE `rattachement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soldats`
--

DROP TABLE IF EXISTS `soldats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soldats` (
  `idSoldat` int(11) NOT NULL AUTO_INCREMENT,
  `nomSoldat` varchar(50) NOT NULL,
  `prenomSoldat` varchar(50) NOT NULL,
  `dateObtentionGrade` date NOT NULL,
  `dateDeces` date NOT NULL,
  `idGrade` int(11) NOT NULL,
  `idBataille` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSoldat`),
  KEY `Soldats_Grades_FK` (`idGrade`),
  KEY `Soldats_Batailles0_FK` (`idBataille`),
  CONSTRAINT `Soldats_Batailles0_FK` FOREIGN KEY (`idBataille`) REFERENCES `batailles` (`idBataille`),
  CONSTRAINT `Soldats_Grades_FK` FOREIGN KEY (`idGrade`) REFERENCES `grades` (`idGrade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soldats`
--

LOCK TABLES `soldats` WRITE;
/*!40000 ALTER TABLE `soldats` DISABLE KEYS */;
/*!40000 ALTER TABLE `soldats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subit`
--

DROP TABLE IF EXISTS `subit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subit` (
  `idSubit` int(11) NOT NULL AUTO_INCREMENT,
  `idSoldat` int(11) NOT NULL,
  `idBlessure` int(11) NOT NULL,
  `dateBlessure` date NOT NULL,
  PRIMARY KEY (`idSubit`),
  KEY `subit_Soldats_FK` (`idSoldat`),
  KEY `subit_Blessures0_FK` (`idBlessure`),
  CONSTRAINT `subit_Blessures0_FK` FOREIGN KEY (`idBlessure`) REFERENCES `blessures` (`idBlessure`),
  CONSTRAINT `subit_Soldats_FK` FOREIGN KEY (`idSoldat`) REFERENCES `soldats` (`idSoldat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subit`
--

LOCK TABLES `subit` WRITE;
/*!40000 ALTER TABLE `subit` DISABLE KEYS */;
/*!40000 ALTER TABLE `subit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unites`
--

DROP TABLE IF EXISTS `unites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unites` (
  `idUnite` int(11) NOT NULL AUTO_INCREMENT,
  `nomUnite` varchar(50) NOT NULL,
  PRIMARY KEY (`idUnite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unites`
--

LOCK TABLES `unites` WRITE;
/*!40000 ALTER TABLE `unites` DISABLE KEYS */;
/*!40000 ALTER TABLE `unites` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-26 17:22:20
