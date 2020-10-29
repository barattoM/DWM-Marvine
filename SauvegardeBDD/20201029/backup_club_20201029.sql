-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: club
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
-- Current Database: `club`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `club` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `club`;

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
-- Table structure for table `parraine`
--

DROP TABLE IF EXISTS `parraine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parraine` (
  `idParraine` int(11) NOT NULL AUTO_INCREMENT,
  `idMembres` int(11) NOT NULL,
  `idMembres_parrain` int(11) NOT NULL,
  `dateParrainage` date NOT NULL,
  PRIMARY KEY (`idParraine`),
  KEY `parraine_Membres_FK` (`idMembres`),
  KEY `parraine_Membres0_FK` (`idMembres_parrain`),
  CONSTRAINT `parraine_Membres0_FK` FOREIGN KEY (`idMembres_parrain`) REFERENCES `membres` (`idMembres`),
  CONSTRAINT `parraine_Membres_FK` FOREIGN KEY (`idMembres`) REFERENCES `membres` (`idMembres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parraine`
--

LOCK TABLES `parraine` WRITE;
/*!40000 ALTER TABLE `parraine` DISABLE KEYS */;
/*!40000 ALTER TABLE `parraine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rattache`
--

DROP TABLE IF EXISTS `rattache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rattache` (
  `idrattachement` int(11) NOT NULL AUTO_INCREMENT,
  `idMembres` int(11) NOT NULL,
  `idCommission` int(11) NOT NULL,
  `dateRattachement` date NOT NULL,
  PRIMARY KEY (`idrattachement`),
  KEY `rattache_Membres_FK` (`idMembres`),
  KEY `rattache_Commissions0_FK` (`idCommission`),
  CONSTRAINT `rattache_Commissions0_FK` FOREIGN KEY (`idCommission`) REFERENCES `commissions` (`idCommission`),
  CONSTRAINT `rattache_Membres_FK` FOREIGN KEY (`idMembres`) REFERENCES `membres` (`idMembres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rattache`
--

LOCK TABLES `rattache` WRITE;
/*!40000 ALTER TABLE `rattache` DISABLE KEYS */;
/*!40000 ALTER TABLE `rattache` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-29 17:19:20
