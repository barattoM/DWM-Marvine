-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: departementregion
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
-- Current Database: `departementregion`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `departementregion` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `departementregion`;

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departement` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `nomDepartement` varchar(50) NOT NULL,
  `idRegion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDepartement`),
  KEY `FK_departement_region` (`idRegion`),
  CONSTRAINT `FK_departement_region` FOREIGN KEY (`idRegion`) REFERENCES `region` (`idRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departement`
--

LOCK TABLES `departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
INSERT INTO `departement` VALUES (1,'Ain',1),(2,'Aisne',7),(3,'Allier',1),(4,'Alpes-de-Haute-Provence',13),(5,'Hautes-Alpes',13),(6,'Alpes-Maritimes',13),(7,'Ardèche',1),(8,'Ardennes',6),(9,'Ariège',11),(10,'Aube',6),(11,'Aude',11),(12,'Aveyron',11),(13,'Bouches-du-Rhône',13),(14,'Calvados',9),(15,'Cantal',1),(16,'Charente',10),(17,'Charente-Maritime',10),(18,'Cher',4),(19,'Correze',10),(20,'Côte-d\'Or',2),(21,'Côtes-d\'Armor',3),(22,'Creuse',10),(23,'Dordogne',10),(24,'Doubs',2),(25,'Drôme',1),(26,'Eure',9),(27,'Eure-et-Loir',4),(28,'Finistère',3),(29,'Corse-du-Sud',5),(30,'Haute-Corse ',5),(31,'Gard',11),(32,'Haute-Garonne',11),(33,'Gers',11),(34,'Gironde',10),(35,'Hérault',11),(36,'Ille-et-Vilaine',3),(37,'Indre',4),(38,'Indre-et-Loire',4),(39,'Isère',1),(40,'Jura',2),(41,'Landes',10),(42,'Loir-et-Cher',4),(43,'Loire',1),(44,'Haute-Loire',1),(45,'Loire-Atlantique',12),(46,'Loiret',4),(47,'Lot',11),(48,'Lot-et-Garonne',10),(49,'Lozère',11),(50,'Maine-et-Loire',12),(51,'Manche',9),(52,'Marne',6),(53,'Haute-Marne',6),(54,'Mayenne',12),(55,'Meurthe-et-Moselle',6),(56,'Meuse',6),(57,'Morbihan',3),(58,'Moselle',6),(59,'Nièvre',2),(60,'Nord',7),(61,'Oise',7),(62,'Orne',9),(63,'Pas-de-Calais',7),(64,'Puy-de-Dôme',1),(65,'Pyrénées-Atlantiques',10),(66,'Hautes-Pyrénées',11),(67,'Pyrénées-Orientales',11),(68,'Bas-Rhin',6),(69,'Haut-Rhin',6),(70,'Rhône',1),(71,'Haute-Saône',2),(72,'Saône-et-Loire',2),(73,'Sarthe',12),(74,'Savoie',1),(75,'Haute-Savoie',1),(76,'Paris',8),(77,'Seine-Maritime',9),(78,'Seine-et-Marne',8),(79,'Yvelines',8),(80,'Deux-Sèvres',10),(81,'Somme',7),(82,'Tarn',11),(83,'Tarn-et-Garonne',11),(84,'Var',13),(85,'Vaucluse',13),(86,'Vendée',12),(87,'Vienne',10),(88,'Haute-Vienne',10),(89,'Vosges',6),(90,'Yonne',2),(91,'Territoire de Belfort',2),(92,'Essonne',8),(93,'Hauts-de-Seine',8),(94,'Seine-Saint-Denis',8),(95,'Val-de-Marne',8),(96,'Val-d\'Oise',8),(97,'Guadeloupe',14),(98,'Martinique',14),(99,'Guyane',14),(100,'La Réunion',14),(101,'Saint-Pierre-et-Miquelon',14),(102,'Mayotte',NULL),(103,'Saint-Barthélemy',14),(104,'Saint-Martin',14),(105,'Terres australes et antarctiques françaises',14),(106,'Wallis-et-Futuna',14),(107,'Polynésie française',14),(108,'Nouvelle-Calédonie',14),(109,'Clipperton',14);
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `nomRegion` varchar(50) NOT NULL,
  `nbDepartement` int(11) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (1,'Auvergne-Rhône-Alpes',12),(2,'Bourgogne-Franche-Comté',8),(3,'Bretagne',4),(4,'Centre-Val de Loire',6),(5,'Corse',2),(6,'Grand-Est',10),(7,'Hauts-de-France',5),(8,'Ile-de-France',8),(9,'Normandie',5),(10,'Nouvelle-Aquitaine',12),(11,'Occitanie',13),(12,'Pays de la Loire',5),(13,'Provence-Alpes-Côte d\'Azur',6),(14,'DOM-TOM',12);
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
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
