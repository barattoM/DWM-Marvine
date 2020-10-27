-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: gestionplage
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
-- Current Database: `gestionplage`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `gestionplage` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gestionplage`;

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departement` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `nomDepartement` varchar(50) DEFAULT NULL,
  `idRegion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDepartement`),
  KEY `FK_Departement_Region` (`idRegion`),
  CONSTRAINT `FK_Departement_Region` FOREIGN KEY (`idRegion`) REFERENCES `region` (`idRegion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departement`
--

LOCK TABLES `departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detient`
--

DROP TABLE IF EXISTS `detient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detient` (
  `idDetient` int(11) NOT NULL AUTO_INCREMENT,
  `idPlage` int(11) DEFAULT NULL,
  `idNatureDeTerrain` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDetient`),
  KEY `FK_detient_Plage` (`idPlage`),
  KEY `FK_detient_NatureDeTerrain` (`idNatureDeTerrain`),
  CONSTRAINT `FK_detient_NatureDeTerrain` FOREIGN KEY (`idNatureDeTerrain`) REFERENCES `naturedeterrain` (`idNatureDeTerrain`),
  CONSTRAINT `FK_detient_Plage` FOREIGN KEY (`idPlage`) REFERENCES `plage` (`idPlage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detient`
--

LOCK TABLES `detient` WRITE;
/*!40000 ALTER TABLE `detient` DISABLE KEYS */;
/*!40000 ALTER TABLE `detient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `naturedeterrain`
--

DROP TABLE IF EXISTS `naturedeterrain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `naturedeterrain` (
  `idNatureDeTerrain` int(11) NOT NULL AUTO_INCREMENT,
  `typeDeTerrain` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idNatureDeTerrain`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naturedeterrain`
--

LOCK TABLES `naturedeterrain` WRITE;
/*!40000 ALTER TABLE `naturedeterrain` DISABLE KEYS */;
/*!40000 ALTER TABLE `naturedeterrain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plage`
--

DROP TABLE IF EXISTS `plage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plage` (
  `idPlage` int(11) NOT NULL AUTO_INCREMENT,
  `kilomettres` int(11) DEFAULT NULL,
  `idVille` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPlage`),
  KEY `FK_Plage_Ville` (`idVille`),
  CONSTRAINT `FK_Plage_Ville` FOREIGN KEY (`idVille`) REFERENCES `ville` (`idVille`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plage`
--

LOCK TABLES `plage` WRITE;
/*!40000 ALTER TABLE `plage` DISABLE KEYS */;
/*!40000 ALTER TABLE `plage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `nomRegion` varchar(50) DEFAULT NULL,
  `nomResponsable` varchar(50) DEFAULT NULL,
  `prenomResponsable` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ville`
--

DROP TABLE IF EXISTS `ville`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ville` (
  `idVille` int(11) NOT NULL AUTO_INCREMENT,
  `nomVille` varchar(50) DEFAULT NULL,
  `codePostal` varchar(5) DEFAULT NULL,
  `nbTouristeAn` int(11) DEFAULT NULL,
  `idDepartement` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVille`),
  KEY `FK_Ville_Departement` (`idDepartement`),
  CONSTRAINT `FK_Ville_Departement` FOREIGN KEY (`idDepartement`) REFERENCES `departement` (`idDepartement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ville`
--

LOCK TABLES `ville` WRITE;
/*!40000 ALTER TABLE `ville` DISABLE KEYS */;
/*!40000 ALTER TABLE `ville` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-27 17:23:06
