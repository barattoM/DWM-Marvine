-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: voiture
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
-- Current Database: `voiture`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `voiture` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `voiture`;

--
-- Table structure for table `marques`
--

DROP TABLE IF EXISTS `marques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marques` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `nomMarque` varchar(50) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marques`
--

LOCK TABLES `marques` WRITE;
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
INSERT INTO `marques` VALUES (1,'Alfa Romeo'),(2,'Audi'),(3,'Bentley'),(4,'BMW'),(5,'Buick'),(6,'Chevrolet'),(7,'Chrysler'),(8,'Dodge'),(9,'Ford'),(10,'GMC'),(11,'Honda'),(12,'Hummer'),(13,'Hyundai'),(14,'Infiniti'),(15,'Isuzu'),(16,'Jaguar'),(17,'Jeep'),(18,'Kia'),(19,'Lamborghini'),(20,'Lexus'),(21,'Lincoln'),(22,'Lotus'),(23,'Maserati'),(24,'Mazda'),(25,'Mercedes-Benz'),(26,'Mercury'),(27,'Mitsubishi'),(28,'Nissan'),(29,'Oldsmobile'),(30,'Plymouth'),(31,'Pontiac'),(32,'Porsche'),(33,'Saturn'),(34,'Subaru'),(35,'Suzuki'),(36,'Toyota'),(37,'Volkswagen'),(38,'Volvo');
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modeles`
--

DROP TABLE IF EXISTS `modeles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modeles` (
  `idModele` int(11) NOT NULL AUTO_INCREMENT,
  `nomModele` varchar(50) NOT NULL,
  `idMarque` int(11) DEFAULT NULL,
  PRIMARY KEY (`idModele`),
  KEY `FK_modeles_marques` (`idMarque`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modeles`
--

LOCK TABLES `modeles` WRITE;
/*!40000 ALTER TABLE `modeles` DISABLE KEYS */;
INSERT INTO `modeles` VALUES (1,'Integra',NULL),(2,'Cabriolet',2),(3,'S5',2),(4,'S4',2),(5,'Mini Cooper',NULL),(6,'Z3',4),(7,'3 Series',4),(8,'LeSabre',5),(9,'Enclave',5),(10,'Riviera',5),(11,'Lucerne',5),(12,'LaCrosse',5),(13,'DTS',NULL),(14,'DeVille',NULL),(15,'Catera',NULL),(16,'Express 2500',6),(17,'Beretta',6),(18,'Tahoe',6),(19,'Lumina',6),(20,'Caprice Classic',6),(21,'Suburban 1500',6),(22,'Avalanche',6),(23,'Cirrus',7),(24,'300C',7),(25,'Spirit',8),(26,'Dakota Club',8),(27,'Vision',NULL),(28,'Ranger',9),(29,'Edge',9),(30,'Five Hundred',9),(31,'LTD',9),(32,'F-Series',9),(33,'EXP',9),(34,'Tempo',9),(35,'Escape',9),(36,'Falcon',9),(37,'Sonoma Club Coupe',10),(38,'Vandura 2500',10),(39,'Yukon XL 2500',10),(40,'Savana 3500',10),(41,'Odyssey',11),(42,'Civic',11),(43,'Santa Fe',13),(44,'Tucson',13),(45,'Tiburon',13),(46,'FX',14),(47,'QX56',14),(48,'M',14),(49,'Wrangler',17),(50,'Patriot',17),(51,'Rio',18),(52,'Rondo',18),(53,'Gallardo',19),(54,'Murcilago',19),(55,'Range Rover',NULL),(56,'Defender',NULL),(57,'Discovery Series II',NULL),(58,'Discovery',NULL),(59,'LS',20),(60,'ES',20),(61,'RX Hybrid',20),(62,'SC',20),(63,'MKX',21),(64,'Mark VII',21),(65,'Quattroporte',23),(66,'626',24),(67,'Familia',24),(68,'MPV',24),(69,'S-Class',25),(70,'SLR McLaren',25),(71,'Milan',26),(72,'Montego',26),(73,'Lancer Evolution',27),(74,'Lancer',27),(75,'Galant',27),(76,'Cordia',27),(77,'Montero Sport',27),(78,'Mirage',27),(79,'Rogue',28),(80,'Frontier',28),(81,'Sentra',28),(82,'GTO',31),(83,'Sunfire',31),(84,'L-Series',33),(85,'Impreza',34),(86,'Outback',34),(87,'Camry',36),(88,'RAV4',36),(89,'Prius',36),(90,'Tundra',36),(91,'XC60',38),(92,'S40',38);
/*!40000 ALTER TABLE `modeles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-29 17:19:21
